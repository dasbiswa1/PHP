<?php

$users = ["Biswa", "Rohan", "Adi", "Kishan", "Ram", "Sham"];
foreach ($users as $x){

    if($x == "Adi"){
        continue;
    }
    echo "<h1 style = 'color : green'>".$x."<h1>";
    // if($x == "Kishan"){
    //     break;
    // }

}

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   echo "$x <br>";
// }
?>