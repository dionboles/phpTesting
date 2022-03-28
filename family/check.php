<?php
 require 'connected.php';
  session_start();
$email =  $_POST['email'];
$passowrd = $_POST['password'];
$email = strip_tags($email);
$q = "select firstname,lastname,email from users where email = '$email';";
echo($q."<br>");
$box = $conn->query($q);
ini_set('display_errors', 1);
if (!$conn->query($q)) {
    echo "Select failed: (" . $conn->errno . ") " . $conn->error;
} 
$data = $box->fetch_assoc();
$_SESSION["fname"] = $data["firstname"];
$_SESSION["lastname"] = $data["lastname"];
$_SESSION["email"] = $data["email"];
$_SESSION["login"] = "true";

?>
<script>
setTimeout(function() {
     window.location.href = "/profile.php";
  }, 3000)
</script>