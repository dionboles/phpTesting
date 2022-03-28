<?php
	$title = "Pet Name";
	
	Class Pet{
		// -> obkect
		// Properties
		public $name = "tim";
		public $price = 0;
		public $desc = "His name is";
		
		//Methods 
		function __construct($name, $price, $desc) {
			$this ->name = $name;
			$this ->price = $price;
			$this ->desc = $desc;
		}
		public function getInfo() {
			return "Product Name: " .$this->name;
		}
		
		if(isset($_POST['submit']){
			$petName = $_POST['petName'];
			$petPrice = $_POST['Price'];
			$text = $_POST['Description'];
			__construct($petName, $petPrice,$text)
		}
	}
	
	$dog = new Pet();
	echo $dog -> getInfo();
	
	
?>

<!doctype html>
<html>
	<head>
		<title><?php echo $title ?></title>
	</head>
	<body>
		<form action="Learn_class.php" method="post">
		<label> Pet Name: </label> <input  name="petName" type="text" >
		<label> Price: </label> <input type="text" name="Price"><br/>
		<label> Description: </label> <br/> <textarea name="Description"> </textarea><br/>
		<input type="submit" name="submit" value="submit">
		
	</body>
</html>