<?php
session_start();
error_reporting(0);
require_once 'conn.php';
if(isset($_REQUEST['save']))
{   
	$log=mysql_query("insert into feedback values('0','$_REQUEST[name]','$_REQUEST[emaill]','$_REQUEST[msge]')");
	
	echo "<script> 
alert('Record Insert Successfully..');
window.location.href='feedback.php'
</script>";
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
<title>Detailed News</title>
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
	body
{
	
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
  background: radial-gradient(circle,#cccccc,white);
  
  

	
}
</style>

</head>
<body>
<!-- //end-smoth-scrolling -->
<?php require_once 'header.php'; ?>
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="col-md-12 blog-left">
				<div class="blog-grids">
					<?php
						$abc=mysql_query("select * from news where id='$_REQUEST[idd]'");
						while($ro=mysql_fetch_array($abc))
						{
					?> 
						<font size="+2" color="#0033FF"><h1><?php echo $ro['titel'];?></h1></font>
						<p><?php echo $ro['msg'];?></p>
						
					<?php
						}
					?>
			  
					</div>
				</div>
			</div>
			
		 <div class="clearfix"> </div>
		</div>
</div>
<!--blog end here-->
<?php require_once 'footer.php'; ?>
</body>
</html>