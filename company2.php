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
<title>Why Ahmedabad ?</title>
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
</head>
<body>
<!-- //end-smoth-scrolling -->
<?php
	error_reporting(0);
	require_once 'conn.php';
 	require_once 'header.php';
?>
<!--start-about-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="about-top">
				<p><strong> <u><font color="#000066" size="+3">WHY AHMEDABAD ?</u></font>  </p></br></br>
				
					
					<font color="#999999" size="+1	">
					<ul>
						<li>Ahmedabad Urban Development Authority has taken 1200 sq.km. area for development.</li><br/>
						<li>Highest per capita purchasing power in India. </li><br/>
						<li>70% investors in stock market in India are Gujaratis.</li><br/>
						<li>Accorded status of Metro City. </li><br/>
						<li>World’s cheapest car project(Tata Nano).</li><br/>
						<li>Population above 7 million.</li><br/>
						<li>For easy access-International Airport.</li><br/> 
						<li>World renowned Indian Institute of management-IIM,Ahmedabad.</li><br/> 
						<li>Sabarmati River Front Project India’s 1st of it’s kind. </li><br/>
						<li>India’s 1st Express Way. </li><br/>
						<li>Gift city is situated between Ahmedabad - Ghandhinagar and The land surrounding gift city is the hot spot for land investment in Gujarat.</li><br/><br/>
					</ul>
					</font>
					<center><a href="index_log.php"><img src="images/back.png"/></a></center>
				</div>	
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!--end-about-->
	
<?php require_once 'footer.php'; ?>
</body>
</html>