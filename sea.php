<?php
error_reporting(0);
session_start();
require_once 'conn.php';
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Selected Land</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>
<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<style>	
body {
  background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background: radial-gradient(circle,#cccccc,white);
}

/*FOCUS*/
.imgg {
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}

.imgg:hover {
  border: 10px groove #999999;
  border-radius: 50%;
}

	
	
	
	
	</style>
<link rel="stylesheet" type="text/css" href="imgefct/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="imgefct/css/demo.css" />
<link rel="stylesheet" type="text/css" href="imgefct/css/set2.css" />

</head>
<body>
<!-- //end-smoth-scrolling -->
<?php require_once 'header.php'; ?>
<!--start-about-->
<div class="about">
  <div class="container">
    <div class="about-main">
      <div class="about-text">
        <?php
						$abc=mysql_query("select * from sale_land where area_name='$_REQUEST[area]'");
						while($ro=mysql_fetch_array($abc))
						{
							if($_SESSION['login']=="")
							{
					?>
					 <div class="col-md-4 about-text-left">
          <div class="grid">
            <figure class="effect-apollo"> <img src="admin/<?php echo $ro['imgg'];?>" style="width:350px; height:300px;"/>
              <figcaption>
			   <a href="login.php"></a>
                <h5><font color="#FFFFF"><?php echo $ro['titel'];?></font></h5>
                <p><font color="#FFFFF">For More Details Please Login..</font></p>
				
              </figcaption>
            </figure>
          </div>
        </div>
		
    <!--    <div class="col-md-4 about-text-left"> <a href=""><img src="admin/<?php echo $ro['imgg'];?>" class="imgg" style="width:350px; height:300px;"/></a> <a href="login.php">
          <h5><?php echo $ro['titel'];?></h5>
          <font color="#3366CC">For More Details Please Login..</font></a> </div>-->
        <?php
							}
							else
							{
					?>
              <div class="col-md-4 about-text-left">
          <div class="grid">
            <figure class="effect-apollo">
			  <a href="details.php?is=<?php echo $ro['id'];?>">
			  <img src="admin/<?php echo $ro['imgg'];?>" style="width:350px; height:300px;"/>
			  </a>
              <figcaption >
			   <a href="details.php?is=<?php echo $ro['id'];?>"></a>
                <h5><font color="#FFFFF"><?php echo $ro['titel'];?></font></h5>
                <p></p>
				</figcaption>
            </figure>
          </div>
        </div>
		<!--<div class="col-md-4 about-text-left">
		 <a href="details.php?is=<?php echo $ro['id'];?>">
		 <img src="admin/<?php echo $ro['imgg'];?>"class="imgg" width="350px" height="300px" style="width:350px; height:300px;"/>
		 </a>
		 <a href="details.php?is=<?php echo $ro['id'];?>">
          <h5><?php echo $ro['titel'];?></h5>
          </a> </div>-->
        <?php
							}
						}
					?>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!--end-about-->
<?php require_once 'footer.php'; ?>
</body>
</html>
