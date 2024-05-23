<?php
$name = "Biswa";
// echo "My name is $name";
$age = 21;

//Operators in string

//dot or concadinate operator
// echo 'My name is '.$name.' and my age is '.$age;

//dot assignment operartor
// $str = "How are you? ";
// $str1 = "Are u ok?";
// $str.=$str1;
// echo $str;

$str2 = "Biswa";
echo strtoupper($str2);
echo "<br>";
echo strtolower($str2);
echo "<br>";

//Reverse String
$str3 = "Hello Biswa!";
echo strrev($str3);
echo "<br>";

//Replace string
$str4 = "Hello Das!";
echo str_replace("Das", "Biswa", $str4);
echo "<br>";

//remove white spaces
echo trim($str4);
echo "<br>";

//string to array
$x = explode(" ", $str4);
print_r($x);
?>