<?php
date_default_timezone_set('Asia/Kolkata');
// Prints the day
$time = date("H:i:s");
echo $time . "<br>"; // 16:09:00
// if ($time < "10:00:00" || $time >= "22:58:00") {
if (strtotime($time) >= strtotime("01:30:00") && strtotime($time) < strtotime("19:30:00")) {
    echo "Link Connected";
} else {
    echo "Link Failure";
}
