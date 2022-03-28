<?php include_once("./header.php")?>
<?php include("./connection.php");?>
<section>
    <?php include("./nav.php"); ?>
    <?php
        
        $stmt = $conn->query("SELECT * FROM users");
        print_r($stmt->fetchall());
        echo password_hash('password', PASSWORD_ARGON2I);
        die();
    ?>
    
</section>
<?php include_once("./footer.php")?>