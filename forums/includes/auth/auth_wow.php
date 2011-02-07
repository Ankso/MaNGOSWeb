<?php
/**
  * MaNGOS auth plugin for phpBB3
  * Xeross (xeross@theelitist.net)
  * http://theelitist.net
  */

if (!defined('IN_PHPBB'))
    exit;

function login_wow(&$username, &$password)
{
    global $db, $config, $user;

    if (!$username)
        return array(
            'status' => LOGIN_ERROR_USERNAME,
            'error_msg' => 'LOGIN_ERROR_USERNAME',
            'user_row' => array('user_id' => ANONYMOUS),
        );

    if (!$password)
        return array(
            'status' => LOGIN_ERROR_PASSWORD,
            'error_msg' => 'NO_PASSWORD_SUPPLIED',
            'user_row' => array('user_id' => ANONYMOUS),
        );

    // Connect to the MaNGOS logon database
    $conn = new mysqli("host", "username", "password", "logondb");

    // Build the query
    $query = "SELECT id, username, sha_pass_hash, email FROM account WHERE username = '%s'";

    // Get password hash
    $hash = sha1(strtoupper($username.":".$password));
    $username = strtoupper($username);

    $result = $conn->query(sprintf($query, $username));

    if(!$result->num_rows)
        return array(
            'status' => LOGIN_ERROR_USERNAME,
            'error_msg' => 'LOGIN_ERROR_USERNAME',
            'user_row' => array('user_id' => ANONYMOUS),
        );

    $row = $result->fetch_assoc();
    if($row["sha_pass_hash"] != $hash || $row["username"] != $username)
        return array(
            'status' => LOGIN_ERROR_PASSWORD,
            'error_msg' => 'LOGIN_ERROR_PASSWORD',
            'user_row' => array('user_id' => ANONYMOUS),
        );

    $query = "SELECT bandate, unbandate, banreason FROM ip_banned WHERE ip = '%s' AND (bandate = unbandate OR unbandate > %u)";
    $result = $conn->query(sprintf($query, $user->ip, time()));
    if($result->num_rows > 0)
        return array(
            'status'  => LOGIN_ERROR_ACTIVE,
            'error_msg'  => 'ACTIVE_ERROR',
        );

    $query = "SELECT bandate, unbandate, banreason FROM account_banned WHERE id = %u AND (bandate = unbandate OR unbandate > %u)";
    $result = $conn->query(sprintf($query, $row["id"], time()));
    if($result->num_rows > 0)
        return array(
            'status'  => LOGIN_ERROR_ACTIVE,
            'error_msg'  => 'ACTIVE_ERROR',
        );

    $email = $row["email"];

    $sql = "SELECT user_id, username, user_password, user_passchg, user_email, user_type FROM %s WHERE username_clean = '%s'";
    $result = $db->sql_query(sprintf($sql,USERS_TABLE, utf8_clean_string($username)));
    $row = $db->sql_fetchrow($result);

    if(!$row) // If the user hasn't been added to the phpBB db yet
    {
        $sql = "SELECT group_id FROM %s WHERE group_name = '%s' AND group_type = %u";
        $result = $db->sql_query(sprintf($sql, GROUPS_TABLE, $db->sql_escape('REGISTERED'), GROUP_SPECIAL));
        $row = $db->sql_fetchrow($result);

        if(!$row)
            trigger_error('NO_GROUP');

        $user_row = array(
            'username'  => ucwords(strtolower($username)),
            'user_password' => phpbb_hash($password),
            'user_email' => $email,
            'group_id'  => (int) $row['group_id'],
            'user_type'  => USER_NORMAL,
            'user_ip'  => $user->ip,
        );

        return array(
            'status'  => LOGIN_SUCCESS_CREATE_PROFILE,
            'error_msg'  => false,
            'user_row'  => $user_row,
        );
    }
    else // User is already added, log him/her in
    {
        if ($row['user_type'] == USER_INACTIVE || $row['user_type'] == USER_IGNORE)
        {
            return array(
                'status'  => LOGIN_ERROR_ACTIVE,
                'error_msg'  => 'ACTIVE_ERROR',
                'user_row'  => $row,
            );
        }

        return array(
            'status'  => LOGIN_SUCCESS,
            'error_msg'  => false,
            'user_row'  => $row,
        );
    }
}
?>
