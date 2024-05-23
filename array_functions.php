<?php 

//Check is it a array or not
$users = "abcd";
if(is_array($users)){
    echo "This is an array";
}else {
    echo "this is not an array";
}
echo is_array($users);
echo "<br>";

//Count number fi elements in an array
$user1 = [ "HTML", "37", "Rohan", "Biswa"];
echo count($user1);
echo "<br>";

//Remove element in an array
unSet($user1[1]);
print_r($user1);
echo "<br>";

//add elementat at teh end
array_push($user1, "Kishan");
print_r($user1);
echo "<br>";

//remove last element
array_pop($user1);
print_r($user1);
echo "<br>";

//To find the key of an array
$user2 = ["name" => "biswa", "age" => 21, "email" => "biswa@gmail.com"];
print_r(array_keys($user2));
echo "<br>";

//Array to string
echo implode($user2);
echo "<br>";

//string to array
$str ="Hello how are you biswa";
print_r(explode(" ",$str));
echo "<br>";

//Combine two arrays
$merge = array_merge($user1, $user2);
print_r($merge);
echo "<br>";

//Remove duplicate element from an array
$arr = ["Biswa", "Kishan", "Rohan", "Kishan", "Raj"];
$unique = array_unique($arr);
print_r($unique);
?>

