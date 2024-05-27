<!-- 1 -->
<?php 

// class properties{
//     //public , private, protectded

//     public $name = "Biswa";
    
// }

// $p1 = new properties();
//     echo $p1->name;
?>

<!-- 2 -->
<?php 

// class properties{
//     public $name = "biwaranjan";
//     function getName(){
//         echo $this->name;
//     }
// }

// $p2 = new properties();
// $p2->getName();

?>

<!-- 3 -->
<!-- Update name -->
<?php 

class properties{
    public $name = "Biswa";
    function getName(){
        echo $this->name;
    }
    function updateName($name){
        $this->name=$name;
    }
}

$p1 = new properties();
$p1->updateName("Biswa Das");
$p1->getName();

?>