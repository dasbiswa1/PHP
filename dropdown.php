<?php 

include("./config.php");

$getStudent = $conn->prepare("select name from students");
$getStudent -> execute();
$studentData = $getStudent->fetchAll();

// print_r($studentData);
echo "<select>";
echo "<option>Select Name</option>";
foreach($studentData as $student){
    echo "<option value=".$student['id'].">".$student['name']."</option>";
}
echo "</select>";
?>