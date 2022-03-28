<?php
include("simple_html_dom.php");
// Initialize a file URL to the variable 
$html = file_get_html('https://www.pexels.com/');
if(!is_dir("imgs") ){
    mkdir("imgs");
}else{
    echo('made');
}
$image = $html->find('img');
foreach($image as $img){
    $content = $img -> src;
    $fileName = "imgs/".basename($content);
    if(preg_match('/(\'*\?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500\'*)/',$fileName)){
        $name = preg_replace('/(\'*\?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500\'*)/','',$fileName);
        file_put_contents($name,file_get_contents($content));
    }else{
        echo "pass";
    }
}
?>