<?php
	include("kontrollo.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['ModifikoPorosi']))
{	
	$id_porosia = $_POST['id_porosia'];
	
	$emri=$_POST['emri'];
	$mbiemri=$_POST['mbiemri'];
	$numri=$_POST['numri'];	
	$qyteti=$_POST['qyteti'];
	$porosia=$_POST['porosia'];

	if(empty(emri) || empty($mbiemri) || empty($numri) || empty($qyteti) || empty($porosia)) {	
			
		if(empty($emri)) {
			echo "<font color='red'>Emri eshte i zbrazet!</font><br/>";
		}
		
		if(empty($mbiemri)) {
			echo "<font color='red'>Mbiemri eshte i zbrazet!</font><br/>";
		}
		
		if(empty($numri)) {
			echo "<font color='red'>Numri eshte i zbrazet!</font><br/>";
		}	

		if(empty($qyteti)) {
			echo "<font color='red'>Qyteti eshte i zbrazet!</font><br/>";
		}

		if(empty($porosia)) {
			echo "<font color='red'>Porosia eshte e zbrazet!</font><br/>";
		}		
	} else {	
		
		$result = mysqli_query($conn,"UPDATE umb_porosit_barna SET emri='$emri',mbiemri='$mbiemri',numri='$numri',qyteti='$qyteti',porosia='$porosia' WHERE id_porosia=$id_porosia");
		
		
		header("Location: modifiko_porosi.php");
	}
}
?>
<?php

$id_porosia = $_GET['id_porosia'];

$result = mysqli_query($conn,"SELECT * FROM umb_porosit_barna WHERE id_porosia=$id_porosia");

while($res = mysqli_fetch_array($result))
{
	$emri = $res['emri'];
	$mbiemri = $res['mbiemri'];
	$numri = $res['numri'];
	$qyteti = $res['qyteti'];
	$porosia = $res['porosia'];
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


	<form name="form1" method="post" action="ModifikoPorosi.php">
	
	<h3>Modifiko Porosine</h3>

			
				Emri
				<input type="text" name="emri" value='<?php echo $emri;?>'   required />
				<br>
				Mbiemri
				<input type="text" name="mbiemri" value='<?php echo $mbiemri;?>'   required />
				<br>
				Numri
				<input type="text" name="numri" value='<?php echo $numri;?>'   required />
				<br >
				Qyteti
				<input type="text" name="qyteti" value='<?php echo $qyteti;?>'   required />
				<br >
				Porosia
				<input type="text" name="porosia" value='<?php echo $porosia;?>'   required />
				<br >
				<input type="hidden" name="id_porosia" value='<?php echo $_GET['id_porosia'];?>' />
				<input type="submit" name="ModifikoPorosi" value="Modifiko" class="button special">
		
		
	</form>

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