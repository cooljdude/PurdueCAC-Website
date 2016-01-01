<?php require_once( 'execadmin/cms.php' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Purdue Colleges Against Cancer</title>

<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
<!-- Call Bootstrap CSS, but first call custom rules stylesheet. -->
<link href = "css/bootstrapindex.css" rel = "stylesheet" />
<link href = "css/bootstrap.css" rel = "stylesheet" />
<link href = "css/bootstrap-theme.css" rel = "stylesheet" />
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b4e50d41aee734"></script>
</head>

<body>

<!-- Site created by Jason Bays -->
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
        <li class = "active">
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
<div id = "bgjumbo" class="jumbotron">
  	<h1><cms:editable name='Main_Site_Header' type='text'>Help us Finish the Fight.</cms:editable></h1>
  	<p><cms:editable name='Site_Header_Motto' type='text'>We envision a world without cancer.</cms:editable></p>
  	<p><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more about what we do.</a></p>
</div>

<!-- Begin three-column features. -->
<div class="container">
	<div class="row">
  		<div class="col-md-4">
        	<div class="thumbnail">
      			<img src="images/relay_transparent.png" alt="Relay for Life">
      			<div class="caption">
        		<h4>Relay for Life</h4>
        		<p>Purdue Colleges Against Cancer sponsors the Purdue Relay For Life each year, a magical event nobody should miss.</p>
        		<a href="relay.php" class="btn btn-default" role="button">Relay with Us</a>
                
      		</div>
   		</div>
    </div>
  		<div class="col-md-4">
        	<div class="thumbnail">
      			<img src ="images/club.png" alt="relay picture">
      			<div class="caption">
        		<h4>A Club Unlike Any Other</h4>
        		<p>CAC is a club that offers volunteer opportunities that contribute funds to world-changing cancer research, along with plenty of community outreach.</p>
        		<a href="about.php" class="btn btn-default" role="button">Join CAC</a>
                
      		</div>
        </div>
       </div>
		<div class="col-md-4">
        		<div class="thumbnail">
      			<img src="images/hope_event.png" alt="hope sign">
      			<div class="caption">
        		<h4>Come to an Event</h4>
        		<p>CAC holds a vast amount of events for students, cancer survivors, the community, and anyone else. Come check one out.</p>
        		<a href="events.php" class="btn btn-default" role="button">View Events</a>
                
      		</div>
       </div>
	</div>  
</div>

<!-- Begin featured event. -->
<div class = "container">
<div class="row">
  		<div class="col-sm-12">
        <h2><cms:editable name='Featured_Event_Title' type='text'>Featured Event:</cms:editable></h2>
        <p><cms:editable name='Featured_Event_Description' type='richtext'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec ullamcorper sem, at semper turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet posuere condimentum. Praesent dignissim malesuada enim non dictum. Nam placerat tincidunt elementum. Sed sagittis pharetra ullamcorper. Mauris ornare, sapien non luctus auctor, urna erat venenatis ante, vel rhoncus nunc nulla in eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec ullamcorper sem, at semper turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet posuere condimentum. Praesent dignissim malesuada enim non dictum. Nam placerat tincidunt elementum. Sed sagittis pharetra ullamcorper. Mauris ornare, sapien non luctus auctor, urna erat venenatis ante, vel rhoncus nunc nulla in eros.</cms:editable></p><br />
<br />
<br />
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