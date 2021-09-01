<!-- Write a PHP script to calculate the difference between two dates. -->
<?php
$sdate = "1981-11-04";
$edate = "2013-09-04";

$DateDifference = abs(strtotime($edate) - strtotime($sdate));

$years = floor($DateDifference / (365 * 60 * 60 * 24));
$months = floor(($DateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$days = floor(($DateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

printf("%d years, %d months, %d days", $years, $months, $days);
?>