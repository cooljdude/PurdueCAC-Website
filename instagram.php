<?php require_once( 'execadmin/cms.php' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CAC Instagram</title>

<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
<!-- Call Bootstrap CSS, but first call custom rules stylesheet. -->
<link href = "css/bootstrapindex.css" rel = "stylesheet" />
<link href = "css/bootstrap.css" rel = "stylesheet" />
<link href = "css/bootstrap-theme.css" rel = "stylesheet" />
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b4e50d41aee734"></script>

</head>

<body>

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
	          <li><a href="#">History of CAC</a></li>
	          <li><a href="about.php">Club Information</a></li>
	          <li><a href="#">Executive Team/Structure</a></li>
	        </ul>
	      </li>
        <li>
          <a href="#">Relay for Life</a>
        </li>
        <li>
          <a href="#">Events</a>
        </li>
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="facebook.php">Facebook</a></li>
	          <li><a href="twitter.php">Twitter</a></li>
	          <li class = "active"><a href="instagram.php">Instagram</a></li>
	        </ul>
	      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><div class="addthis_sharing_toolbox"></div></li></ul>
    </nav>
  </div>
</header>

<!-- Begin Jumbotron. Jumbotron text, in the custom CSS file, is given a 1px black stroke. -->
<div id = "bgjumboinsta" class="jumbotron">
  	<h1><cms:editable name='Instagram_Header' type='text'>They say a picture is worth 1000 words.</cms:editable></h1>
  	<p><cms:editable name='Instagram_Header_Motto' type='text'>All our words fight back against cancer.</cms:editable></p>
  	<p><a class="btn btn-primary btn-lg" href="http://instagram.com/purduecac" role="button">Follow us.</a></p>
</div>

<div class = "container">
<h1><cms:editable name='main_heading' type='text'>View our latest photos below.</cms:editable></h1>


<div class="row">
	<div class = "col-lg-12">
    <!-- SnapWidget -->
<iframe src="http://snapwidget.com/in/?u=cHVyZHVlY2FjfGlufDIwMHw0fDN8fG5vfDd8bm9uZXxvblN0YXJ0fHllcw==&v=3714" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:828px; height:621px"></iframe>
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