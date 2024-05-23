<?php 

$mulUsers = [[1, "Biswa", "BBSR"],
[2, "Sham", "CTC"],
[3, "Rohan", "Kdpda"],
[4, "Krishu", "Brmpur"]];

// echo "<pre>";
// print_r($mulUsers);

// echo count($mulUsers);

for($i = 0; $i < count($mulUsers);$i++) {
    // print_r($mulUsers[$i]);
    // echo "<br>";
    for($j = 0; $j < count($mulUsers[$i]); $j++){
        echo $mulUsers[$i][$j];
        echo "<br>";
    }
}
?>