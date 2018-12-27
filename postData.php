<?php
	$name = $_POST["Fname"];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1><?php echo $name?></h1>
		<form action="postData.php" method="post">
		<input type="text" name="Fname">
		<input type="submit">
		</form>
	</body>
</html>