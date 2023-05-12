

<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['ModifikoTeDhenat']))
{	
	
	
	$ID_Data = $_POST['ID_Data'];
	$Titullii=$_POST['Titulli'];
	$Pershkrimii=$_POST['Pershkrimi'];
	$pamjaefaqess=$_POST['pamjaefaqes'];
		
	
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$Emri_Foto= $_FILES['userfile']['Emri_Foto'];
	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($Titullii) || empty($Pershkrimii) || empty($pamjaefaqess)) {	
			
		if(empty($Titullii)) {
			echo "<font color='red'>Ju lutem shkruani emrin .</font><br/>";
		}
		
		if(empty($Pershkrimii)) {
			echo "<font color='red'>Ju lutem shkruani mbiemrin.</font><br/>";
		}
		
		if(empty($pamjaefaqess)) {
			echo "<font color='red'>Ju lutem shkruani numrin.</font><br/>";
		}
			
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE umb_tedhenat SET Titulli='$Titullii',Pershkrimi='$Pershkrimii',pamjaefaqes='$pamjaefaqess',File='$imgData', Emri_Foto='$Emri_Foto' WHERE ID_Data=$ID_Data");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: modifiko_tedhenat.php");
	}
}
?>
<?php
//getting ID_Studenti from url
$ID_Data=$_GET['ID_Data'];

//selecting data associated with this particular ID_Studenti
$result = mysqli_query($conn,"SELECT * FROM umb_tedhenat WHERE ID_Data=$ID_Data");

while($res = mysqli_fetch_array($result))
{
	$Titullii = $res['Titulli'];
	$Pershkrimii = $res['Pershkrimi'];
	$pamjaefaqess = $res['pamjaefaqes'];

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

			<section id="main" class="wrapper">
				<div class="container">

					
					<!-- Text -->
	

					<!-- Lists -->
						


					<!-- Table -->
						

					<!-- Form -->
						<section>
						<h3>Forma per ndryshimin e porosive aktuale</h3>
				<form enctype="multipart/form-data"  name="form1" method="post" action="ModifikoTeDhenat.php">
		<table border="0">
		
			<tr> 
				<td>Titulli</td>
				<td><input type="text" name="Titulli" value='<?php echo $Titullii;?>' required /></td>
			</tr>
			<tr> 
				<td>Pershkrimi</td>
				<td><input type="text" name="Pershkrimi" value='<?php echo $Pershkrimii;?>' required /></td>
			</tr>
			<tr> 
				<td>Pamjafaqes</td>
				<td><input type="text" name="pamjaefaqes" value='<?php echo $pamjaefaqess;?>' required /></td>
			</tr>
						
			<tr>
			<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
			<td><input name="userfile" type="file" /></td>
			</tr>
			
			
			<tr>
				<td><input type="hidden" name="ID_Data" value='<?php echo $_GET['ID_Data'];?>' /></td>
				<td><input type="submit" name="ModifikoTeDhenat" value="Modifiko"></td>
			</tr>
		</table>
	</form>
								
									
									
								
								
								</div>
							
						</section>

					<!-- Image -->
						

				
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