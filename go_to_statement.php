<?php

$x = 20;
if($x + 2 == 12){
    goto abc;
} else {
    echo "do nothing!";
}

abc :
echo "statement after abc go-to";


?>