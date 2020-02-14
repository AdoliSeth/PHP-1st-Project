<?php
//multidimensional arrays

$holiday = array (
    array("Monday", "Hawaii", 2),
    array("Tuesday", "Mombasa", 3),
    array("Wednesday", "Dar es Salaam", 4),
    array("Thursday", "Mumbai", 5)
);

echo "This " .$holiday[0][0] . " I will be paying a visit to " .$holiday[0][1]. " for " .$holiday[0][2]. " days <br>";
echo "This " .$holiday[1][0] . " I will be paying a visit to " .$holiday[1][1]. " for " .$holiday[1][2]. " days <br>";
echo "This " .$holiday[2][0] . " I will be paying a visit to " .$holiday[2][1]. " for " .$holiday[2][2]. " days <br>";
echo "This " .$holiday[3][0] . " I will be paying a visit to " .$holiday[3][1]. " for " .$holiday[3][2]. " days <br>";

//date and time
echo "Today is " . date("Y/m/d"). "<br>";
echo "Yesterday was " . date("Y.m.d") . "<br>";

echo "The time is " .date("h.i.s a"). "<br>";
//date_default_timezone_set("EAST");
echo "The time is " .date("h.i.s a"). "<br>";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

////include and require
//include 'lesson1.php';
//require 'lesson1.php';

////readfile
//echo readfile("assignment.php");
//
////fopen
////$my_file = fopen('assignment.php', 'r+');
//echo $my_file;
//fclose($my_file);

//$myfile = fopen('lesson7.php', 'w');
//$txt = 'John doe';
//fwrite($myfile, $txt);




