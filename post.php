<?php
		$name = $_POST["username"];
		echo $name;
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1>hello</h1>
		<form action="post.php" method = "post">
		<label>Type name </label><input type="text" name="username" placeholder="Enter name">
		<input type="submit">
		</form>
	</body>
</html>