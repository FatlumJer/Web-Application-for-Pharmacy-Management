<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese 
perdoruesi dhe fjalekalimii qe ka shkruar useri ne Index.php 
gjindet ne db ne MySQL */
	session_start();
	include("konfigurimi.php"); //Mundeson lidhjen me databazen e krijuar
	$error = ""; //Variabel për ruajtjen e gabimeve tona.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["perdoruesi"]) || empty($_POST["fjalekalimi"]))
		{
			$error = "Kerkohet mbushja e te gjitha fushave!.";
		}else
		{
			// Definimi i $perdoruesi dhe $fjalekalimi
			$perdoruesi=$_POST['perdoruesi'];
			$fjalekalimi=$_POST['fjalekalimi'];
			//Kontrollo perdoruesi dhe fjalekalimi prej database
			$sql="SELECT id FROM umb_perdoruesit WHERE 
			perdoruesi='$perdoruesi' 
			and fjalekalimi='$fjalekalimi'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			/*Nese perdoruesi dhe fjalekalimi ekzistojne ne databaze, atehere 
			krijo nje sesion. Perndryshe shfaq nje (echo) error.*/
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['perdoruesi'] = $perdoruesi; // Fillimi i sesionit
				header("location: ballina_admin.php"); // hapet faqja pas logimit me sukses
			}else
			{
				$error = "perdoruesi ose fjalekalimii gabim.";
			}
		}
	}
?>