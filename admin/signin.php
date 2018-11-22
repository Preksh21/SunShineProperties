<?php
error_reporting(0);
session_start();
if($_SESSION['login']=="")
{
	header("location:index.php");
}
require_once 'conn.php';
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
<title>Sign In</title>
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

<!----->

<!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<?php require_once 'header.php'; ?>
	  <?php require_once 'sidebar.php'; ?>
		  
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		
		<!--content-->
		
  
		<div class="content-mid">
			
			<div class="col-md-5">
					 
			  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
			</div>
			<div class="col-md-7 mid-content-top">
			
		<!--//sreen-gallery-cursual---->
		<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
						nav:true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<!----->
		<div class="content-bottom">
			
			<div class="col-md-12">
			<center><h2><font color="#333399" style="background:center";>Dashboards</h2></font></center>
			<br/>
		<center> <img height="256px" width="256px" src="images/admin.png" class="bablo"> </center>
					<center><h3>Preksh Mehta</h3></center>
					<?php
						$abc=mysql_query("select count(name) from feedback");
						while($ro=mysql_fetch_array($abc))
						{
					?>
					<center><h6>FeedBack : <?php echo $ro['0'];?></h4></center>
					<?php
						}
					?>
					
					
					<!-- Me -->
					<?php
						$inqu=mysql_query("select count(name) from contact");
						while($man_inqu=mysql_fetch_array($inqu))
						{
					?>
					<center><h6>Contact : <?php echo $man_inqu['0'];?></h6></center>
					<?php
						}
					?>
			
			
			
					<?php
						$inqu=mysql_query("select count(name) from inquery");
						while($man_inqu=mysql_fetch_array($inqu))
						{
					?>
					<center><h6>Inquiry : <?php echo $man_inqu['0'];?></h6></center>
					<?php
						}
					?>
					
					
					
					<?php
						$inqu=mysql_query("select count(name) from feedback_product");
						while($man_inqu=mysql_fetch_array($inqu))
						{
					?>
					<center><h6>FeedBack : <?php echo $man_inqu['0'];?></h6></center>
					<?php
						}
					?>
					
					<!-- Me -->
					
			
			
			
			
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-->

<?php
	require_once 'footer.php';
?>
	 
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>

