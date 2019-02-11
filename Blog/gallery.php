<?php include_once("header.php")?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" media="screen">
<?php
  array_push($footerJs,"//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js");
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

  <div class="row" id="imgList">
   
    </div>
</div>
<?php include_once("footer.php")?>
<script>
  $(document).ready(function(){
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
  });
  $.ajax({
    type: "GET",
    url: "/photoApi.php",
    dataType: "json",
    success: function (response) {
      $("#imgList").html(response);
    }
  });
});
</script>