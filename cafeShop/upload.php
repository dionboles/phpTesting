<?php
if(isset($_POST['SubmitButton'])){
    $upload_dir = "./docs";
    try { 
    $up_filename=$_FILES["filepath"]["name"];
    $file_basename = substr($up_filename, 0, strripos($up_filename, '.')); // strip extention
    $file_ext = substr($up_filename, strripos($up_filename, '.')); // strip name
    $f2 = $file_basename. $file_ext;
    move_uploaded_file($_FILES["filepath"]["tmp_name"],"$upload_dir/$f2");
    }catch(Exception $e) {
        $error_message = $e->getMessage();
    }
}else{
    die("Failed");
}