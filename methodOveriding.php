<?php 

class Teacher{
    // function nextExam(){
    //     echo "Next is is math";
    // }

    public $city = "BBSR";
    function age(){
        echo "my name is 40!";
    }
}

// $t1 = new Teacher();
// $t1->nextExam();

class student extends Teacher{

    public $city = "KDPADA";
    function age(){
        echo "my name is 21!";
    }

}

$s1 = new student();
// $s1->nextExam();
$s1->age();
echo "<br>";
echo $s1->city;

?>