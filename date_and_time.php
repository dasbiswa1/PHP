<?php 

//Month
echo date("M"); //find the month in word
echo "<br>";
echo date("m"); //finding the month in number
echo "<br>";
echo date("D M Y");
echo "<br>";

//Time
date_default_timezone_set("Asia/Kolkata");
echo date("h: i :sa");
?>