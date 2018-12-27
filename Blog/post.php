<?php
date_default_timezone_set('EST');
class Post{
	private $data = array();
	public static $blog_title;
	public static $blog_url;
	
	public function setTitle($title) {
		$data =[
			 "title" => $title
		];
	}
	public function getTitle() {
		return $data["title"];
	}
	
	
}

$test = new Post;
$test -> setTitle("Dion");
echo $test -> getTitle();





?>
