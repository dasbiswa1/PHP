<?php 

//Final key word in class
// final class honda{

// }

// class car extends honda {

// }

// $c = new car();



//final ketword with function
class honda {
    final function companyName(){
        echo "Honda";
    }
}

class car extends honda {
    final function companyName(){
        echo "Honda city"; //give an error
    }

}

$car = new car();
$car->companyName();
?>