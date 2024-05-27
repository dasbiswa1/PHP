<?php 

class MathOperations{
    public $val = 30; //declar variable in class
    function sum($a, $b){
        return $a+$b+$this->val;
    }

    function mul($a, $b){
        echo $a*$b;
    }

    function sub($a, $b){
        echo $a-$b;
    }

}

$maths= new MathOperations();
   echo $maths->sum(4, 3);
   echo "<br>";
   echo $maths->mul(4, 3);
   echo "<br>";
   echo $maths->sub(4, 3);

?>