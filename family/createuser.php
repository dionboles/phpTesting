<?php
  require 'connected.php';
  session_start();
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email =  $_POST['email'];
  $passowrd = $_POST['password'];
  $email = strip_tags($email);
  $lname  = strip_tags($lname);
  $fname = strip_tags($fname);
  $passowrd = strip_tags($passowrd);
  $hashPassword = crypt($passowrd,10);



  $q = "INSERT INTO users (firstname,lastname,email,password)VALUES('".$fname."','".$lname."','".$email."','".$hashPassword."')";
 
  //$conn->query($q);
  error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!$conn->query($q)) {
    echo "INSERT failed: (" . $conn->errno . ") " . $conn->error;
}    


?>
<script>
  setTimeout(function() {
     window.location.href = "/profile.php";
  }, 3000);
</script>