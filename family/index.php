<?php 
    require 'connected.php';
    $title = "Family reunion";
   
    $news = array("Top" => "were are going here");
?>
<?php require 'header.php'  ?>
<style>
	#box{
		display: flex;	
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
	}
	header{
	 background-color:#8BC34A !important;
	}
	img{
              
	}
	
</style>
<body>
    <header class="jumbotron text-center">
        <h1><?php echo $title ?></h1>
    </header>
  <?php require 'nav.php'  ?>
    <main id="box" class="container">
        <div>
	 <img id="photo" class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/June_odd-eyed-cat.jpg/737px-June_odd-eyed-cat.jpg"
        </div>
        <div class="row">
        <h2> News </h2>
        <div data-spy="scroll">
        <?php
           foreach($news as $x => $v ) {
                     echo ("<li>"."<h2>".$x ."</h2>"."</li>");
                      echo ("<li>"."<p>".$v ."</p>"."</li>");
                    }
        ?>
        </div>
        </div>
        <br>
        <br>
        <div id ="#home" class="row">
        <h1>Sign Up </h1>
        <br>
        <a class="btn btn-primary" href="signUp.php">Sign Up</a>
        <br>
        </div> 
        <div id ="#home" class="row">
        <h1> Login </h1>
        <br>
        <a class="btn btn-primary" href="login.php">Login</a>
        <br>
        </div>                 
        </div>
       <script>
       box = ["https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/June_odd-eyed-cat.jpg/737px-June_odd-eyed-cat.jpg","https://upload.wikimedia.org/wikipedia/commons/0/0a/Greece-Cat.jpg"]
        num = box.length
         $('#photo').on({
    'click': function(){	
	if (num <box.length){
		num = box.length
	}else{
		num--
	}
        $('#photo').attr('src',box[num-1]);
	console.log(num);
    }
});
       </script>
    </main>
</body>
</html>
