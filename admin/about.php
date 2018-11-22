<?php
session_start();
error_reporting(0);
if($_SESSION['login']=="")
{
	header("location:index.php");
}
require_once 'conn.php';
if(isset($_REQUEST['submit1']))
{
	//$insert = "INSERT INTO about(id,msg)values('0','".mysql_real_escape_string($_REQUEST['editor11'])."')";
	$insert="update about set msg='$_REQUEST[editor11]'";
	mysql_query($insert);	
	header('location:about.php');
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
<title>About Us</title>
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

			if (!screenfull.enabled) {
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
				<i class="fa fa-angle-right"></i>About Us </h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="typo-grid">
 	  
        <div class="typo-1">
  <div class="grid_3 grid_4">
  <h3 class="head-top">About Us</h3>
  <div class="bs-example"> 
  		
  
  				
					<form name="user" action="" method="post" id="jsform">
					  <hr/>
					<?php
						$selectt = mysql_query("select * from about");
						$fetch=mysql_fetch_array($selectt);
						
					?>
						<textarea class="ckeditor" name="editor11"><?php echo $fetch['msg'];?></textarea></div>
						<input type="submit" name="submit1" value="submit">
				
			 `		</form>
   
   
         	</div>
  	    </div>
  </div>
	
 	<!--//grid-->
		<!---->
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<?php
	require_once 'footer.php';
?>
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

