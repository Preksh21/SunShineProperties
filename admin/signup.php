<?php
error_reporting(0);
$con=mysql_connect('localhost','root','');
if(!$con)
{
	echo"You can not connect with database";
}
mysql_select_db("sunshine",$con);

session_start();
 


if(isset($_REQUEST['regis']))
{
	$u=$_REQUEST['emaill'];
	$p=$_REQUEST['pass'];
	$cp=$_REQUEST['cpass'];
	
	$in=mysql_query("insert into registration 	values('0','$_REQUEST[name]','$_REQUEST[lname]','$_REQUEST[gen]','$_REQUEST[dob]','$_REQUEST[mobo]','$_REQUEST[emaill]','$_REQUEST[pass]')");            
		$log=mysql_query("insert into login values('0','$_REQUEST[emaill]','$_REQUEST[pass]','1')");
		
		   echo "<script> 
   alert('Record Insert Successfully..');
   window.location.href='index.php'
   </script>";
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>


<script type="text/javascript">
	function validation()
	{
		var obj=window.document.frm;
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
		
</head>
<body>
	<div class="login">
		
		<div class="login-bottom">
			<h2>Register</h2>
			<form name="frm" method="post">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="First Name." name="name" required="">
					
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Last Name." name="lname" required="">
					
				</div>
				
				<p>Gender : </p>
					 <input type="radio" value="male" checked="checked" name="gen"/>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="female" name="gen"/>Female
					 
				<div class="login-mail">
					<input type="date" name="dob" required="">
				
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Enter Mobile Number." name="mobo" maxlength="10" required="">
					
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Enter Email" name="emaill" required="">
				
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="pass" required="">
				
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Repeated password" name="cpass" required="">
				</div> 
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub" style="margin-bottom:-1108px; margin-left:-256px;">
					<input type="submit" value="Submit" size="regis" name="regis" onClick="return validation();">
				</label><br/><br/>
				<label class="hvr-shutter-in-horizontal login-sub" style="margin-bottom:-1020px; margin-left:2px;">
					<input type="reset" value="Reset" size="regis" name="can">
				</label>
				 
			</div>
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
	  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

