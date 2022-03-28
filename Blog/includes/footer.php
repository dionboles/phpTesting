<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css">
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
<?php
       if(!empty($headerCSS)){
        foreach ($headerCSS as $key => $value) {
            # code...
            echo('<link href='.$value.' rel="stylesheet">');
        }
    }
    ?>
  <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
   <?php
    if(!empty($footerJs)){
        foreach ($footerJs as $key => $value) {
            # code...
            echo("<script defer src=".$value."></script>");
        }
    }
    ?>
</body>
</html>