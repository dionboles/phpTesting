<?php
    class Bicycle {
        protected $wheels = 2;
        private $weight_kg = 0.0;
        public $brand;
        public $model;
        public $year;
        public $description = "Used bicycle";
        public function name(){
            return static::brand. " ". static::model ."(".static::year . ")";
        }
        public function weight_lbs(float $var){
            $no_format = preg_replace('/[\$,]/','',$var);
            return floatval($no_format  * 2.2046226218);
        }
        public function setWeight_Lbs(float $var){
            $this -> weight_lbs = $this -> weight_lbs($var);
        }
    }

    class Unicycle extends Bicycle{
        protected $wheels = 1;
       

    }
    


    