<?php
$title = "Cafe Coffee";
$name = "Cafe Coffee";
?>

<?php include("./header.php")?>
<section class="pt-5 pb-5 mt-0 align-items-start d-flex" style="min-height: 100vh; background-size: cover; background-image: url(https://images.unsplash.com/photo-1484157239365-80e635261db7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80);">
        <div class="container-fluid">
          <div class="row  justify-content-center align-items-start d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 ">
                <h1 class="font-weight-bold display-3 mb-2 mt-2"><?php echo("$name")?></h1>
                <a href="./order.php" class="btn btn-outline-dark shadow-lg btn-round  btn-lg btn-rised">Get a coffee today &gt;</a>
            </div>
        </div>
    </div>
</section>
<?php include("./footer.php")?>