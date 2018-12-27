<?php
	echo "creating file\n";
	function writeFile($File,$Data) {
		$File = fopen($File.".txt", "a+");
		if($File == true){
			//$open = fopen($File,"w");
			fwrite($File,$Data);
		}
	}
	writeFile("hello", "\t9hehene\n".$now1);

?>