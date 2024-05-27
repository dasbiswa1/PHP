<?php 

interface ProductFeatures{
    function images();
    function ownerDetails();
}

class Product implements ProductFeatures{
    function images(){
        echo "Product images!";
    }

    function ownerDetails(){
        echo "Product owner details";
    }
}

$product = new Product();
$product->images();

?>


<!-- you cannot create property and different functions in interface. -->