<?php 

// $fileName = "dummy.txt";
// $content = "This shows a dummy file";
// $file = fopen($fileName, "w") or die("Unable to create file!");
// fwrite($file, $content);
// fclose($file);
// echo "file created!";

// ?>

<?php 

if(isset($_POST['filename'])){
    $fileName = $_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($fileName, "w") or die("Unable to create file!");
    fwrite($file, $content);
    fclose($file);
    echo "file created!";
}

?>


<form action= "" method = "post">
    <input type="text" placeholder = "enter file name" name = "filename"/>
    <br/>
    <br/>
    <textarea name = "content" placeholder="Write here!"></textarea>
    <br/>
    <br/>
    <button>Create file</button>
</form>