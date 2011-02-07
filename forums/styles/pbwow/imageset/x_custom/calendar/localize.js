var resetMonth = 1;

var resetDay = 2;
var reset7 = 0;
var reset5 = 1;
var reset3 = 0;

var t = 0;
var raid = new Array;
raid[t] = [0, "Blackwing Lair", 7]; t++;
raid[t] = [0, "Molten Core", 7]; t++;
raid[t] = [0, "Temple of Ahn&#146;Qiraj (40-man)", 7]; t++;
raid[t] = [0, "Naxxramas", 7]; t++;
raid[t] = [0, "Onyxia", 5]; t++;
raid[t] = [0, "Zul&#146;Gurub", 3]; t++;
raid[t] = [0, "Ruins of Ahn&#146;Qiraj (20-man)", 3]; t++;

var monthArrayName = new Array;
monthArrayName[1] = "January";
monthArrayName[2] = "February";
monthArrayName[3] = "March";
monthArrayName[4] = "April";
monthArrayName[5] = "May";
monthArrayName[6] = "June";
monthArrayName[7] = "July";
monthArrayName[8] = "August";
monthArrayName[9] = "September";
monthArrayName[10] = "October";
monthArrayName[11] = "November";
monthArrayName[12] = "December";

var weekdayName = new Array;
weekdayName[0] = "Sunday";
weekdayName[1] = "Monday";
weekdayName[2] = "Tuesday";
weekdayName[3] = "Wednesday";
weekdayName[4] = "Thursday";
weekdayName[5] = "Friday";
weekdayName[6] = "Saturday";

var textpreviousmonth = "Previous Month";
var textnextmonth = "Next Month";

var textresettime = "Reset Time";

var threeAM = "3:00AM";

var textmaintenance = "Tuesday Maintenance";

var legendnote = "Note: icons on the calendar denote days when instances are reset";

var raidtext = "All raid instances reset at a certain server time on certain days, regardless of when players were actually saved to the instance. The reset times are as follows:\
<p><div style='padding-left:20px;'>\
<b style='color:ffe400;'>Blackwing Lair</b>: <span style='color:ffffff;'>Every 7 Days during weekly maintenance</span><br>\
<b style='color:ffe400;'>Molten Core</b>: <span style='color:ffffff;'>Every 7 Days during weekly maintenance</span><br>\
<b style='color:ffe400;'>Temple of Ahn'Qiraj <small style='color:ffe400;'>(40-man)</small></b>: <span style='color:ffffff;'>Every 7 Days during weekly maintenance</span><br>\
<b style='color:ffe400;'>Naxxramas</b>: <span style='color:ffffff;'>Every 7 Days during weekly maintenance</span><br>\
<b style='color:ffe400;'>Onyxia</b>: <span style='color:ffffff;'>Every 5 Days at 3:00AM</span><br>\
<b style='color:ffe400;'>Zul'Gurub</b>: <span style='color:ffffff;'>Every 3 Days at 3:00AM</span><br>\
<b style='color:ffe400;'>Ruins of Ahn'Qiraj <small style='color:ffe400;'>(20-man)</small></b>: <span style='color:ffffff;'>Every 3 Days at 3:00AM</span><br>\
</div><p>\
Resets occur at 3:00AM or during weekly maintenance. <p>\
As the reset time approaches, players inside instances will be informed of the impending reset every hour on the hour. 15 minutes before the reset, the /reminders become more frequent; once the reset time is reached, all players in the \
instance will be ported to their bind point. You can access your saved raid status at any time via <b>/raidinfo</b>, and you \
will be informed of your status regarding an instance when you zone into the dungeon.";