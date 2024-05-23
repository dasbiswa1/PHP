<?php

$a = 5;
var_dump($a);
echo "<br>";

$a = (string) $a; //covert into string
var_dump($a);
echo "<br>";

$b = "300";
$b = (int)$b;
var_dump($b);
echo "<br>";

$c = 10;
$c = (array)$c;
var_dump($c);
echo "<br>";

$d = 20;
$d = (object) $d;
var_dump($d);
echo "<br>";
?>