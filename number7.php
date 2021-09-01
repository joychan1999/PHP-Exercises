<!-- Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday.  -->
<?php
$myBirthday = mktime(0, 0, 0, 12, 24, 1999); // modify the birth day 12/31/2013
$today = time();
$diff_days = ($myBirthday - $today);
$days = (int)($diff_days / 86400);
print "Your next birthday will be in: ".$days ."days from now!" ;
?>