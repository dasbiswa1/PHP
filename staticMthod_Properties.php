<?php 

class honda{
    //You can also create static properties
    static public $countryName = "India";
    //Static function
    static function companyName(){
        echo "Honda";
    }
}

honda::companyName();
echo "<br>";
echo honda::$countryName;
?>