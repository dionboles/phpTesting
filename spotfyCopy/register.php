<?php
include("./includes/classes/Account.php");
include("./includes/classes/Constants.php");
$account = new Account();
include("./includes/handlers/register-handler.php");
function getInputValue($name){
    if(isset($_POST[$name])){
        echo($_POST[$name]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id ="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2> Login to your account </h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id =loginUsername name="loginUsername" type="text" placeholder="e.g Dion Boles" required>
            </p>
            <p>
             <label for="loginPassword">Password</label>
             <input id =loginPassword name="loginPassword" type="password" required>
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>
        <form id="registerForm" action="register.php" method="POST">
            <h2> Create your free acount </h2>
            <p>
                <?php echo($account -> getError(Constants::$userNameCharacters)); ?>
                <label for="username">Username</label>
                <input id = username name="username" type="text" placeholder="e.g Dion Boles"  value="<?php echo(getInputValue("username"));?>"
                
                required>
            </p>
            <p>
                <?php echo($account -> getError(Constants::$firstNameCharacters)); ?>
                <label for="firstname">firstname</label>
                <input id =firstname name="firstname" type="text" placeholder="firstname" value="<?php echo(getInputValue("firstname"));?>" required>
            </p>
            <p>
                <?php echo($account -> getError(Constants::$lastNameCharacters)); ?>
                <label for="lastname">lastname</label>
                <input id =lastname name="lastname" type="text" placeholder="lastname" value="<?php echo(getInputValue("lastname"));?>" required>
            </p>
            <p>
                <?php echo($account -> getError(Constants::$emailDoNotMatch)); ?>
                <?php echo($account -> getError(Constants::$emailInvalid)); ?>
                <label for="email">Email</label>
                <input id =email name="email" type="text" placeholder="email" value="<?php echo(getInputValue("email"));?>" required>
            </p>
            <p>
               
                <label for="email">Email Confirmation</label>
                <input id =email name="email2" type="text" placeholder="email" value="<?php echo(getInputValue("email2"));?>" required>
            </p>
            <p>     
                <?php
                
                ?>
                <?php echo($account -> getError(Constants::$passwordsDoMatch)); ?>
                <?php echo($account -> getError(Constants::$passwordNotAlphanumeric)); ?>
                <?php echo($account -> getError(Constants::$passwordCharacters)); ?>
                <label for="password">Password</label>
                <input id =password name="password" type="password"  value="<?php echo(getInputValue("password"));?>"required>
            </p>
            <p>
                <label for="password2">Password</label>
                <input id ="password2" name="password2" type="password"  value="<?php echo(getInputValue("password2"));?>"required>
            </p>
            <button type="submit" name="registerButton">Sign up</button>
        </form>
</body>
</html>