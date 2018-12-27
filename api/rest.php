<?php
	$data = ["Dion","John","jake","jack"];
	$verb = $_SERVER['REQUEST_METHOD'];
	
	if($verb == 'GET'){
		echo $data;
	}elseif ($verb == "POST"){
		
	}elseif( $verb == "DELETE"){
		
	}
?>
