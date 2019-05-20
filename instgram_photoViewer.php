<?php

/*
 followed a tutorial by TeachLead on youtube 
 video url https://youtu.be/tw6Z8hcj4P0
*/
if (file_exists("iglog.data") == false){
    $data = file_get_contents("https://www.instagram.com/dionboles/?hl=en");
    file_put_contents("iglog.data",$data);
}else{
    $data = file_get_contents("iglog.data");
}

if(! preg_match('#_sharedData = (.*);</script#',$data,$m)){
    die("Can't find shared data.");
}
$json = json_decode($m[1],1);
if(!$json){
    die("Can't decode json.");
}
$ppage = $json["entry_data"]["ProfilePage"];
$edgers = $ppage[0]['graphql']["user"]["edge_owner_to_timeline_media"]["edges"];

foreach ($edgers as $edge) {
    $node = $edge['node'];
    $image = $node["thumbnail_src"];
    $images[] = $image;

}

$imagesjs = " ' " . implode(" ',' ",$images). " ' ";

print <<<EOF
<script>    
    var images = [$imagesjs];
</script>
EOF;
print <<<EOF
    <body style="background-color:'#222'; margin:0">
    <div id=frame style='width:100%; height:100%; background-size:cover'></div>
    <script>
    var index = 0;

    function updateImage(){
        document.getElementById("frame").style.backgroundImage = "url(" +images[index % images.length]+")"
    }

    updateImage();
    setInterval(function(){
            ++index;
            updateImage();
    },3000);
    </script>
EOF;
?>
