<form action="" method="post">
    <input type="text" placeholder = "Enter name" name = "name">
    <br/>
    <br/>
    <input type="text" placeholder = "Enter course" name = "course">
    <br/>
    <br/>
    <input type="text" placeholder = "Enter batch" name = "batch">
    <br/>
    <br/>
    <input type="text" placeholder = "Enter city" name = "city">
    <br/>
    <br/>
    <input type="text" placeholder = "Enter year" name = "year">
    <br/>
    <br/>
    <button>Add new student</button>
</form>


<?php 

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    include("./config.php");
    echo "<br>";
    $student = $conn->prepare("
    INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')");

    $result =$student->execute();
    if($result){
        echo "Data inserted!";
    }else {
        echo "Operation failed";
    }
}






// Code for static data
// include("./config.php");
// echo "<br>";
// $student = $conn->prepare("
// INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (NULL, 'Shree', 'M.tech', 'evn', 'Kdp', '3rd')");

// $result =$student->execute();
// if($result){
//     echo "Data inserted!";
// }else {
//     echo "Operation failed";
// }

?>