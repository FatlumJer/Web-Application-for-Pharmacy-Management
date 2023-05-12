<?php

include_once("konfigurimi.php");

if(isset($_POST['ShtoPerdorues'])) {	
	$perdoruesi = $_POST['perdoruesi'];
	$fjalekalimi = $_POST['fjalekalimi'];
	$email = $_POST['email'];
		

	if(empty($perdoruesi) || empty($fjalekalimi)) {			
		if(empty($perdoruesi)) {echo "<font color='red'>Perdoruesi eshte i zbrazet!</font><br/>";}
		if(empty($fjalekalimi)) {echo "<font color='red'>Fjalekalimi eshte i zbrazet!</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Email eshte i zbrazet!</font><br/>";}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		$result = mysqli_query($conn, "INSERT INTO umb_perdoruesit(perdoruesi,fjalekalimi,email) VALUES('$perdoruesi','$fjalekalimi','$email')");

	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";

	}
}
?>