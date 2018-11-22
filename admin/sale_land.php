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
	if(strlen($_FILES['url']['name'])>0)
	{ 
		$pname=$_FILES['url']['name'];
		$ext=substr($pname,strrpos($pname,".")+1);
		$ex=".".$ext;
		$get=mysql_query("select max(id) from sale_land");
		$gett=mysql_fetch_array($get);
		if(strlen($gett[0])==0)
		{
			$ppname='img_'.strlen($gett[0]).$ex;
		}
		else
		{
			$ppname='img_'.$gett[0].$ex;
		}
		$c=dirname(__FILE__).'/sale_land/'.$ppname;
   
		$path='sale_land/'.$ppname;
		move_uploaded_file($_FILES['url']['tmp_name'],$c);
	} 
	$log=mysql_query("insert into sale_land values('0','$path','$_REQUEST[tit]','$_REQUEST[pric]','$_REQUEST[parea]','$_REQUEST[poss]','$_REQUEST[dis]','$_REQUEST[larea]')");
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

<style>
 	.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#ffffff; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#e5e5e5; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #cccccc 5%, #33302e 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #33302e) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #33302e 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#33302e");	background: -o-linear-gradient(top,#cccccc,33302e);

	background-color:#cccccc;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #cccccc 5%, #33302e 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #33302e) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #33302e 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#33302e");	background: -o-linear-gradient(top,#cccccc,33302e);

	background-color:#cccccc;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

 </style>


<title>Plain Land</title>
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
				<i class="fa fa-angle-right"></i>Plain Land </h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="asked">		    
			<form action="" method="post" enctype="multipart/form-data">

				<table>
					<tr>
						<td>Images : </td>
						<td><input style="border-radius:10px;" type="file" name="url"/></td>
					</tr>
					<tr>
						<td>Title : </td>
						<!--<td><input type="text" class="tb4" name="tit"/></td>-->
						<td><textarea style="border-radius:10px;" class="tb4" rows="3" cols="40" name="tit"> </textarea>
					</tr>
					<tr>
						<td>Price : </td>
						<td><input type="text" name="pric"/></td>
					</tr>
					<tr>
						<td>Area : </td>
						<td><input type="text" name="parea"/></td>
					</tr>
					<tr>
						<td>Possession : </td>
						<td><input type="text" name="poss"/></td>
					</tr>
					<tr>
						<td>Description : </td>
						
						<!--<td><input type="text" name="dis"/></td>-->
						<td><textarea style="border-radius:10px;" rows="5" cols="40" name="dis"> </textarea>

					</tr>
					<tr>
						<td>Land Place : </td>
						<td><select name="larea" style="border-radius:10px;"/>
							<?php
								$s=mysql_query("select * from city_area");
								while($x=mysql_fetch_array($s))
								{
							?>
							<option><?php echo $x['1'];?></option>
							<?php
								}
							?>
						</select></td>
					</tr>
					<tr align="center">
						<td><br/><input type="submit" name="save" value="Submit"/></td>
					</tr>
				</table><br/><br/><br/>
							<div class="CSSTableGenerator" >
							
							<table >
                    <tr>
                        <td>
                            Image
                        </td>
                        <td >
                            Title
                        </td>
                        <td>
                            Price
                        </td>
						<td>
                            Plot Area
                        </td>
                        <td >
                            Possession
                        </td>
                        <td>
                            Description
                        </td>
						<td>
                            Lamd Area
                        </td>
						<td>
                            Delete
                        </td>
						<td>
                            Edit
                        </td>
						
						<?php
						$o=mysql_query("select * from sale_land");
						while($d=mysql_fetch_array($o))
						{
					?>
						<tr>
							
							<td><img src="<?php echo $d['imgg'];?>" height="80px" width="80px"/></td>
							
							<td><?php echo $d['titel'];?></td>
							
			     	        <td><?php echo $d['pric'];?></td> 
							<td><?php echo $d['p_area'];?></td>
							<td><?php echo $d['poass'];?></td>
							<td><?php echo $d['discri'];?></td> 
							<td><?php echo $d['area_name'];?></td>   
							<td><a href="del_sale_land.php?id=<?php echo $d['id'];?>">DELETE</a></td>
							<td><a href="edit_sale-land.php?idd=<?php echo $d['id'];?>">EDIT</a></td>  
						</tr>
					<?php
						}
					?>

						
						
						
						
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
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">Preksh Mehta </a> </p>
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

