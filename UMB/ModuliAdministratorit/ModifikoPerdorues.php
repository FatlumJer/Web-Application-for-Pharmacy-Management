<?php

	include("kontrollo.php");	
?>
<?php

include_once("konfigurimi.php");

if(isset($_POST['ModifikoPerdorues']))
{	
	$id = $_POST['id'];
	
	$perdoruesi=$_POST['perdoruesi'];
	$fjalekalimi=$_POST['fjalekalimi'];
	$email=$_POST['email'];	
	
	
	if(empty($perdoruesi) || empty($fjalekalimi) || empty($email)) {	
			
		if(empty($perdoruesi)) {
			echo "<font color='red'>Perdoruesi eshte i zbrazet!</font><br/>";
		}
		
		if(empty($fjalekalimi)) {
			echo "<font color='red'>Fjalekalimi eshte i zbrazet!</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email eshte i zbrazet!</font><br/>";
		}		
	} else {	
		
		$result = mysqli_query($conn,"UPDATE umb_perdoruesit SET perdoruesi='$perdoruesi',fjalekalimi='$fjalekalimi',email='$email' WHERE id=$id");
		
		
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php

$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn,"SELECT * FROM umb_perdoruesit WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$perdoruesi = $res['perdoruesi'];
	$fjalekalimi = $res['fjalekalimi'];
	$email = $res['email'];
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


	<form username="form1" method="post" action="ModifikoPerdorues.php">
	
	<h3>Modifiko të dhënat e përdoruesit</h3>

			
				Përdoruesi
				<input type="text" name="perdoruesi" value='<?php echo $perdoruesi;?>' />
				<br>
				Fjalëkalimi
				<input type="text" name="fjalekalimi" value='<?php echo $fjalekalimi;?>' />
				<br>
				Email
				<input type="text" name="email" value='<?php echo $email;?>' />
				<br >
				<input type="hidden" name="id" value='<?php echo $_GET['id'];?>' />
				<input type="submit" name="ModifikoPerdorues" value="Modifiko Perdorues">
		
		
	</form>

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