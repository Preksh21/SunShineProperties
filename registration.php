<?php
error_reporting(0);
session_start();
require_once 'conn.php'; 
if($_SESSION['login']!="")
{
	header("location:index_log.php");
}
if(isset($_REQUEST['save']))
{
	$in=mysql_query("insert into registration 	values('0','$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[gen]','$_REQUEST[dob]','$_REQUEST[mobo]','$_REQUEST[emaill]','$_REQUEST[pass]')");            
		$log=mysql_query("insert into login values('0','$_REQUEST[emaill]','$_REQUEST[pass]','2')");
			$_SESSION['regi_to_log']=$_REQUEST['emaill'];
		   echo "<script> 
   alert('Record Insert Successfully..');
   window.location.href='login.php'
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
<title>Registration</title>
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
		if(obj.pass.value=="")
		{
			alert("Enter Your Password...!");
			//document.getElementById('pass').style.borderColor = "red";
			obj.pass.focus();
			return false;
		} 
		if(obj.cpass.value=="")
		{
			alert("Enter Your Confirm-Password...!");
			//document.getElementById('cpass').style.borderColor = "red";
			obj.cpass.focus();
			return false;
		}
		if(obj.pass.value != obj.cpass.value)
		{
			alert("Not Match Both Password...!");
			//document.getElementById('cpass').style.borderColor = "red";
			obj.cpass.focus();
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
<?php
	require_once 'header.php'; 
?>
<!--contact start here-->
<div class="contact">
	<div class="contact-main">
	   <div class="container">
			<div class="contact-top">
				<h3>REGISTRATION</h3>
				
			</div>
			<div class="contact-bottom">
			  <form name="frm">
				<div class="col-md-4 contact-left">
					<p>First Name :</p>
		             <input type="text"  name="fname" value="" onKeyPress="return isName(event);" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required placeholder="First Name"/>
					 <p>Last Name :</p>
		             <input type="text"  name="lname" value="" onKeyPress="return isName(event);" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required placeholder="Last Name"/>
					 <p>Gender : </p>
					 <input type="radio" value="male" checked="checked" name="gen"/>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="female" name="gen"/>Female
					 <p>Date of Birth :</p>
		             <input type="date" name="dob" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required />
					 <p>Mobile :</p>
		             <input type="text"  name="mobo" value="" onKeyPress="return isMobile(event);" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required maxlength="10" placeholder="Enter Mobile Number"/>
		            <p>E-mail</p>
		             <input type="text"  name="emaill" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required placeholder="Enter Email"/>
					 <p>Paassword</p>
		             <input type="password" name="pass" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Password" />
					 <p>Confirm Paassword</p>
		             <input type="password" name="cpass" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Confirm Password" />
				<center><input type="submit" value="Registration" name="save" class="btnn" onClick="return validation();" >
				<input type="Reset" value="Reset" name="reset" class="btnn" onClick="return validation();" ></center>
				</div>
				<div class="col-md-4 contact-left">
					<img src="images/login-banner.png" style="padding-left:200px;"/>
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