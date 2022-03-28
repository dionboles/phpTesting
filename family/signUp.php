 <?php require 'header.php'  ?>
<h1> Sign Up </h1>
 <form action="createuser.php" method="post" class="form-horizontal">
        <label>Firstname:</label><input class="form-control"  type="text" name="firstname"><br>
         <label>lastname:</label><input class="form-control"  type="text" name="lastname"><br>
         <label>password:</label><input class="form-control"  type="password" name="password"><br>
        <label>E-mail:</label><input class="form-control" type="text" name="email"><br>
        <input class="btn btn-default" type="submit">
 </form>