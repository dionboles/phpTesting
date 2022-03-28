<?php
    include("./Drink.php");
    class Coffee extends Drink{
        // nave 
        private $temp;
        public function setTemp(float $var){
            // Regex to take away values
            $no_format = preg_replace('/[\$,]/','',$var);
            // cast to float
            $float = floatval($no_format);
            // assgin var
            $this -> temp = $float;
        }
        public function getTemp(){
            return number_format($this -> temp);
        }
    }
    