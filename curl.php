<?php
	$doc = fopen("data_wr.txt", "a+");
	function download_webpage($url) {
	// download 
	$curl = curl_init();
	$timeout = 5;
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($curl, CUL_CONNECTTIMEOUT, $timeout);	
	$result = curl_exec($curl);
	curl_close($curl);
		

	// DOM parser
	$dom = new DOMDocument();
	
	@$dom->loadHTML($result);
	
	foreach ($dom ->getElementsByTagName("a") as $link) {
		echo $link ->getAttribute('href');
		echo "\n";
	}
	
	}
	
	download_webpage("https://www.youtube.com/");
?>