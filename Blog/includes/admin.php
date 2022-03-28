<?php
     include ("./token.php");
     $data = new token;
     session_start();
     $_SESSION["token"] = $data->getToken();
     print_r($_SESSION);
?>