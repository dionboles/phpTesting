<?php
header("Content-Type: application/json; charset=UTF-8");
$myObj = (object) array();
$myObj->fname = "Dion";
$myObj->lname = "Boles";
$myObj->title = "iOS / Web Developer/Designer";


$myJSON = json_encode($myObj);

echo $myJSON;
?>