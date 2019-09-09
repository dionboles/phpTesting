<?php
class item {
    var $name;
    var  $price;
    public function setName($var){
        $this -> $name = $var;
    }
    public function getName(){
        echo($this -> $name);
    }
    public function setPrice($var){
        $this -> $price = $var;
    }
    public function getPrice(){
        return $this -> $price;
    }
}
?>