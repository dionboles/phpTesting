<?php
 $navItem = array("Home" => "/","What to do" =>"/news.php","where to go");
?>

  <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
            <?php
                foreach($navItem as $x => $v ) {
                     echo ("<li class = 'dropdown'> <a href='$v'>".$x."</a> </li>");
                    }
            ?>
            </ul>
 </nav>