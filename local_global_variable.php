<!-- Local Variable -->

<!-- <?php 

// function getName(){
//     $name = "Anil";
//     echo $name;
// }

// echo $name; //it'll give an error

// getName();
 ?> -->

<!-- Global Variable -->

<?php 

$name = "Raghav";
function getName(){
    global $name;
    echo "In function : $name";
}
getName();
echo "<br>";

echo "Out of function : $name" ;
?>