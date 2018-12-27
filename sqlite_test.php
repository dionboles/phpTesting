<?php
	$db = new SQLite3("mydatas.db");
	if($db == true){
	$sql = "CREATE TABLE guests ( guestid INTERGER PRIMARY KEY, firstName TEXT, lastName TEXT)";
	$db -> exec($sql);
	$db -> exec("INSERT INTO guests (firstName,lastName) VALUES ('Dion','Boles');");
	
	echo "<table border=1>";
	echo "<tr><td>Id</td><td>First Name</td><td>Last Name </td><tr>";
	$result = $db->query('SELECT * FROM guests');
	foreach ($result as $row) {
		echo" <tr><td>".$row['firstName']."</td>";
		echo" <tr><td>".$row['lastName']."</td>";
	}
	print "</table>";
	$db = null;
}else{

echo("<h1> failed </h1>");
}
	
?>
