<?php 

// print_r($_FILES);
if($_FILES['fileUpload']){
    $path = $_FILES['fileUpload']['name'];
    // echo $path; //to know the name of the file

    $uplaod_path = "./uploads/".$path;
    // echo $uplaod_path;

    move_uploaded_file( $_FILES['fileUpload']['tmp_name'], $uplaod_path) || die("failed to upload");
}else{
    die("no file found");
}

?>