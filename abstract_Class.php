<?php 

abstract class ProductFeatures{
    abstract function ProductDetails();
    abstract function ProductImage();
    abstract function ProductOwnerDetails(); 

    function common(){
        echo "The common features!";
    }
}

class uploadProduct extends ProductFeatures{
    function ProductDetails(){
        echo "Product details!";
    }

    function ProductImage(){
        echo "Product images!";
    }

    function ProductOwnerDetails(){
        echo "Product owner!";
    }


    function other(){
        echo "Any function!";
    }
}

$upload = new uploadProduct();

$upload->ProductDetails();
echo "<br>";
$upload->ProductImage();
echo "<br>";
$upload->ProductOwnerDetails();
echo "<br>";
$upload->common();
echo "<br>";
$upload->other();

?>