<?php 

trait parentCompany1 {
    function getTotalEmployee(){
        echo 500;
    }

    function getTotalProject(){
        echo 15;
    }
}

trait parentCompany2 {
    function getTotaloffice(){
        echo 10;
    }
}
class Company{
    use parentCompany1;
    use parentCompany2;
}

$cam = new Company();
$cam->getTotalEmployee();
echo "<br>";
$cam -> getTotaloffice();
echo "<br>";
$cam->getTotalProject();

?>