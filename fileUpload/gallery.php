<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
        $filePath = "./data";
        $files = array_diff(scandir($filePath), array('.', '..'));
        $fileCount = count($files);
        if( $fileCount != 0){
            foreach ($files as $key){
                echo"<img class='img-fluid'  src = ./data/".$key.">";
            }
        }else{
            echo "No files";
        }
    ?>
</div>
</body>
</html>