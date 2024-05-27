<?php 

trait ParentCompany1{
    function getEmp(){
        echo 100;
    }
}

trait ParentCompany2{
    function getEmp(){
        echo 200;
    }
}
class Company{
    use ParentCompany1;
    use ParentCompany2{
        ParentCompany1::getEmp insteadOf ParentCompany2;
        ParentCompany2::getEmp as getEmpCompany2;
    }

    // function getEmp(){
    //     echo 50;
    // }
}

$emp = new company();
$emp->getEmp();
echo "<br>";
$emp->getEmpCompany2();

?>