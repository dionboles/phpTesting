<?php
    header('Content-Type: application/json');
    $imgList = [];
    $dir = "./uploads";
    $files1 = scandir($dir);
    if(!count($files1) == 0){
      foreach ($files1 as $key => $value) 
      { 
        if (!in_array($value,array(".",".."))){
        array_push($imgList,('
        <a href="./uploads/'.$value.'" data-lightbox="roadtrip" rel="ligthbox">
          <div class="col-12">
            <img class="zoom img-fluid " src=./uploads/'.$value.' alt="...">
          </div>
          <br>
          <br>
        '));
        
        }
    }
    echo(json_encode($imgList));
  }else{
    echo("No Photos");
  }
      ?>