<?php
	$db = new SQLite3("test.db");
	function add_Values_db($name,$age) {
		$db->query("INSERT INTO dogbreeds VALUES(?,?)",$name,$age);
	}
	if($db){
		$db->query("CREATE TABLE dogbreeds (id INTEGER PRIMARY KEY,Name VARCHAR(255), Age INT);");
		add_Values_db("dog",16 );
		$result = $db->query("SELECT Name FROM dogbreeds");
		var_dump($result->fetchArray(SQLITE3_ASSOC));
	}else {
		echo ("Connection to database failed :(");
	}
	
	
?>


$db = new SQLite3('files.sqlite');
$db->exec('CREATE TABLE files (id INTEGER PRIMARY KEY, filename TEXT, content BLOB);');

$statement = $db->prepare('INSERT INTO files (filename, content) VALUES (?, ?);');
$statement->bindValue('filename', 'Archive.zip');
$statement->bindValue('content', file_get_contents('Archive.zip'));
$statement->execute();

$fp = $db->openBlob('files', 'content', $id);

while (!feof($fp))
{
	echo fgets($fp);
}

fclose($fp);
