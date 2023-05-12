<?php

include_once("konfigurimi.php");

if(isset($_POST['ShtoBarna'])) {	
	$emri_barna = $_POST['emri_barna'];
	
		
	
	if(empty($emri_barna)) {			
		if(empty($emri_barna)) {echo "<font color='red'>Barna eshte e zbrazet!</font><br/>";}
		
	
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysqli_query($conn, "INSERT INTO umb_barna(emri_barna) VALUES('$emri_barna')");
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'shto_barna.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
	}
}
?>