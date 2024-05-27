<?php 

class constructorDemo{
    // function setName(){
    //     echo "Hello!";
    // }

    function __construct(){
        echo "__constructor called!";
    }
}

$cd = new constructorDemo();
// $cd->setName();
?>