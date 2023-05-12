<?php

	include("konfigurimi.php");	
?>

<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>BARNATORE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<?php include_once("koka.php"); ?>

		<!-- Nav -->
			<?php include_once("meny.php"); ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special"/>
						<h2>Shto Porosi</h2>
					<form method="post" action="shto_porosi.php">
										<div class="row uniform 50%" style="width:100%; margin:auto; padding:50px;">
									<div class="6u 12u$(4)">
										
										<input type="text" name="emri" id="emri" value="" placeholder="Emri"/> 
									    
							         	</div>
										<div class="6u 12u$(4)">
										
										<input type="text" name="mbiemri" id="mbiemri" value="" placeholder="Mbiemri" style="color:black"/> 
									    
							         	</div>
											<div class="6u 12u$(4)">
										
										<input type="text" name="numri" id="numri" value="" placeholder="Numri Kontaktues" /> 
									    
							         	</div>
											<div class="6u 12u$(4)">
										<p>
										<input type="text" name="qyteti" id="qyteti" value="" placeholder="Qyteti" /> 
									    </p>
							         	</div>
										<div class="6u 12u$(4)">
										<textarea name="porosia" id="porosia" placeholder="Shkruani Porosine ketu" rows="6"></textarea>
										</div>
										
														<ul class="actions" style="text-align:center;">
							<li><input type="submit" name="shto_porosi" class="special" value="Porosit"  /></li>
							<li><input type="reset" value="Fshij" /></li>
						</ul>	
										
					</div> 
									</form>
					
												
									  
										
							         	
										
									
									
									
									
									
								
						
									  
										
							         	
										
				</div>
									
				
			</section> 

		<!-- Footer -->
			<?php include_once("kemba.php"); ?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>