<?php
$array1 = [1, 2, 3, 4, 5, 6, 7, 8];
$array2 = ["a", "b", "c", "d", "e", "f", "g", "h"];

$mergedArray = [];
$length = count($array1);

for ($i = 0; $i < $length; $i++) {
    $mergedArray[] = $array1[$i];
    $mergedArray[] = $array2[$i];
}

$final_array = '[' . implode(',', $mergedArray) . ']';

// print_r($mergedArray);
echo $final_array;
?>
