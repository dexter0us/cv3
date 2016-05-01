<!DOCTYPE HTML>
<!--
	Muhammad Dawer Saeed
-->
<html>
	<head>
		<title>M. Dawer Saeed</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Dawer Saeed</h1>
							<p>Mechatronics Engineer</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="/cv/cv3/index.html#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Introduction</span></a></li>
								<li><a href="/cv/cv3/index.html#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="/cv/cv3/index.html#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
								<li><a href="/cv/cv3/index.html#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://github.com/dexter0us" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Thank You</h2>
							</header>

							<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
							<p><div>

							<?php

							$_username="";
							$_usermail="";
							$_usermsg="";
							$db="dawermsg";
							$table="contact";

							if ($_SERVER["REQUEST_METHOD"] == "POST") 
								{	
									if(isset($_REQUEST['name'])){ $_username=$_REQUEST['name']; }
									if(isset($_REQUEST['email'])){ $_usermail=$_REQUEST['email']; } 
									if(isset($_REQUEST['message'])){ $_usermsg=$_REQUEST['message']; }
								}

							 //----------------Sql conntction starting-------------------

							$conn= mysql_connect('localhost','root','');	// Create connection
								if(! $conn )
								{die('Could not connect to the DATABASE, Either this is not the system at which you made the paper or the DATABASE has been deleted: ' . mysql_error(). PHP_EOL);} else {PHP_EOL;}

							mysql_select_db($db);	//Selecting the Default DB.

							//-------------- Inserting the Answers to the DATABASE columns ---------
							$sql="INSERT INTO `" . $table . "` ( `user_name` , `user_email` , `user_msg` , `user_ip` )
							VALUES ('". $_username . "','" . $_usermail . "','" . $_usermsg . "','" . $_SERVER['REMOTE_ADDR'] . "')";	//inserting the line corresponding to the roll_number
							if (mysql_query($sql, $conn)) {PHP_EOL;} else {mysqli_error($conn).PHP_EOL;}

							mysql_close($conn);

							?>


							Thank you for contacting me. Your message is of such an importance to me. I will try my best to answer you or try to get back to you as soon as possible. Till then, I wish you very good luck. Be safe and care your parents if you find them.</p>

							<footer>
								<a href="#" onclick="return goBack()" class="button scrolly">Go Back</a>
							</footer>

						</div>
					</section>

					<script>
						function goBack() {
						window.history.back();
						}
					</script>
			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Muhammad Dawer Saeed. All rights reserved.</li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>