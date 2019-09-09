<?php 
    class Student {
         var $firstname, $lastname,$id;
         function setName(string $var ){
            $tmp = explode(" ",$var);
            $this->firstname = $tmp[0];
            $this->lastname = $tmp[1];
         }
         function setID(int $var){
             $this -> id = $var;
         }
    }
    

    $dion = new Student;

    $dion -> setName( "Dion Boles");
    $dion -> setID(12);
    var_dump($dion);
?>