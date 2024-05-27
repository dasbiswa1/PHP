<?php 

class countrySale{
    static public $totalSale = 1000;
    function getTotalSale(){
        echo static::$totalSale;
    }
}

class citySale extends countrySale{
    static public $totalSale = 50;
}

$city = new citySale();

$city->getTotalSale();

?>