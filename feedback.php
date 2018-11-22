<?php
session_start();
error_reporting(0);
require_once 'conn.php';
	if($_SESSION['login']!="")
	{
		header("location:index_log.php");
	}
    if(isset($_REQUEST['save']))
    {           
		$log=mysql_query("insert into feedback values('0','$_REQUEST[name]','$_REQUEST[emaill]','$_REQUEST[mag]')");
		
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
<title>FeedBack</title>
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
<!-- //end-smoth-scrolling -->
<?php
	error_reporting(0);
	require_once 'conn.php'; 
	require_once 'header.php';
?>
<!--contact start here-->
<div class="contact">
	<div class="contact-main">
	   <div class="container">
			<div class="contact-top">
				<h3>FEEDBACK</h3>
				
			</div>
			<div class="contact-bottom">
			  <form>
				<div class="col-md-7 contact-left">
					<p>Name</p>
		             <input type="text" value="" name="name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Name" />
		            <p>E-mail</p> 
		             <input type="text" value="" name="emaill" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required placeholder="Enter Email"/>
				</div>
				<div class="col-md-5 contact-right">
					<p>Messages</p>
					  <textarea  style="height:8em;" name="msg" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"/> </textarea>
		             <input type="submit" value="Send" name="save">
				 </div>
				 <div class="clearfix"> </div>
				</div>
				</form>
		</div>
	</div>
</div>
<!--contact end here-->
<?php require_once 'footer.php'; ?>
</body>
</html>