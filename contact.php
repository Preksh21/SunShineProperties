<?php
error_reporting(0);
session_start();
require_once 'conn.php';

if(isset($_REQUEST['save']))
{           
	$log=mysql_query("insert into contact values('0','$_REQUEST[name]','$_REQUEST[emaill]','$_REQUEST[sub]','$_REQUEST[mono]','$_REQUEST[msg]')");
	
	echo "<script> 
	alert('Record Insert Successfully..');
	window.location.href='contact.php'
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
<title>Contact Us</title>
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
		if(!obj.emaill.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
		{
			alert("Enter Your E-Mail...!");
			//document.getElementById('maill').style.borderColor = "red";
			obj.emaill.focus();
			return false;
		}  
	}
</script>
<style type="text/css">
body
{ 
   /* background-image:url('<?php echo $url = 'images/inquiryy.jpg' ?>');*/
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
<!--contact start here-->
<div class="contact">
	<div class="contact-main">
	   <div class="container">
			<div class="contact-top">
				<img class="img-responsive" src="images/Contact-Us-Banner.png" style="margin-top:-54px" width ="719px" height="204px">
			</div>
			<div class="contact-bottom">
			  <form action="" method="post" name="frm">
				<div class="col-md-7 contact-left">
					<?php
						$der=mysql_query("select * from registration where emaill='$_SESSION[login]'");
						$sdf=mysql_fetch_array($der);
					?>
					<p>Name</p>
		             <input type="text" value="<?php echo $sdf['fname'];?>" name="name" onKeyPress="return isName(event);" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Name" />
		            <p>E-mail</p> 
		             <input type="text" value="<?php echo $sdf['emaill'];?>" name="emaill" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required placeholder="Enter Email"/>
		            <p>Subject</p>
		             <input type="text" value="" name="sub" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Subject"/>
		            <p>Phone</p>
		             <input type="text" value="" name="mono" onKeyPress="return isMobile(event);" pattern="[0-9]{10}" maxlength="10" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Phone Number"/>
				</div>
				<div class="col-md-5 contact-right">
					<p>Messages</p>
					  <textarea onFocus="this.value = '';" name="msg" onBlur="if (this.value == '') {this.value = '';}"required placeholder="Enter Your Message"/> </textarea>
		             <input type="submit" value="Send" name="save" onClick="return validation();">
				 </div>
				 <div class="clearfix"></div>
				</div>
				</form>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
	<div class="container">
		<div class="col-md-3 map-left">
			<h3>CONTACT INFO</h3>	      
		<div class="addre">
			<h4>ADDRESS</h4>
				</br>
				E-801, Titanium CityCenter,</br>
                Nr. Sachin Tower,</br>
                Shyamal Cross Road,</br>
                Satellite,</br>
                Ahmedabad, Gujarat, India.</br>
				Phone :  +91-94263 53302</br>
				Mobile : +91-84602 85358</br>
				Email :  preksh.mehta27@gmail.com
			</div>
		</div>
		<div class="col-md-9 map-right">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14688.447733876608!2d72.50888722247967!3d23.019662008390288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sTitanium+CityCenter%2C+Nr.+Sachin+Tower%2C+Shyamal+Cross+Road%2C+Satellite%2C+Ahmedabad%2C+Gujarat%2C+India.!5e0!3m2!1sen!2sin!4v1457674048805" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	   </div>
	</div>
</div>
<!--map end here-->
<?php require_once 'footer.php'; ?>
</body>
</html>