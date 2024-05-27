<?php 
include('./config.php');

class Student {
    public $DBconn;

    function __construct($conn) {
        $this->DBconn = $conn;
    }

    function getdata() {
        $getStudents = $this->DBconn->prepare("SELECT * FROM students");
        $getStudents->execute();
        $result = $getStudents->fetchAll();
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }

    function insertData() {
        $sqlqury = "INSERT INTO students (`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null, 'abdul', '+3', 'Evn', 'brmpur', 2)";
        $student = $this->DBconn->prepare($sqlqury);
        $result = $student->execute();
        if ($result) {
            echo "data inserted";
        } else {
            echo "operation failed!";
        }
    }

    function updateData() {
        $sqlqury = "UPDATE students SET name='Ayaa', course='c', batch='evening', city='Delhi', year='1st' WHERE id = 15";
        $student = $this->DBconn->prepare($sqlqury);
        $result = $student->execute();
        if ($result) {
            echo "data updated";
        } else {
            echo "updation failed!";
        }
    }

    function deleteData() {
        $sqlqury = "DELETE FROM students WHERE id=13";
        $student = $this->DBconn->prepare($sqlqury);
        $result = $student->execute();
        if ($result) {
            echo "data deleted";
        } else {
            echo "Failed!";
        }
    }

    //Insert input by taking input
    function insertDatawithRequest($request) {
        // print_r($request);
        $name=$request['name'];
        $course=$request['course'];
        $batch =$request['batch'];
        $city=$request['city'];
        $year=$request['year'];


        $sqlqury="INSERT INTO students (`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null, '$name', '$course', '$batch', '$city', '$year')";
        $student = $this->DBconn->prepare($sqlqury);
        $result = $student->execute();
        if ($result) {
            echo "data inserted";
        } else {
            echo "operation failed!";
        }
    }
}

$student = new Student($conn);
// $student->getdata();
// $student->insertData();
// $student->updateData();
// $student->deleteData();

if(isset($_POST['name'])){
    $student->insertDatawithRequest($_POST);
}
?>
