<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
       session_start();
        function factoral($num){
            return $num <=1 ? 1 : $num * factoral($num-1);
        }
    ?>
    
     <?php 
      $bigNumber = number_format(factoral(25),0,'','');
      $_SESSION["test"] = [
          "id" => $bigNumber, 
          "name" => "Dion",
          "info" => ["age" => 26]
        ];
       
      echo("
         <h1>
         {$_SESSION["test"]["name"] }
        </h1>
        "
        ); ?> 
</body>
</html>