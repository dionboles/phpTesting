<?php include_once("./header.php")?>
<?php
    array_push($footerJs,"//cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js");
    array_push($footerJs,"../js/saveUser.js");
    array_push($headerCSS,"../css/style.css");
?>
<?php include("./connection.php")?>

<section>
    <?php include("./nav.php"); ?>
    <form id="saveForm">
        
    </form>
</section>
<?php include_once("./footer.php")?>