<?php
	$sale = array(array("note","note","noo"),array("noe","note"));
	$fp = fopen("data.csv", "a+");
	
	foreach ($sale as $sale_line) {
		if(fputcsv($fp, $sale_line)== false){
			die("failed");
		}
	}
	fclose($fp) or die("failed to wrtie");
	
	$doc = fopen("tyepe.doc","a+");
	
	$doc
?>
