<?php
	$doc = new DOMDocument();
	$rss =$doc -> createElement('rss');
	$channel =$doc -> createElement('channel');
	$c_title = $doc -> createElement('title',"dionboles.me");
	$c_link = $doc -> createElement('link',"http://dionboles.me/");
	$c_description = $doc -> createElement('description','iOS / Web Developer/Designer
');
	$c_language = $doc -> createElement('language','en');
	$doc -> appendChild($rss);
	$rss -> appendChild($channel);
	$channel -> appendChild($c_title);
	$channel -> appendChild($c_link);
	$channel -> appendChild($c_description);
	$channel -> appendChild($c_language);
	
	$Data = array(1 => array('title' => 'Site','link' => 'http://site1','description' =>'a web'),
	2 => array('title' => 'Site','link' => 'http://site1','description' =>'a web'));
	foreach ($Data as $d ) {
		$item = $doc -> createElement('item');
		$i_title =	$doc -> createElement('title',$d['title']);
		$i_link = 	$doc -> createElement('link',$d['link']);
		$i_description = $doc -> createElement('description',$d['description']);
		$item -> appendChild($i_title);
		$item -> appendChild($i_link);
		$item -> appendChild($i_description);
		
		$channel -> appendChild($item);
	}
			
	header('content-type: text/xml');
	echo  $doc -> saveXML();
?>