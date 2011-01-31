<?php
class DBLayer
{
	var $link_id;
	var $query_result;
	var $saved_queries = array();
	var $num_queries = 0;

	function DBLayer($db_host, $db_username, $db_password, $db_name)
	{
		$this->link_id = @mysql_connect($db_host, $db_username, $db_password, true);

		if ($this->link_id)
		{
			if (@mysql_select_db($db_name, $this->link_id))
				return $this->link_id;
			else
            {
				//error('Unable to select database. MySQL reported: '.mysql_error());
                $this->close();
            }
		}
		else
			//error('Unable to connect to MySQL server. MySQL reported: '.mysql_error());

        $this->link_id = false;
	}

    function isValid()
    {
        return $this->link_id;
    }

	function query($sql)
	{
        if(!$this->link_id)
            return false;

		$this->query_result = @mysql_query($sql, $this->link_id);

		if ($this->query_result)
		{
			++$this->num_queries;
			return $this->query_result;
		}
		else
		{
			return false;
		}
	}


	function result($query_id = 0, $row = 0)
	{
		return ($query_id) ? @mysql_result($query_id, $row) : false;
	}


	function fetch_assoc($query_id = 0)
	{
		return ($query_id) ? @mysql_fetch_assoc($query_id) : false;
	}


	function fetch_row($query_id = 0)
	{
		return ($query_id) ? @mysql_fetch_row($query_id) : false;
	}


	function num_rows($query_id = 0)
	{
		return ($query_id) ? @mysql_num_rows($query_id) : false;
	}


	function affected_rows()
	{
		return ($this->link_id) ? @mysql_affected_rows($this->link_id) : false;
	}


	function insert_id()
	{
		return ($this->link_id) ? @mysql_insert_id($this->link_id) : false;
	}


	function get_num_queries()
	{
		return $this->num_queries;
	}


	function get_saved_queries()
	{
		return $this->saved_queries;
	}


	function free_result($query_id = false)
	{
		return ($query_id) ? @mysql_free_result($query_id) : false;
	}


	function escape($str)
	{
		if (function_exists('mysql_real_escape_string'))
			return mysql_real_escape_string($str, $this->link_id);
		else
			return mysql_escape_string($str);
	}


	function error()
	{
		$result['error_sql'] = @current(@end($this->saved_queries));
		$result['error_no'] = $this->link_id ? @mysql_errno($this->link_id) : @mysql_errno();
		$result['error_msg'] = $this->link_id ? @mysql_error($this->link_id) : @mysql_error();

		return $result;
	}


	function close()
	{
		if ($this->link_id)
		{
			if ($this->query_result)
				@mysql_free_result($this->query_result);

			return @mysql_close($this->link_id);
		}
		else
			return false;
	}
}

function error($message)
{
	$s = 'Error: <strong>'.$message.'.</strong>';
	echo $s;
}

function sort_players($a, $b)
{
	if($a['leaderGuid'] == $b['leaderGuid'])
		return strcmp($a['name'],$b['name']);
	return ($a['leaderGuid'] < $b['leaderGuid']) ? -1 : 1;
}

function get_zone_name($zone_id)
{
	global $zones;
	$zname = 'Unknown zone';
	if(isset($zones[$zone_id])) {
		$zname = $zones[$zone_id];
    		}
	return $zname;
} 

function test_realm(){
	//return true; //always run
	global $server, $port;
	$s = @fsockopen("$server", $port, $ERROR_NO, $ERROR_STR,(float)0.5);
	if($s){@fclose($s);return true;} else return false;
}
?>