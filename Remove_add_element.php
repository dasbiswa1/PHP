<?php 

$users = ["Biswa", "Rohan", "Kishan", "Sham"];
// print_r($users);
// array_push($users, "peter", "Ram"); // add element
// print_r($users);
// echo "<br>";

// array_pop($users); //remove last element
// print_r($users);

array_splice($users, -2); //remove last 2 elements
print_r($users);

?>