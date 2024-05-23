<?php 

$users = [
    ["name" => "Biswa", "age" => 21, "city" => "BBSR"],
    ["name" => "Rohan", "age" => 19, "city" => "CTC"],
    ["name" => "Kishan", "age" => 38, "city" => "Jpur"],
];
// print_r($users);
foreach($users as $user){
    // print_r($user);
    // echo "<br>";
    foreach($user as $key => $item){
        echo "$key is $item";
        echo "<br>";
    }
    echo "<br>"; echo "<br>";
}
?>