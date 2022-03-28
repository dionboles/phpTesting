<?php
    $bgColor = "bg-dark";
    $title = "Image Database";
?>
<style>
    body{
        background-color: #222;
    }
    .colmm{
        display: flex;
        flex-wrap: wrap;
        padding: 5px;
        justify-content: space-between;
    }
    .item {
        margin: 5px;
    }
    .item > h1{
        color: white;
    }
    .title{
        color: white;
    }
</style>
<?php include("./header.php")?>
<h1 class="title"> Photo Gallery </h1>
<br>
<div class='colmm'>
<?php
 include "./database.php";
 $sql = "SELECT * FROM images";
 $sth = $conn -> query($sql);
 $sth ->execute();
 while ($rawCampaign = $sth->fetch()) {
     if ("green-1738220__340.jpg" == $rawCampaign["filename"]){
        continue;
     }
     if ("women-3452067__340.jpg" == $rawCampaign["filename"] ){
        continue;
     }
     echo("
        <div class='item'>
            <img src = ".$rawCampaign['image'].">
            <h1>".$rawCampaign["filename"]."</h1>
        </div>
     ");
}
echo 'Ending with memory usage: ' . memory_get_usage(true) / 1024 / 1024 . " MB \n";
?>
</div>
