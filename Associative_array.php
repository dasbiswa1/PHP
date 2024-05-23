<?php 

$userDetails = ["name" => "Biswa", "age" => "21", "city" => "BBSR"];

// echo $userDetails["name"];
// echo "<hr>";
// echo $userDetails["age"];
// echo "<hr>";
// echo $userDetails["city"];
// echo "<hr>";

foreach($userDetails as $key => $data){
    echo $key. " is ". $data;
    echo "<br>";
}
?>