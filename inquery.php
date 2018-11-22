<?php
error_reporting(0);
session_start();
require_once 'conn.php';

if(isset($_REQUEST['send']))
{           
	$c=  mysql_query("select titel,pric,imgg from sale_land where id='$_REQUEST[ido]'");
	$cc=  mysql_fetch_array($c);
	$log=mysql_query("insert into inquery values('0','$cc[0]','$cc[1]','$cc[2]','$_REQUEST[name]','$_REQUEST[emaill]','$_REQUEST[mono]','$_REQUEST[msg]')");
	echo "<script> 
	alert('Record Insert Successfully..');
	window.location.href='inquery.php'
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
<title>Inquiry</title>
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
		if(obj.msg.value=="")
		{
			alert("Enter Your Message...!");
			//document.getElementById('pass').style.borderColor = "red";
			obj.msg.focus();
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
				<h3>INQUIRY</h3>
			</div>
			<div class="contact-bottom">
			  <form action="" method="post" name="frm">
				<div class="col-md-7 contact-left">
					<?php
						$fg=mysql_query("select * from registration where emaill='$_SESSION[login]'");
						$xz=mysql_fetch_array($fg);
					?>
					<p>Name</p>
		             <input type="text" value="<?php echo $xz['fname'];?>" onKeyPress="return isName(event);" name="name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Name" />
		            <p>E-mail</p> 
		             <input type="text" value="<?php echo $xz['emaill'];?>" name="emaill" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required placeholder="Enter Email"/> 
		            <p>Phone</p>
		             <input type="text" value="" name="mono" onKeyPress="return isMobile(event);" pattern="[0-9]{10}" maxlength="10" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Phone Number"/>
					 <p>Messages</p>
		             <input type="text" value="" name="msg" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Message"/>
				</div>
				<div class="col-md-5 contact-right">  
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
							Email :   preksh.mehta27@gmail.com
						</div>
						<div class="col-md-5 contact-right" style="width:30.66%;">
							<input type="submit" value="Send" name="send" onClick="return validation();">
						</div>
					</form>
				</div>
				 </div>
				 <div class="clearfix"></div>
				</div>
				</form>
		</div>
	</div>
</div>
<!--contact end here-->
<?php require_once 'footer.php'; ?>
</body>
</html>