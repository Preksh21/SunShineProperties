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
<title>s</title>
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
<?php require_once 'header.php'; ?>
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="col-md-9 blog-left">
				<div class="blog-grids">
					<?php
						$abc=mysql_query("select * from sale_land where id='$_REQUEST[id]'");
						while($ro=mysql_fetch_array($abc))
						{
					?>
					<img src="admin/<?php echo $ro['imgg'];?>" alt="" style="width:825px; height:500px;" >
					<div class="blog-detail">
						<h3 class="cum"><?php echo $ro['titel'];?></h3>
						<div class="blog-para">
							<p><?php echo $ro['discri'];?></p>
						</div>
					</div>
					<?php
						}
					?>
			  
			   <div class="magsingle-contact">
			   	<h3>Leave a Feedback</h3>
					<form>
			    	<input type="text" value="" name="name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}"/>
			    	<input type="text"  class="no-mar" value="" name="emaill" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}"/>
			    	<textarea onFocus="this.value = '';" name="msge" onBlur="if (this.value == '') {this.value = 'Message';}"/>Message</textarea>
			    	<input type="submit"  value="Submit Feedback" name="save"/>
					</form>
			   </div>
			</div>

				</div>
			</div>
			<div class="col-md-3 blog-right">
				<div class="blog-cate">
				<h3>Categories</h3>
				<ul>
					<li><a href="#">Featured</a></li>
					<li><a href="#">General</a></li>
					<li><a href="#">Lorem Ipsum</a></li>
					<li><a href="#">literature</a></li>
					<li><a href="#">Videos</a></li>
				</ul>
			</div>
			<div class="blog-post">
				<h3>Recent Projects</h3>
				<div class="ftr-gd4-img">
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f1.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f2.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f3.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f4.jpg" alt=""></a></div>
				  <div class="clearfix"> </div>
				</div>
				<div class="ftr-gd4-img">
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f5.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f6.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f7.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f8.jpg" alt=""></a></div>
				  <div class="clearfix"> </div>
				</div>
				<div class="ftr-gd4-img">
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f9.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f10.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f11.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="images/f12.jpg" alt=""></a></div>
				  <div class="clearfix"> </div>
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