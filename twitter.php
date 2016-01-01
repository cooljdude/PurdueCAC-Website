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
	          <li class = "active"><a href="twitter.php">Twitter</a></li>
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
<div id = "bgjumbotwitter" class="jumbotron">
  	<h1><cms:editable name='Twitter_Header' type='text'>Your instant access to Purdue Colleges Against Cancer.</cms:editable></h1>
  	<p><cms:editable name='Twitter_Header_Motto' type='text'>See our progress in action.</cms:editable></p>
  	<p><a class="btn btn-primary btn-lg" href="http://twitter.com/purduecac" role="button"><cms:editable name='Twitter_Button_Text' type='text'>Retweet away.</cms:editable></a></p>
</div>
<div class = "container">
<h1>Important Twitter Feeds</h1>
<div class="row">
	<div class = "col-md-6"><h3><cms:editable name='Twitter_CAC_Header' type='text'>Purdue CAC Twitter Feed</cms:editable></h3>
<br />
<p><cms:editable name='Twitter_CAC_Description' type='text'>Maintained by Purdue CAC execs.</cms:editable></p>
<br />
<a class="twitter-timeline" href="https://twitter.com/PurdueCAC" data-widget-id="484893243725737986">Tweets by @PurdueCAC</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
    <div class = "col-md-6"><h3><cms:editable name='Twitter_ACS_Header' type='text'>Purdue CAC Twitter Feed</cms:editable></h3>
<br />
<p><cms:editable name='Twitter_ACS_Description' type='text'>Official ACS Twitter. Not maintained by Purdue CAC.</cms:editable></p>
<br />
<a class="twitter-timeline" href="https://twitter.com/AmericanCancer" data-widget-id="484898532915023873">Tweets by @AmericanCancer</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

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