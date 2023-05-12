<?php
include('kycu.php');
if((isset($_SESSION['perdoruesi'])!=''))
{
	header('Location:ballina1_admin.php');
}


?>



<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moduli i Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.html">UEBAPLIKACIONI PER MENAXHIMIN E BARNATOREVE (UMB)</a></h1>
			</header>

		<!-- Nav -->
			

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Kycja ne WebAplikacion</h2>
					</header>

					<!-- Text -->
						<section>
							<header>
							<h4>Udhezim</h4>
							<blockquote>Per tu kycur ne webaplikacion, ju lutemi kontaktoni administratorin per hapjen e llogarise.</blockquote>
						</section>
						<section>
							<h3>Kycu ne Uebaplikacion</h3>
							<form method="post" action="">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="perdoruesi" id="username" value="" placeholder="Perdoruesi" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="password" name="fjalekalimi" id="password" value="" placeholder="Fjalekalimi" />
										<br>
										<br>
									
									</div>
									
									</div>
									
											<input type="submit" value="Kycu" class="special" name="submit" />
											
											
										
									</div>
								</div>
							</form>
						</section>

					
					

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Templated.co</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>