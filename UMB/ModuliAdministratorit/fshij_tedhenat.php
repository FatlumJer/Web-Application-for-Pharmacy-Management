<?php
	include("kontrollo.php");	
?>
<?php
include_once("konfigurimi.php");

$result = mysqli_query($conn,
"SELECT * FROM umb_tedhenat ORDER BY ID_Data DESC");
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


	<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kerko te Dhena per Fshirje</h3>
	</tr>
	<tr>

	<td>
	Kerko:
	</td>
	<td>
	<input type="text" name="term" placeholder="Titullin ose Pajmen"/>
</td>
<td> <input type="submit" value="Kërko" class="button special" /></td>
</tr>
</table> 
</div>
</div>
</form> 
	<div class="table-wrapper">
<table width='80%' border=0>
	<div class="table-wrapper">
	<tr bgcolor='#CCCCCC'>
		<td>Titulli</td>
		<td>Pershkrimi</td>
		<td>Emri i file</td>
		<td>Pamja e faqes</td>
		<td>Modifiko</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM umb_tedhenat 
WHERE Titulli LIKE '%".$term."%' 
OR  pamjaefaqes LIKE '%".$term."%'"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Titulli']."</td>";
		echo "<td>".$row['Pershkrimi']."</td>";
		echo "<td>".$row['File']."</td>";	
		echo "<td>".$row['pamjaefaqes']."</td>";	
		echo "<td><a href=\"FshijTeDhenat.php?ID_Data=$row[ID_Data]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini kete te dhene?')\" class='button special' class='button primary'>Fshij</a></td></tr>";		
	}

}

?>
</div>
	</table>


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