<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['ModifikoBarna']))
{	
	$id_barna = $_POST['id_barna'];
	
	$emri_barna=$_POST['emri_barna'];
	
	
	// checking empty fields
	if(empty($emri_barna) ) {	
			
		if(empty($emri_barna)) {
			echo "<font color='red'>Barna field is empty.</font><br/>";
		}
		
	
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE umb_barna SET emri_barna='$emri_barna' WHERE id_barna=$id_barna");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: ballina_admin.php");
	}
}
?>
<?php
//getting ID_Dep from url
$id_barna = $_GET['id_barna'];

//selecting data associated with this particular ID_Dep
$result = mysqli_query($conn,"SELECT * FROM umb_barna WHERE id_barna=$id_barna");

while($res = mysqli_fetch_array($result))
{
	$emri_barna = $res['emri_barna'];
	
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


	<form emri_barna="form1" method="post" action="ModifikoBarna.php">
	
	<h3>Modifiko barna</h3>

			
				Barna
				<input type="text" name="emri_barna" value='<?php echo $emri_barna;?>'   required />
				<br>
		
				<input type="hidden" name="id_barna" value='<?php echo $_GET['id_barna'];?>' />
				<input type="submit" name="ModifikoBarna" value="Modifiko Barna" class="button special">
		
		
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