<?php 

// print_r($_POST);
echo "<br>";

if(isset($_POST['name'])){
    echo "User name is : ". $_POST['name'];
    echo "<br>";
    echo "Email is : ".$_POST['email'];
    echo "<br>";
    echo "Gender is : ".$_POST["gender"];
    echo "<br>";
    echo "City is : ".$_POST["city"];
    echo "<br>";
    echo "User skills are : ". implode(", ", $_POST['skills']);
    echo "<br>";
    echo "About you : ".$_POST['about'];

}
?>