<?php 
$num = 20;
echo $num;
echo "<br>";
echo var_dump($num); //use to know data type of the variable
echo "</br>";

$name = "Biswa";
echo $name;
echo "</br>";
echo var_dump($name);
echo "</br>";

$num_float = 10.5;
echo var_dump($num_float);
echo "</br>";

$bool = true;
echo var_dump($bool);
echo "</br>";

$arr = [2, 4, 7, "biswa"];
echo var_dump($arr);
echo "</br>";

$empty = null;
echo var_dump($empty);
echo "</br>";
// $user = new className(); //object

$connection = ftp_connect("127.0.0.1") or die("local host not found");
echo var_dump($connection)

?>