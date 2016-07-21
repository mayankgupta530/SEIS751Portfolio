<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Mayank Gupta Portfolio | Secret!</title>
	<!-- Sets initial viewport load and disables zooming  -->
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- SmartAddon.com Verification -->
	<meta name="smartaddon-verification" content="936e8d43184bc47ef34e25e426c508fe" />
	<!-- original meta info <meta name="keywords" content="Flat UI Design, UI design, UI, user interface, web interface design, user interface design, Flat web design, Bootstrap, Bootflat, Flat UI colors, colors">
	<meta name="description" content="BOOTFLAT is an open source Flat UI KIT based on Bootstrap CSS framework.
And, for the designers, we offer a free PSD Download. It provides a faster, easier and less repetitive way for web developers or designers to create elegant web apps.">-->
	<link rel="shortcut icon" href="faviconv1.ico" />
	<link rel="bookmark" href="faviconv1.ico" />
	<link href="https://fonts.googleapis.com/css?family=Asap:400,700|Flamenco" rel="stylesheet">
	<!-- site css -->
	<link rel="stylesheet" href="css/site.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="import" href="blog-post.html">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="js/site.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://use.fontawesome.com/9c88f8c726.js"></script>
	
	  <!-- PHP HTTP Authentication -->
  <?php
	session_start();
  $valid_passwords = array ("test" => "secret");
  $valid_users = array_keys($valid_passwords);

  $user = $_SERVER['PHP_AUTH_USER'];
  $pass = $_SERVER['PHP_AUTH_PW'];

  $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

  if (!$validated) {
    header('WWW-Authenticate: Basic realm="Access to secret page!"');
    header('HTTP/1.0 401 Unauthorized');
		session_destroy();
    die ("Not authorized");
  }
  ?>
</head>

<body class="home">
	<div class="docs-header header--noBackground">
		<!--nav-->
		<nav class="navbar navbar-default navbar-custom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
					<a class="navbar-left" href="index.html"><img src="img/logo.png"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="nav-link active" href="/~gupt0012/portfolio/index.html">Home</a></li>
						<li><a class="nav-link" href="/~gupt0012/portfolio/about.html">About</a></li>
						<li><a class="nav-link" href="/~gupt0012/portfolio/work.php">Work</a></li>
						<li><a class="nav-link" href="/~gupt0012/portfolio/contact.php">Contact</a></li>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-search search-only">
								<i class="search-icon glyphicon glyphicon-search"></i>
								<input type="text" class="form-control search-query">
							</div>
						</form>
					</ul>
				</div>
			</div>
		</nav>
		<!--mainbody-->

			<script>
				var link = document.querySelector('link[rel=import]');
				var content = link.import.querySelector('#blog-post');
				document.body.appendChild(document.importNode(content, true));
			</script>
		
		<!--footer-->
		<div class="site-footer">
			<div class="container">
				<div class="navbar-text pull-left">
					<p>© 2016 Mayank Gupta</p>
				</div>
				<div class="navbar-text pull-right">
					<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="https://github.com/mayankgupta530" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
					<a href="http://www.piedpiper.com/" target="_blank"><i class="fa fa-pied-piper fa-2x" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/in/mayankgupta530" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</body>