<script type="text/javascript">
	function clickIE4(){
	if (event.button==2){
	return false;
	}
	}
	function clickNS4(e){
	if (document.layers||document.getElementById&&!document.all){
	if (e.which==2||e.which==3){
	return false;
	}
	}
	}
	if (document.layers){
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS4;
	}
	else if (document.all&&!document.getElementById){
	document.onmousedown=clickIE4;
	}
	document.oncontextmenu=new Function("return false")
	function disableselect(e){
	return false
	}
	function reEnable(){
	return true
	}
	//if IE4+
	document.onselectstart=new Function ("return false")
	//if NS6
	if (window.sidebar){
	document.onmousedown=disableselect
	document.onclick=reEnable
	}
</script>

<script type="text/javascript">
$(document).bind('contextmenu', function (e) {
  e.preventDefault();
  alert('Right Click is not allowed');
});</script>
<!--header start here-->
<div class="header" id="content">
	<div class="container">
		<div class="header-main">
			 <div class="logo" style=""> <a href="index.php"> <img src="images/aaaa" height="74px" width="120px" alt="" title=""> </a> </div>
          </div>
			<div class="head-right">
			  <div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
				<ul class="res">
                  <?php
							if($_SESSION['login']!="")
							{
						?>
                  <li><a class="active" href="index_log.php">Home</a></li>
                  <?php
							}
							else
							{
						?>
                  <li><a class="active" href="index.php">Home</a></li>
                  <?php
							}
						?>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="news.php">News</a></li>
                  <li><a href="faq.php">FAQ</a></li>
                  <li><a href="saleland.php">Plain Land</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <div class="clearfix"> </div>
                </ul>
                <!-- script-for-menu -->
                <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
                <!-- /script-for-menu -->
         </div>
		   <?php
			 	if($_SESSION['login']=="")
				{
			 ?>
              <form action="login.php">
                <div class="col-md-5 contact-right" style="width: 10.66%;
    margin-right: -22px;">
                  <input type="submit" value="Login" >
                </div>
              </form>
              <?php
				}
				else
				{
			?>
              <form action="logout.php">
                <div class="col-md-5 contact-right" style="width:10.66%;">
                  <input type="submit" value="Logout" >
                </div>
              </form>
              <?php
				}
			?>
               
			<div class="social" style="margin-left: -6px;">
				<ul>
					<li><a class="fa" href="https://www.facebook.com/"> </a></li>
					<li><a class="tw" href="https://mobile.twitter.com/"> </a></li>
					<li><a class="p" href="https://in.pinterest.com/login/"> </a></li>
					
				</ul>
				</div>
						
			<div class="clearfix"> </div>
			   <!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
			  <!-- //search-scripts -->
		</div>
		
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
