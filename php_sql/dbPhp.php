<?php	
	class MyDB extends SQLite3{
		function __construct() {
			$this->open("learning.db");
		}
	}
	$db = new MyDB();
	$db->exec("CREATE TABLE term(word TEXT)");
?>