<?php
include_once("konfigurimi.php");

if(isset($_POST['shto_porosi'])) {	
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$numri = $_POST['numri'];
	$qyteti = $_POST['qyteti'];
	$porosia = $_POST['porosia'];
	
	
	if(empty($emri) || empty($mbiemri)|| empty($numri) || empty($qyteti)) {
				
		if(empty($emri)) {
			echo "<font color='red'>Emri eshte i zbrazet!</font><br/>";
		}
		
		if(empty($mbiemri)) {
			echo "<font color='red'>Mbiemri eshte i zbrazet!</font><br/>";
		}
		
		if(empty($numri)) {
			echo "<font color='red'>Numri Kontaktues eshte i zbrazet!</font><br/>";
		}
		if(empty($qyteti)) {
			echo "<font color='red'>Qyteti eshte i zbrazet!</font><br/>";
		}
		if(empty($porosia)) {
			echo "<font color='red'>Porosia eshte e zbrazet!</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		$result = mysqli_query($conn, "INSERT INTO umb_porosit_barna(emri,mbiemri,numri,qyteti,porosia) VALUES('$emri','$mbiemri','$numri','$qyteti','$porosia')");
		
			echo "<script>
         setTimeout(function(){
            window.location.href = 'porositbarna.php';
         }, 3000);
      </script>";
		 echo"<p><b>Porosia eshte duke u procesuar. Ju lutem pritni 3 sekonda. <b></p>";
		 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
	}
}
?>