<?php 

// $user = ["name" => "anil", "age" => 30, "email" => "biswa@gmail.com"];
// $userJson = json_encode($user);
// // print_r($user);
// echo $userJson;

//covert into array
$data = '{"name":"anil","age":30,"email":"biswa@gmail.com"}';
$dataArray = json_decode($data, true);
print_r($dataArray);

?>