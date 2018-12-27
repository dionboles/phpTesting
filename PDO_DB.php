<?php
	$user = "root";
	$password = "root";
	$db = "test.db";
	$host = "localhost";
	$port = 3306;
	$DSN = "sqlite:/Documents/php/tests.sqlite";
	
	$db = new PDO($DSN) or die("connot open the database");
?>