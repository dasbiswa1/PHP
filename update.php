<?php 

include("./config.php");
// echo $_GET['id'];
if(isset($_GET['id'])){
    echo $id = $_GET['id'];
    $getStudent = $conn->prepare("select * from students where id = '$id'");
    $getStudent->execute();
    $student = $getStudent->fetchAll();
    $name = $student[0]['name'];
    $course = $student[0]['course'];
    $batch = $student[0]['batch'];
    $city = $student[0]['city'];
    $year = $student[0]['year'];
}

?>

<form action="" method = "post">
    <input type="text" value = "<?php echo $name ?>" name="name"/>
    <br /><br />
    <input type="text" value = "<?php echo $course?>" name="course"/>
    <br /><br />
    <input type="text" value = "<?php echo $batch ?>" name="batch"/>
    <br /><br />
    <input type="text" value = "<?php echo $city ?>" name="city"/>
    <br /><br />
    <input type="text" value = "<?php echo $year ?>" name="year"/>
    <br /><br />
    <button value="<?php echo $id; ?>" name="update">Update student data</button>
</form>

<?php 

//Update for static data
// $updateStudent = $conn->prepare("update students set year='final' where id='13'");
// echo $updateStudent->execute();

//Update for dynamic data
if(isset($_POST['update'])){
    $id = $_POST['update'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $course = $_POST['course'];
    echo $city = $_POST['city'];
    $year = $_POST['year'];
    $updateStudent = $conn->prepare("update students set 
    name='$name',
    course='$course', 
    batch='$batch' ,
    city ='$city',
    year = '$year'
    where id='$id'");

    if($updateStudent->execute()){
        header('location:delete.php');
    }else{
        echo "updated failed!";
    }
}

?>