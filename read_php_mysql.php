<?php 

include("./config.php");
echo "<br>";
$getstudents = $conn->prepare("SELECT * FROM students");
$getstudents->execute();
$students = $getstudents->fetchAll();
// echo "<pre>";
// print_r($students);

echo "<table border='1'>";
foreach($students as $student){
    echo "<tr>
    <td>".$student['name']."</td>
    <td>".$student['course']."</td>
    <td>".$student['batch']."</td>
    <td>".$student['city']."</td>
    <td>".$student['year']."</td>
    </tr>";
    // echo "<br>";
}
echo "</table>";
?>