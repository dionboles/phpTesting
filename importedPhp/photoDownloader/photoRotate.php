<?php
    $handler  = opendir("imgs");
    $filesArray = [];
    while($filesname = readdir($handler)){
        if(substr(strtolower($filesname),-4) === ".jpg" || substr(strtolower($filesname),-4) === ".jpeg" ){
            $title = preg_replace('/(\w+).jpg/i',$filesname);
        }
    }
    closedir($handler);
    sort(fil)