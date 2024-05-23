<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call php function</title>
</head>
<body>
    <form action="" method = "post">
        <button name="button" value="btn1">
            Call Function
        </button>
    </form>
</body>
</html>

<?php
if(isset($_POST['button'])){
    btn_click_test();
}

function btn_click_test(){
    echo "function for click the button";
}
?>