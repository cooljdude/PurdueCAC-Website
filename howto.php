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
<div class = "container">
<div class="alert alert-danger" role="alert"><strong>WARNING!</strong> Are you viewing this page from a cellphone or other mobile device? If so, it is highly suggested you complete the registration process on a desktop or laptop.</div>

<h1>Sign up for Relay Online</h1>
These instructions are designed for those wishing to register for Purdue University's Relay For Life. To begin, access the Purdue Relay for Life page at <a href = "http://relayforlife.org/purdueuin">relayforlife.org/purdueuin</a>. <br>
<br>
The page should look like this: <br>
<img src="images/howto/1.png" alt="step 1"><br>
<br>
Next, click the <strong>Sign Up</strong> button.<br>
<br>
You will see this page:<br>
<img src="images/howto/2.png" alt="step 2"><br>
<div class="alert alert-info" role="alert"><strong>Unsure if you have an account?</strong>  If you don't know if you have an account, you probably don't. Simply continue on with the registration process as a new participant.</div><br>
<br>
At this point, the steps will be different depending on whether or not you wish to join a team. For these instructions, we will continue on as if you're joining a team. <strong>The instructions will be very similar no matter what option applies.</strong> For example, individual walkers will simply skip the joining a team step.<br>
<br>
If you chose to join a team, you will be prompted for your team information at this point. A dropdown will list all current Purdue Relay teams. Choose which one you wish to join.<br>
<img src="images/howto/3.png" alt="3"><br>
<br>
Next, you will be prompted for payment options.<br>

<img src="images/howto/4.png" alt="4"><br>

<div class="alert alert-info" role="alert"><strong>Registration is $10.</strong>  The $100 fundraising goal is simply a suggestion for your personal use. We highly suggest you go ahead and pay for registration online, as it is the most convenient, and quickest, option.</div>

<br>
<br>
Once you have decided on payment, you will be prompted for contact information and asked a few questions regarding Relay.<br>
<br>
<img src="images/howto/5.png"alt="5"><br>

<div class="alert alert-info" role="alert"><strong>Enter your mailing address at Purdue!</strong>For example, if you live in a dorm, enter your dorm mailing address. You will receive important information about Relay in the mail.</div>

<br>
<br>
Next you will be prompted for billing information. <strong>For security reasons, a screenshot is not provided.</strong>  However, it should be similar to any other online payment form.<br>
<div class="alert alert-info" role="alert"><strong>Your information is safe to enter.</strong>Payments are processed through the American Cancer Society; Purdue Colleges Against Cancer will never see your credit card information.</div><br><br>
<br>
<strong>Finally, you will simply confirm all information is correct.</strong> Once it is, simply click complete registration.
<img src="images/howto/6.png"><br>
<br>
<strong><h3>Congratulations! You are now registered for relay!</h3></strong> </div>

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