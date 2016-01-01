<?php require_once( 'execadmin/cms.php' ); ?>
<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
<!-- Call Bootstrap CSS, but first call custom rules stylesheet. -->
<link href = "css/bootstrapindex.css" rel = "stylesheet" />
<link href = "css/bootstrap.css" rel = "stylesheet" />
<link href = "css/bootstrap-theme.css" rel = "stylesheet" />
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b4e50d41aee734"></script>

</head>

<body>
<!--Facebook needs the below code. -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=227363051563&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- Begin calling JavaScript -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- Begin NavBar -->
<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
	</button>
      <a href="./" class="navbar-brand">Purdue CAC</a>
    </div>
    <nav class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="index.php">Home</a>
        </li>
				<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="history.php">History of CAC</a></li>
	          <li><a href="about.php">Club Information</a></li>
	          <li><a href="execteam.php">Executive Team/Structure</a></li>
	        </ul>
	      </li>
        <li>
          <a href="relay.php">Relay for Life</a>
        </li>
        <li>
          <a href="events.php">Events</a>
        </li>
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li class = "active"><a href="facebook.php">Facebook</a></li>
	          <li><a href="twitter.php">Twitter</a></li>
	          <li><a href="instagram.php">Instagram</a></li>
	        </ul>
	      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><div class="addthis_sharing_toolbox"></div></li></ul>
    </nav>
  </div>
  </header>
  
  <!-- Begin Jumbotron. Jumbotron text, in the custom CSS file, is given a 1px black stroke. -->
<div id = "bgjumbofacebook" class="jumbotron">
  	<h1><cms:editable name='Facebook_Header' type='text'>Your one-stop location for CAC information.</cms:editable></h1>
  	<p><cms:editable name='Facebook_Header_Motto' type='text'>Like our statuses, hate cancer.</cms:editable></p>
  	<p><a class="btn btn-primary btn-lg" href="https://www.facebook.com/pages/Purdue-Colleges-Against-Cancer/128227072455" role="button">Like us.</a></p>
</div>
  
  <div class = "container">
<h1><cms:editable name='main_heading' type='text'>View our latest posts below.</cms:editable></h1>


<div class="row">
	<div class = "col-lg-12">
    
    <!--INSERT HERE-->
    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Purdue-Colleges-Against-Cancer/128227072455" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true" width = "600px"></div>
    
    </div>
</div>
</div>
  
  </div>
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53065431-1', 'auto');
  ga('send', 'pageview');

</script>
  
</body>
</html>
<?php COUCH::invoke(); ?>   