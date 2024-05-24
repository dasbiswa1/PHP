<?php 

$host="localhost";
$userName = "root";
$password = null;
$database = "college";

$conn = new mysqli($host, $userName, $password, $database);
if($conn->connect_error){
    die ("Connection failed".$conn->$connect_error);
}

echo "connection sucessful";

echo "<br>";
$result = $conn->query("show tables")->fetch_all();
print_r($result);
?>