<html>
<head>
<script type="text/javascript">
  
body { background: #E9E9E9; }
h2 { text-align: center; color: #CCC; }
a {
  display: block;
  text-decoration: none;
  width: 100%;
  height: 100%;
  color: #999;
}

a:hover { color: #777; }

/* NAVIGATION */
.navigation {
  list-style: none;
  padding: 0;
  width: 250px; 
  height: 40px; 
  margin: 20px auto;
  background: #95C11F;
}

.navigation, .navigation a.main {
  border-radius: 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
}

.navigation:hover, .navigation:hover a.main {
  border-radius: 4px 4px 0 0;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
}

.navigation a.main {
  display: block; 
  height: 40px;
  font: bold 15px/40px arial, sans-serif; 
  text-align: center; 
  text-decoration: none; 
  color: #FFF;  
  -webkit-transition: 0.2s ease-in-out;
  -o-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
}

.navigation:hover a.main {
  color: rgba(255,255,255,0.6);
  background: rgba(0,0,0,0.04);
}

.navigation li { 
  width: 250px; 
  height: 40px;
  background: #F7F7F7;
  font: normal 12px/40px arial, sans-serif !important; 
  color: #999;
  text-align: center;
  margin: 0;
  -webkit-transform-origin: 50% 0%;
  -o-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transform: perspective(350px) rotateX(-90deg);
  -o-transform: perspective(350px) rotateX(-90deg);
  transform: perspective(350px) rotateX(-90deg);
  box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
  -webkit-box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
  -moz-box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
}

.navigation li:nth-child(even) { background: #F5F5F5; }
.navigation li:nth-child(odd) { background: #EFEFEF; }

.navigation li.n1 { 
  -webkit-transition: 0.2s linear 0.8s;
  -o-transition: 0.2s linear 0.8s;
  transition: 0.2s linear 0.8s;
}
.navigation li.n2 {
  -webkit-transition: 0.2s linear 0.6s;
  -o-transition: 0.2s linear 0.6s;
  transition: 0.2s linear 0.6s;
}
.navigation li.n3 {
  -webkit-transition: 0.2s linear 0.4s;
  -o-transition: 0.2s linear 0.4s;
  transition: 0.2s linear 0.4s;
}
.navigation li.n4 { 
  -webkit-transition:0.2s linear 0.2s;
  -o-transition:0.2s linear 0.2s;
  transition:0.2s linear 0.2s;
}
.navigation li.n5 {
  border-radius: 0px 0px 4px 4px;
  -webkit-transition: 0.2s linear 0s;
  -o-transition: 0.2s linear 0s;
  transition: 0.2s linear 0s;
}

.navigation:hover li {
  -webkit-transform: perspective(350px) rotateX(0deg);
  -o-transform: perspective(350px) rotateX(0deg);
  transform: perspective(350px) rotateX(0deg);
  -webkit-transition:0.2s linear 0s;
  -o-transition:0.2s linear 0s;
  transition:0.2s linear 0s;
}
.navigation:hover .n2 {
  -webkit-transition-delay: 0.2s;
  -o-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
.navigation:hover .n3 {
  -webkit-transition-delay: 0.4s;
  -o-transition-delay: 0.4s;
  transition-delay: 0.4s;
}
.navigation:hover .n4 {
  transition-delay: 0.6s;
  -o-transition-delay: 0.6s;
  transition-delay: 0.6s;
}
.navigation:hover .n5 {
  -webkit-transition-delay: 0.8s;
  -o-transition-delay: 0.8s;
  transition-delay: 0.8s;
}

</script>


</head>
<body>










<h2>Navigation dropdown with unfold effect</h2>

<ul class="navigation">
  <a class="main" href="#url">Navigation #1</a>
  <li class="n1"><a href="#">item #1</a></li>
	<li class="n2"><a href="#">item #2</a></li>
	<li class="n3"><a href="#">item #3</a></li>
	<li class="n4"><a href="#">item #4</a></li>
	<li class="n5"><a href="#">item #5</a></li>
</ul>

<ul class="navigation">
  <a class="main" href="#url">Navigation #2</a>
  <li class="n1"><a href="#">item #1</a></li>
	<li class="n2"><a href="#">item #2</a></li>
	<li class="n3"><a href="#">item #3</a></li>
	<li class="n4"><a href="#">item #4</a></li>
	<li class="n5"><a href="#">item #5</a></li>
</ul>
</body>
</html>