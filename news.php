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
<title>News</title>
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

	<?php /*?><?php

$url = 'images/news blur.jpg';

?><?php */?>
<style type="text/css">
body
{ 
    background-image:url('<?php echo $url = 'images/news.png' ?>');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	<?php /*?>background-color:#0033FF;<?php */?>
}
</style>
	


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
				<div class="about-text">
					<?php
						$abc=mysql_query("select * from news");
						while($ro=mysql_fetch_array($abc))
						{
					?>
					<div class="col-md-4 about-text-left">
						<a href="fullnews.php?idd=<?php echo $ro['id'];?>"><font size="+2" color="#0033FF"><h1><?php echo $ro['titel'];?></h1></font></a>
						<p><?php echo $ro['disc'];?></p>
					</div>
					<?php
						}
					?>
					
					<div class="clearfix"> </div>
				</div>
			</div>
			
		</div>
	</div>
</div>
	<!--end-about-->
<?php require_once 'footer.php'; ?>
</body>
</html>