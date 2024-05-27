<!-- Public -->
<?php 

// class Teacher{
//     public function questionPaper(){
//         echo "quetsion paper for students!";
//     }
// }

// $t1 = new Teacher();
// $t1->questionPaper();

?>


<!-- Private -->
<?php 

// class Teacher{
//     private function questionPaper(){
//         echo "Question paper for students!";
//     }

//     function exam(){
//         $this->questionPaper();
//     }
// }

// $t1 = new Teacher();
// $t1->exam();

?>


<!--Protected-->
<?php 

class Teacher{
    protected function studentMarks(){
        echo "all students marks";
    }
}

class Management extends Teacher{
    function reviewExam(){
        $this->studentMarks();
    }
}

$t1 = new Teacher();
$m1 = new Management();
echo $m1->reviewExam();

?>