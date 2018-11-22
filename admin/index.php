<?php
	error_reporting(0);
$con=mysql_connect('localhost','root','');
if(!$con)
{
	echo"You can not connect with database";
}
mysql_select_db("sunshine",$con);

session_start();
if($_SESSION['login']!="")
{
	header("location:signin.php");
}


if(isset($_REQUEST['login']))
{
	$u=$_REQUEST['user'];
	$p=$_REQUEST['pass'];
	if($u=="")
	{
		echo"Enter Email Id And Password";
	echo "<script> 
   alert('Enter Valid Password');
   window.location.href='index.php'
   </script>";
	}
	
	else
	{
		$data=mysql_query("select * from login where email='$u' and password='$p'");
		while($r=mysql_fetch_array($data))
		{
			if($r['type']=='1')
			{
				$_SESSION['login']=$u;
				header('location:signin.php');
				exit();
			}
		}
		echo "<script> 
   alert('Enter Valid Password');
   window.location.href='index.php'
   </script>";
		
		
		
		
		/*echo "Valid Email Id and password";*/
	}
}

if(isset($_REQUEST['save']))
{
	header("location:signup.php");
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
<title>Login</title>
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
</head>
<body>
	<div class="login">
		<h1><a href="index .php">SunShine</a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form>
			<div class="col-md-6">
				
				<div class="login-mail">
					<input type="text" name="user" placeholder="Email" >
					<i class="fa fa-envelope"></i>
				</div>
				
				<div class="login-mail">
					<input type="password" name="pass" placeholder="Password" >
					<i class="fa fa-lock"></i>
				</div>
				  <!-- <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					</a>
					-->

			
			</div>
			<div class="col-md-6 login-do" style="margin-top:40px;">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" name="login" value="login">
				</label>
				<!--
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" name="save" value="Register">
				</label>
				-->
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">Preksh Mehta</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

