<?php include_once("./includes/header.php")?>
<?php
    array_push($footerJs,"//cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js");
    array_push($footerJs,"//cdn.jsdelivr.net/npm/vue"); 
    array_push($footerJs,"./js/script.js");
?>
<div id="app">
<section>
    <?php include("./nav.php"); ?>
    </section>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark cover ov-hidden" style="background-size: cover; min-height: 75vh; background-image: url(&quot;https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1980&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=c0d43804e2c7c93143fe8ff65398c8e9&quot;);">
            <div class="container-fluid zindex-1">
            <div class="row align-items-center justify-content-center  text-center">
                <div class="col-12 col-md-6  ">
                <h1 class=" text-light   mb-2 mt-5"><strong>{{name}}</strong> </h1>
                <p class="lead  text-light mb-5">{{title}}</p>
                </div>
            </div>
            </div>
</section>
    <div class="container">
    <section class="pt-5 pb-5">
        <div class="col-12 pr-md-5 ">
                <h5 class="text-muted text-uppercase mb-1">Show your work</h5>
                <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                <p class="text-h3 mt-4">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus. Vivamus sagittis lacus vel augue laoreet, rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus. Richard McClintock,
                    a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
                    source. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                </div>
        </div>
    </section>
</div>
<?php include_once("./includes/footer.php")?>