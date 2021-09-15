<?php
date_default_timezone_set('Asia/Kolkata');
// Default subscription time ended at 00:00:00 hrs
$default_sub_time = "00:00:00";
$sub_duration = "+1 year";

$add_user_date = date("Y-M-d");
$add_sub_time = date("H:i:s");


$sub_valid_from = $add_user_date . " " . $add_sub_time;


$sub_valid_to = strtotime($add_user_date);
$sub_valid_to = strtotime($sub_duration, $sub_valid_to);
$sub_valid_to_with_time = date("M d, Y", $sub_valid_to) . " " . $default_sub_time;

// echo $sub_valid_from . "<br>";
// echo $sub_valid_to_with_time . "<br>";

if (strtotime($sub_valid_from) < strtotime($sub_valid_to_with_time)) {

    echo "Subscription valid til " . substr($sub_valid_to_with_time, 0, 13); //Subscription valid til Sep 14, 2022
    seven_day_before_alert(substr($sub_valid_to_with_time, 0, 13));
    three_day_before_alert(substr($sub_valid_to_with_time, 0, 13));
    one_day_before_alert(substr($sub_valid_to_with_time, 0, 13));
} else {
    echo "Your Subscription Expired";
}
