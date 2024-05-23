<?php 

// $fruit = "apple";
setcookie("fruit", "apple", time()+(86400));
setcookie("color", "red", time()+(86400));
// print_r($_COOKIE);
if(isset($_COOKIE['fruit'])){
    echo "Current cookie is ".$_COOKIE['fruit'];
}else{
    echo "no cookie set";
}
echo "<br>";

if(isset($_COOKIE['color'])){
    echo "Another cookie is ".$_COOKIE['color'];
}else{
    echo "no cookie set";
}
?>