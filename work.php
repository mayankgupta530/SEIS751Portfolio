<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Mayank Gupta Portfolio | Work</title>
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
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="js/site.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/response.js"></script>
	<script src="https://use.fontawesome.com/9c88f8c726.js"></script>
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
						<li><a class="nav-link" href="/~gupt0012/portfolio/index.html">Home</a></li>
						<li><a class="nav-link" href="/~gupt0012/portfolio/about.html">About</a></li>
						<li><a class="nav-link active" href="/~gupt0012/portfolio/work.php">Work</a></li>
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
		<!--body-->
		<div id="learn-more" class="desc container">
			<div class="desc__introduces">
				<span><h3>Work</h3></span>
				<p>Check out some of my work!</p>
			</div>
			<div id="work-tabs" class="container-fluid">
				<div class="panel">
					<div class="tabbable tabs-left clearfix">
						<ul id="myTab1" class="nav nav-tabs">
							<li class="active"><a href="#canvas" data-toggle="tab">HTML5 Canvas</a></li>
							<li><a href="#video" data-toggle="tab">HTML5 Video</a></li>
							<li><a href="#audio" data-toggle="tab">HTML5 Audio</a></li>
							<li><a href="#response" data-toggle="tab">Client Side Scripting</a></li>
							<li><a href="#serverside" data-toggle="tab">Server Side Scripting/Auth/WCs</a></li>
							<li><a href="#dataviz" data-toggle="tab">Data Visualization</a></li>
							<li><a href="#jsonex" data-toggle="tab">JSON Data Exchange</a></li>
							<li><a href="#storage" data-toggle="tab">Server Side Persistent Storage</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade active in" id="canvas">
								<p>An example of the HTML5 canvas element</p>
								<canvas id="myCanvas" width=170px height=100% style="border:2px solid #000000;"></canvas>
								<script type="text/javascript" src="js/work-canvas.js"></script>
							</div>
							<div class="tab-pane fade" id="video">
								<p>An example of the HTML5 video element</p>
								<div align="center" class="embed-responsive embed-responsive-16by9">
									<video controls class="embed-responsive-item">
        					<source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm>
    						</video>
								</div>
							</div>
							<div class="tab-pane fade" id="audio">
								<p>An example of the HTML5 audio element</p>
								<audio controls>
  							<source src=http://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3 type="audio/mpeg">
								Your browser does not support the audio element.
								</audio>
							</div>
							<div class="tab-pane fade" id="response">
								<p>Client side scripting example</p>
								<script language="JavaScript">
									var startTime = new Date();
									var endTime = new Date();
									var startPressed = false;
									var bgChangeStarted = false;
									var maxWait = 20;
									var timerID;

									function startTest() {
										document.body.style.background = document.response.bgColorChange.options[document.response.bgColorChange.selectedIndex].text;
										bgChangeStarted = true;
										startTime = new Date();
									}

									function remark(responseTime) {
										var responseString = "";
										if (responseTime < 0.10)
											responseString = "Well done!";
										if (responseTime >= 0.10 && responseTime < 0.20)
											responseString = "Nice!";
										if (responseTime >= 0.20 && responseTime < 0.30)
											responseString = "Could be better...";
										if (responseTime >= 0.30 && responseTime < 0.60)
											responseString = "Keep practicing!";
										if (responseTime >= 0.60 && responseTime < 1)
											responseString = "Have you been drinking?";
										if (responseTime >= 1)
											responseString = "Did you fall asleep?";

										return responseString;
									}

									function stopTest() {
										if (bgChangeStarted) {
											endTime = new Date();
											var responseTime = (endTime.getTime() - startTime.getTime()) / 1000;

											document.body.style.background = "white";
											alert("Your response time is: " + responseTime + " seconds " + "\n" + remark(responseTime));
											startPressed = false;
											bgChangeStarted = false;
										} else {
											if (!startPressed) {
												alert("press start first to start test");
											} else {
												clearTimeout(timerID);
												startPressed = false;
												alert("cheater! you pressed too early!");
											}
										}
									}

									var randMULTIPLIER = 0x015a4e35;
									var randINCREMENT = 1;
									var today = new Date();
									var randSeed = today.getSeconds();

									function randNumber() {
										randSeed = (randMULTIPLIER * randSeed + randINCREMENT) % (1 << 31);
										return ((randSeed >> 15) & 0x7fff) / 32767;
									}

									function startit() {
										if (startPressed) {
											alert("Already started. Press stop to stop");
											return;
										} else {
											startPressed = true;
											timerID = setTimeout('startTest()', 6000 * randNumber());
										}
									}
									// -->
								</script>
								<p>Test your Response time!</p>
								Click on "Start" first, and wait until the background color changes. As soon as it changes, hit "stop!"


								<form name="response">
									Change background color in:
									<select name="bgColorChange">
										<option selected>deeppink
										<option>aliceblue
										<option>crimson
										<option>darkkhaki
										<option>cadetblue
										<option>darkorchid
										<option>coral
										<option>chocolate
										<option>mediumslateblue
										<option>tomato
										<option>darkslategray
										<option>limegreen
										<option>cornflowerblue
										<option>darkolivegreen
										</select>
									<input type="button" value="start" onClick="startit()">
									<input type="button" value="stop" onClick="stopTest()">
								</form>
							</div>
							<div class="tab-pane fade" id="serverside">
								<p><a class="nav-link active" href="/~gupt0012/portfolio/secret.php">Access the super secret page here!</a></p>
								<p>Text on next page appears through HTML Import Web Component (Chrome Only)</p>
								<p>username: test</p>
								<p>password: secret</p>
							</div>
							<div class="tab-pane fade" id="dataviz">
								<p>An example of Data Visualization from Tableau</p>
								<script type='text/javascript' src='http://public.tableau.com/javascripts/api/viz_v1.js'></script>
								<div class='tableauPlaceholder' style='width: 654px; height: 719px;'><noscript><a href='#'><img alt='Sites Dashboard ' src='http:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Am&#47;AmeriCorpsSites&#47;SitesDashboard&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='654'
										height='719' style='display:none;'><param name='host_url' value='http%3A%2F%2Fpublic.tableau.com%2F' /> <param name='site_root' value='' /><param name='name' value='AmeriCorpsSites&#47;SitesDashboard' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='http:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Am&#47;AmeriCorpsSites&#47;SitesDashboard&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showTabs' value='y' /></object></div>
							</div>
							<div class="tab-pane fade" id="jsonex">
								<p>An example of a JSON data exchange</p>
								<h4>Favorite City Data From JSON</h4>
								<div id="jsonfinallocation"></div>
								<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
								<script>
									$.getJSON('cities.json', function(data) {
										var output = "<ul>";
										for (var i in data.city) {
											output += "<br>" + data.city[i].name + "," + data.city[i].country + "  -  " + data.city[i].rating + "/10";
										}

										output += "</ul>";
										document.getElementById("jsonfinallocation").innerHTML = output;
									});
								</script>
							</div>
							<div class="tab-pane fade" id="storage">
								<p>Example of Server Side Persistent Storage using SQLite</p>
								     <?php
											try
											{
												//open the database
												$db = new PDO('sqlite:db/pokemon.db');

												//create the database table
												$db->exec("CREATE TABLE IF NOT EXISTS Pokemon (Id INTEGER PRIMARY KEY, Name TEXT, MainType TEXT, PokedexNum INTEGER)");    

												//insert some data...
												$db->exec("INSERT INTO Pokemon (Name, MainType, PokedexNum) VALUES ('Bulbasaur', 'Grass', 1);".
																	 "INSERT INTO Pokemon (Name, MainType, PokedexNum) VALUES ('Charmander', 'Fire', 4); " .
																	 "INSERT INTO Pokemon (Name, MainType, PokedexNum) VALUES ('Squirtle', 'Water', 7);" .
																	 "INSERT INTO Pokemon (Name, MainType, PokedexNum) VALUES ('Ditto', 'Normal', 132);" .
																	 "INSERT INTO Pokemon (Name, MainType, PokedexNum) VALUES ('Zapdos', 'Electric', 145);" );

												//now output the data to a simple html table...
												print "<table border=1>";
												print "<tr><td>Id</td><td>Name</td><td>MainType</td><td>PokedexNum</td></tr>";
												$result = $db->query('SELECT * FROM Pokemon');
												foreach($result as $row)
												{
													print "<tr><td>".$row['Id']."</td>";
													print "<td>".$row['Name']."</td>";
													print "<td>".$row['MainType']."</td>";
													print "<td>".$row['PokedexNum']."</td></tr>";
												}
												print "</table>";

												// close the database connection
												$db = NULL;
											}
											catch(PDOException $e)
											{
												print 'Exception : '.$e->getMessage();
											}
										?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--footer-->
			<div class="site-footer">
				<div class="container">
					<div class="navbar-text pull-left">
						<p>&copy; 2016 Mayank Gupta</p>
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
	</div>
</body>