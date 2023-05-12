<?php
	include("kontrollo.php");	
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

		<!-- Banner -->
			

		<!-- One -->
			<section id="one" class="wrapper style1 special">
			<div class="inner">
				<div class="content">
					
						<div class="row">
														<div class="col-6 col-12-medium">

									

									<h3>Shto të dhënat</h3>
									
									<div class="table-wrapper">
										<form enctype="multipart/form-data"  action="ShtoTeDhena.php" method="post" name="form1">
											<table width="80%" border="0">
																			
												
												<tr> 
													<td>Titulli</td>
													<td><input type="text" name="Titulli"></td>
												</tr>
												<tr> 
													<td>Pershkrimi</td>
													<td>
													<textarea name="Pershkrimi" rows="10" cols="30"></textarea>
													</td>
												</tr>

								<tr> 
													<td>Emri file</td>
													<td><input type="text" name="File"></td>
												</tr>
												
											    <tr> 
												<td>Pamja e faqes</td>
													<td><input type="text" name="pamjaefaqes"></td>
												</tr>
												<tr> 
													<td></td>
													<td><input type="submit" name="ShtoTeDhena" value="Shto" class="button special"></td>
												</tr>
												
											</table>
									</form>
																		</div>
						</div>		
						</div>
				</div>
			</section>
		<!-- Two -->
			

		<!-- Three -->
			

		<!-- Four -->
		

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