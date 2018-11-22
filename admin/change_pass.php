<?php
session_start();
error_reporting(0);
if($_SESSION['login']=="")
{
	header("location:index.php");
}
require_once 'conn.php';
if(isset($_REQUEST['save']))
{
	$insert = "update login set password='$_REQUEST[npass]' where email='$_SESSION[login]'";
	mysql_query($insert);	
	header('location:change_pass.php');
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
<title>Change Password</title>
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
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
		if (!screenfull.enabled) 
		{
			return false;
		}
		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});
	});
</script>
		
		
<script>
	//* hide all elements & show preloader
	document.documentElement.className += 'js';
</script>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script type="text/javascript">
  document.getElementById('jsform').submit();
</script> 




<script type="text/javascript">
	function validation()
	{
		var obj=window.document.frm;		
		if(obj.npass.value=="")
		{
			alert("Enter Your Password...!");
			//document.getElementById('pass').style.borderColor = "red";
			obj.npass.focus();
			return false;
		} 
		
		if(obj.cpass.value=="")
		{
			alert("Enter Your Confirm-Password...!");
			//document.getElementById('cpass').style.borderColor = "red";
			obj.cpass.focus();
			return false;
		}
		
		if(obj.npass.value != obj.cpass.value)
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
<?php require_once 'header.php'; ?>
	  <?php require_once 'sidebar.php'; ?>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
                 <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		     </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <div class="banner">
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Password</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="asked">		    
			<form action="" name="frm" method="post" enctype="multipart/form-data">
				<table>
					<?php 
						$selprice = "select * from login where email='$_SESSION[login]'";
					  	$res = mysql_query($selprice);
					  	$val = mysql_fetch_array($res);
					?>
					<tr>
						<td>Old Password : </td>
						<td><input type="text" name="tit" value="<?php echo $val['password'];?>"/></td>
					</tr>
					<tr>
						<td>New Password : </td>
						<td><input type="password" name="npass"/></td>
					</tr>
					<tr>
						<td>Confirm Password : </td>
						<td><input type="password" name="cpass"/></td>
					</tr>
				
						
					<tr align="center">
						<td><br/><input type="submit" name="save" value="Edit" onClick="return validation();"/></td>
					</tr>
				</table>
			</form>
	</div>
	<!--//faq-->
		<!---->
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">Preksh Mehta</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

