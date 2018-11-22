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
	$i=$_REQUEST['emaill'];
	$p=$_REQUEST['pass'];
	if($i!="" && $p!="")
	{
		$data=mysql_query("select * from login where email='$i' and password='$p'");
		while($row=mysql_fetch_array($data))
		{
			 
				$_SESSION['login']=$i;
				header('location:index_log.php');
				exit();
			 
		}
		echo "<script> 
   alert('Enter Valid Password');
   window.location.href='login.php'
   </script>";
	}
	else
	{
		echo "<script> 
   alert('Enter Valid Password');
   window.location.href='login.php'
   </script>";
	}
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
<title>login</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>


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
		if(!obj.emaill.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
		{
			alert("Enter Your E-Mail...!");
			//document.getElementById('maill').style.borderColor = "red";
			obj.maill.focus();
			return false;
		}  
	}
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
<?php
	require_once 'header.php'; 
?>
<!--contact start here-->
<div class="contact">
	<div class="contact-main">
	   <div class="container">
			<div class="contact-top">
				<h3>LOGIN</h3>
				
			</div>
			<div class="contact-bottom">
			  <form name="frm">
				<div class="col-md-4 contact-left">
					<?php
						$de=mysql_query("select * from login where email='$_SESSION[regi_to_log]'");
						$rf=mysql_fetch_array($de);
					?>
		            <p>E-mail</p>
					<?php if($er==1) echo "<font color=red>Please Enter valid E-mail and Password...<font>"; ?> 
		             <input type="text" name="emaill" value="<?php echo $rf['email'];?>" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"required placeholder="Enter Email"/>
					 <p>Paassword</p>
		             <input type="password" name="pass" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" required placeholder="Enter Password" />
				<center><input type="submit" value="Login" name="save" class="btnn" onClick="return validation();" ></center>
				<a href="registration.php"><font color="#0066FF" size="+2">Create an account ?</font></a>
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