<?php require 'header.php'  ?>

<header class="jumbotron text-center">
        <h1>News</h1>
</header>
 <?php require 'nav.php'  ?>
<?php
$news = ["new"=>"this"];
foreach($news as $x => $v ) {
    echo ("<li>"."<h2 class='post-title'>".$x ."</h2>"."</li>");
    echo ("<li>"."<p>".$v ."</p>"."</li>"); 
}


?>

