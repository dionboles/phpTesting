<?php
 include "./database.php";

 $id = strip_tags($_GET["id"]);
 $sql = "SELECT * FROM users WHERE school_id = :id";
 $sth = $conn -> prepare($sql);
 $sth -> execute(["id" => $id]);
 $result = $sth->fetch();
 echo ("<h1>".$result["firstname"]. " ".$result["lastname"]."</h1>");
 echo ("<h1>".$result["birthday"]."</h1>");
 echo ($result["active"] == 0 ? "<h1>Not active</h1>" : "<h1>active</h1>");


