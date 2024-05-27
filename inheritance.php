<?php 

class Student{
    function login(){
        echo "Student logged in!";
    }
}

class Teacher{
    function login(){
        echo "Teacher logged in!";
    }
}

$s1 = new Student();
$s1->login();

echo "<br>";
$t1 = new Teacher();
$t1->login();

?>