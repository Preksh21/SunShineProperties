<?php
error_reporting(0);
session_start();
require_once 'conn.php';

if(isset($_REQUEST['save']))
{           
	$log=mysql_query("insert into feedback_product values('0','$_REQUEST[name]','$_REQUEST[subj]','$_REQUEST[mono]','$_REQUEST[msg]')");
	
	echo "<script> 
	alert('Record Insert Successfully..');
	window.location.href='details.php'
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
<script type="text/javascript">
$(document).bind('contextmenu', function (e) {
  e.preventDefault();
  alert('Right Click is not allowed');
});
</script>
<title>Auction A Real Estate Category Flat Bootstrap Responsive  Website Template | About :: w3layouts</title>
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
	
<script>
	function isName(evt)
	{
	   var charCode = (evt.which) ? evt.which : event.keyCode
	   if ((charCode <= 65) && (charCode => 90) && (charCode != 32) && (charCode != 8))
		 return false;
		 return true;
	} 
	function isMobile(evt)
	{
	   var charCode = (evt.which) ? evt.which : event.keyCode
	   if (charCode > 31 && (charCode < 48 || charCode > 57))
		 return false;
		 return true;
	} 
</script>
<script type="text/javascript">
	function validation()
	{
		var obj=window.document.frm;		
		 if(obj.subj.value=="")
		{
			alert("Enter Your Subject...!");
			//document.getElementById('pass').style.borderColor = "red";
			obj.subj.focus();
			return false;
		} 
		if(obj.msg.value=="")
		{
			alert("Enter Your Message...!");
			//document.getElementById('pass').style.borderColor = "red";
			obj.msg.focus();
			return false;
		} 
	}
</script>
<script src="js/imagezoom.js">
</script>
<style type="text/css">
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
<!--start-about-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="about-text">
				
				
					
					<?php
						$abc=mysql_query("select * from sale_land where id='$_REQUEST[is]'");
						while($ro=mysql_fetch_array($abc))
						{
					?>
						<div class="col-md-6 about-text-left">
							<img data-imagezoom="true" class="img-responsive" src="admin/<?php echo $ro['imgg'];?>" style="width:600px; height:300px;"/>
							<a href=""><h5><?php echo $ro['titel'];?></h5></a>
						</div>
						<div class="col-md-6 about-text-left">
							<p><strong>Price : </strong><?php echo $ro['pric'];?></p>
							<p><strong>Plot Area : </strong><?php echo $ro['p_area'];?></p>
							<p><strong>Possession : </strong><?php echo $ro['poass'];?></p>
							<p><?php echo $ro['discri'];?></p>
							<form action="inquery.php?ido=<?php echo $ro['0'];?>" method="post">
								<div class="col-md-5 contact-right" style="width:30.66%;"><span class="col-md-5 contact-right" style="width:30.66%;">
								  <input name="submit" type="submit" value="Inquiry">
								</span></div>
							</form>
						</div>
					<?php
						}
					?>
					<div class="col-md-12 about-text-left">
						<div class="contact-main">
						   <div class="container">
								<div class="contact-top">
									<h3 align="center">&nbsp; &nbsp; Feedback</h3>
								</div>
								<div class="contact-bottom">
								  <form action="" method="post" name="frm">
									<div class="col-md-7 contact-left">
									<?php
										$fg=mysql_query("select * from registration where emaill='$_SESSION[login]'");
										$xz=mysql_fetch_array($fg);
									?>
										<p>Name</p>
										 <input type="text" value="<?php echo $xz['fname'];?>" name="name" onKeyPress="return isName(event);" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Name" />
										<p>Subject</p>
										 <input type="text" value="" name="subj" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Subject"/>
										<p>Phone</p>
										 <input type="text" value="" name="mono" onKeyPress="return isMobile(event);" pattern="[0-9]{10}" maxlength="10" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Phone Number"/>
									</div>
									<div class="col-md-5 contact-right">
										<p>Messages</p>
										  <textarea onFocus="this.value = '';" name="msg" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Your Message"/> </textarea>
										 <input type="submit" value="Send" name="save" onClick="return validation();">
									 </div>
									 <div class="clearfix"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
					
					
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--end-about-->
	
<?php 
	require_once 'footer.php'; 
?>
</body>
</html>