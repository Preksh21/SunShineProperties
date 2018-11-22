<?php
error_reporting(0);
session_start();
require_once 'conn.php';
if($_SESSION['login']!="")
{
	header("location:index_log.php");
}	
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body>
<!-- //end-smoth-scrolling -->
<?php require_once 'header.php'; ?>
<!--banner strip start here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
        nav:true,
      });
    });
  </script>
			

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images">
		<ul>
			<?php
				$abc=mysql_query("select * from slider");
				while($ro=mysql_fetch_array($abc))
				{
			?>
				<li><img src="admin/<?php echo $ro['imag'];?>" style="width:1600px; height:900px;" alt="" title="" id="wows1_0"/></li>
			<?php
				}
			?>
		</ul>
	</div>
	<div class="ws_bullets"><div>
		
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">javascript slideshow</a> by WOWSlider.com v8.2</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
	
	
<!--banner strip end here--> 
<!--effec start here-->
<div class="effec">
	<div class="container">
		<div class="effet-main123">
			<div class="effec-bottom">
				<div class="col-md-12 effec-right">
					<div class="col-md-12 effec-right">
						<p align="center"><font size="+2">SunShine is a leading plain land <br/>provider of Ahmedabad.</br>Our clients are from Gujarat. </br> It has its main office at Ahmedabad.</font></p>
						<center><a href="about.php"><img src="images/readmore.png"/></a></center>
					</div>
					
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--effec end here-->
<!--project star here-->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
			 <br/><br/>
<div class="project"  style="background-color:#0099FF;">
	<div class="container">
		<div class="project-main">
			<div class="project-bottom">
				<br/><br/>
				
				<div class="col-md-4 project-grid" >
					<div class="project-eff"> 
						<img src="images/img_0.png" style="padding-left:50px;" class="img-responsive" style="width:64px; height:64px;"/>
					</div>
					<div class="project-details">
						<h4>Objective</h4>
						<font color="#FFFFFF">One stop destination<br/> for your plain land <br/>investment....<br/><a href="company.php"><font color="#000000"><h4>Read more</h4></font></a></font>
					</div>					
				</div>
				
				<div class="col-md-4 project-grid">
					<div class="project-eff"> 
						<img src="images/img_1.png" style="padding-left:50px;" class="img-responsive" style="width:64px; height:64px;"/>
					</div>
					<div class="project-details">
						<h4>To Investors</h4>
						<font color="#FFFFFF">It is our privilege<br/> always to be at your <br/>service. And ....<br/><a href="company1.php"><font color="#000000"><h4>Read more</h4></font></a></font>
					</div>					
				</div>
				
				<div class="col-md-4 project-grid">
					<div class="project-eff"> 
						<img src="images/img_2.png" style="padding-left:50px;" class="img-responsive" style="width:64px; height:64px;"/>
					</div>
					<div class="project-details">
						<h4>Why Ahmedabad</h4>
						<font color="#FFFFFF">Ahmedabad Urban <br/>Development Authority<br/> :1200 sq.km.....<br/><a href="company2.php"><font color="#000000"><h4>Read more</h4></font></a></font>
					</div>					 
				</div>
				
			<div class="clearfix"> </div>
			<br/>
			</div>
		</div>
	</div>
</div>
<br/>
<!--project end here-->

<?php require_once 'footer.php'; ?>
</body>
</html>