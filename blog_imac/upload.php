<?php
 if(isset($_POST['image'])){
    $dir_to_save = "./uploads/";
    if (!is_dir($dir_to_save)) {
      mkdir($dir_to_save);
    }
    $data = $_POST['image'];
    $image_array = explode(";",$data);
    $image_array2 = explode(",",$image_array[1]);
    $data = base64_decode($image_array2[1]);
    $im = imagecreatefromstring($data);
    $image_Name = time(). '.jpg';
    file_put_contents($dir_to_save.$image_Name,$data);
    echo( htmlspecialchars("photo saved"));
 }else{
     print($_POST);
     echo("failed");
     exit;
 }
?>