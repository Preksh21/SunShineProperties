<?php
session_start();
error_reporting(0);
if($_SESSION['login']=="")
{
	header("location:index.php");
}
require_once 'conn.php';
?>
<div id="wrapper">
 
<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php">SunShine</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		<li class="dropdown at-drop">
		            
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">
		               
		                	
		                </a></li>
		                <li><a href="#">
		                	<div class="clearfix"> </div>
		                </a></li>
		                
		              </ul>
		            </li>
					<?php
						//$o=mysql_query("select * from registration where emaill='$_SESSION[login]'");
						//while($d=mysql_fetch_array($o))
						//{
					?>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php //echo $d['fname'];?><i class="caret"></i></span><img height="60px" width="60px" src="images/my.JPG"></a>
		              <ul class="dropdown-menu " role="menu">
		      			<li><a href="profile.php"><img src="images/profile.png" style="height:14px; width:13px;"/>&nbsp;&nbsp;Profile</a></li>
						<li><a href="change_pass.php"><img src="images/profile.png" style="height:14px; width:13px;"/>&nbsp;&nbsp;Edit Pass</a></li>
						<li><a href="signup.php"><img src="images/Add User.png" style="height:14px; width:13px;"/>&nbsp;&nbsp;Add Admin</a></li>
		                <li><a href="logout.php"><img src="images/Logout.png" style="height:14px; width:13px;"/>&nbsp;&nbsp;Logout</a></li>
		              </ul>
		            </li>
		           <?php
				   		//}
				   ?>
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>