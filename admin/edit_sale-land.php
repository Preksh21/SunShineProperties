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
		$up=mysql_query("update sale_land set titel='$_REQUEST[titel]', pric='$_REQUEST[pric]',p_area='$_REQUEST[parea]',poass='$_REQUEST[poss]',discri='$_REQUEST[dis]' where id='$_REQUEST[idd]'");
		header('location:sale_land.php');
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
<title>Edit Plain Land</title>
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



</head>
<body>


<!----->
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
				<span>Plain Land</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="asked">		    
			<form action="" method="post" enctype="multipart/form-data">
				<?php
					$o=mysql_query("select * from sale_land where id='$_REQUEST[idd]'");
					while($d=mysql_fetch_array($o))
					{
				?>
				<table>
					<tr>
						<td>Title : </td>
						<td><textarea style="border-radius:10px;" class="tb4" rows="3" cols="40" name="titel"> <?php echo $d['titel'];?></textarea></td>
						<?php /*?><td><input type="text" name="pric" value="<?php echo $d['pric'];?>"/></td><?php */?>
					</tr>  
					<tr>
						<td>Price : </td>
						<td><input type="text" name="pric" value="<?php echo $d['pric'];?>"/></td>
					</tr>
					<tr>
						<td>Area : </td>
						<td><input type="text" name="parea" value="<?php echo $d['p_area'];?>"/></td>
					</tr>
					<tr>
						<td>Possession : </td>
						<td><input type="text" name="poss" value="<?php echo $d['poass'];?>"/></td>
					</tr>
					<tr>
						<td>Description : </td>
						<td><textarea rows="5" cols="40" name="dis"><?php echo $d['discri'];?></textarea></td>
						
					</tr>
					<tr align="center">
						<td><br/><input type="submit" name="save" value="Update"/></td>
					</tr>
				</table>
				<?php
					}
				?>
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
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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

