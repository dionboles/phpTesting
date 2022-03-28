<?php
   class Recipe {
        public $title;
        public $ingredients = array();
        public $instructions = array();
        public $tag = array();
        public $yield;
        public $source = "Dion Boles";
   }

   $reipe1 = new Recipe();
   echo $reipe1 ->source;
   $reipe1 ->source = "Boles DIon";
   echo $reipe1 ->source;
   
   $reipe2 = new Recipe();
   $reipe2 ->source = "Data";
   echo $reipe2 ->source;
