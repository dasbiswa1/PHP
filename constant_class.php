<?php 

class ConstantDemo{

    const collegeName = "Rajdhani H.S School, BBSR";

    //access constant inside the function
    function getCollegeName(){
        // echo self::collegeName;
        //or
        echo ConstantDemo::collegeName;

    }

}
//call constant outside the class
echo ConstantDemo::collegeName;

$c1 = new ConstantDemo();
echo "<br>";
$c1->getCollegeName();

?>