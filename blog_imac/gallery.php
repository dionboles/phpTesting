<?php include_once("header.php")?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<?php
  array_push($footerJs,"//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js");
?>
<style>
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
body {
  background-color:#1d1d1d !important;
  font-family: "Asap", sans-serif;
  color:#989898;
  margin:10px;
  font-size:16px;
}
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
   
</style>
<div class="contanter">

  <div class="row">
    <?php
    $dir = "./uploads";
    $files1 = scandir($dir);
    if(!count($files1) == 0){
      foreach ($files1 as $key => $value) 
      { 
        if (!in_array($value,array(".",".."))){
        echo('
        <a href="uploads/'.$value.'" class="fancybox" rel="ligthbox">
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="zoom img-repsovie " src=/uploads/'.$value.' alt="..."></div>
        
        
        ');
        
        }
    }
  }else{
    echo("No Photos");
  }
      ?>
    </div>
</div>
<?php include_once("footer.php")?>
<script>
  $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>