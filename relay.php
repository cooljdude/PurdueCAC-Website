<?php require_once( 'execadmin/cms.php' ); ?>
<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
<!-- Call Bootstrap CSS, but first call custom rules stylesheet. -->
<link href = "css/bootstrapindex.css" rel = "stylesheet" />
<link href = "css/bootstrap.css" rel = "stylesheet" />
<link href = "css/contentfixer.css" rel = "stylesheet" />
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
	          <li><a href="history.php">History of CAC</a></li>
	          <li><a href="about.php">Club Information</a></li>
	          <li><a href="execteam.php">Executive Team/Structure</a></li>
	        </ul>
	      </li>
        <li class = "active">
          <a href="relay.php">Relay for Life</a>
        </li>
        <li>
          <a href="events.php">Events</a>
        </li>
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="facebook.php">Facebook</a></li>
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
<div id = "bgjumborelay" class="jumbotron">
  	<h1><cms:editable name='Relay_Header' type='text'>Celebrate. Remember. Fight back.</cms:editable></h1>
  	<p><cms:editable name='Relay_Header_Motto' type='text'>There are endless reasons we relay.</cms:editable></p>
</div>  
  
  </div>
  
  
<div class = "container">

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Do you need to know how to sign up?</strong> Learn how to sign up for Relay online by <a href = "howto.php">clicking here.</a>
</div>

<h1><cms:editable name='main_heading_1' type='text'>What is Relay For Life?</cms:editable></h1>
<div class="row">
	<div class = "col-lg-8">
    <p>
    <cms:editable name='Relay_Description' type='richtext'>Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this .Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this .Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this.</cms:editable>
    </p>
    </div>
    <div class = "col-lg-4">
    <img src="images/relay_side_2.png" class="img-circle" alt="Circular Image">
	</div>
</div>
<h1><cms:editable name='main_heading_2' type='text'>Why should I Relay?</cms:editable></h1>
<div class="row">
	<div class = "col-lg-8">
    <p>
    <cms:editable name='Why_Description' type='richtext'>Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this .Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this .Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this.</cms:editable>
    </p>
    </div>
    <div class = "col-lg-4">
    <img src="images/relay_side_1.png" class="img-circle" alt="Circular Image">
	</div>
</div>
<h1><cms:editable name='main_heading_3' type='text'>How do I get involved?</cms:editable></h1>
<div class="row">
	<div class = "col-lg-8">
    <p>
    <cms:editable name='Involved_Description' type='richtext'>Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this .Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this .Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this. Lorem ipsum test text ignore all of this.</cms:editable>
    </p>
    </div>
    <div class = "col-lg-4">
    <img src="images/relay_side_3.png" class="img-circle" alt="Circular Image">
	</div>
</div>
</div>  
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53065431-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</body>

</html>
<?php COUCH::invoke(); ?>   