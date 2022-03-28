<?php 
include "database.php";
class api {
    protected $conn;
     public function getPost(){
        $sql = "SELECT * FROM 1+1";
        $sth = $this -> $conn -> prepare($sql);
        $sth -> execute();
        $result = $sth->fetch();
        return $result;
    }
}


$a = new api();

print_r($a::getPost());