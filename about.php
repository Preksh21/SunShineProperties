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
<title>About Us</title>
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

<style type="text/css">
body
{ 
    background-image:url('<?php echo $url = 'images/about_us.png' ?>');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	/*background: radial-gradient(circle,#cccccc,white);*/
}

/*body
{
	
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	 background: radial-gradient(circle,#999999, white);
	
	
	
}*/
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
						<div class="about-top">
							<?php
								$abc=mysql_query("select * from about");
								while($ro=mysql_fetch_array($abc))
								{
							?>
							<p><?php echo $ro['1'];?></p>
							<?php
								}
							?>
						</div>	
					<div class="clearfix"> </div>
					<center>
						<div class="col-md-6 contact-left">	
							<img src="images/a1.jpg" height="300px" width="300px" style="max-height:100%; max-width:100%;"/>
							<h1>Mahendra Mehta</h1>
							<h3>Founder & CEO</h3>
						</div>
						<div class="col-md-6 contact-left">
							<img src="images/a2.JPG" height="300px" width="300px" style="max-height:100%; max-width:100%;"/>
							<h1>Preksh Mehta</h1>
							<h3>Co-Founder</h3>
						</div>
					</center>
					<center>
						<div class="col-md-3 contact-left">
							<img src="images/aa3.jpg" style="max-height:100%; max-width:100%;"/>
							<h3>Harshal Parekh</h3>
							<h5>Land Security</h5>
						</div>
						<div class="col-md-3 contact-left">
							<img src="images/a5.jpg" style="max-height:100%; max-width:100%;"/>
							<h3>Hardik Parikh</h3>
							<h5>Purchase</h5>
						</div>
						<div class="col-md-3 contact-left">
							<img src="images/a4.jpg" style="max-height:100%; max-width:100%;"/>
							<h3>Chintan Mistry</h3>
							<h5>Revenue & Sales</h5>
						</div>
						<div class="col-md-3 contact-left">
							<img src="images/a6.jpg" style="max-height:100%; max-width:100%;"/>
							<h3>Harsh Patel</h3>
							<h5>Marketing</h5>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
<!--end-about-->
	
<?php require_once 'footer.php'; ?>
</body>
</html>