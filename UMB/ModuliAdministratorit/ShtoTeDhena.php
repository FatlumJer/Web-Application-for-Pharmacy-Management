<?php

include_once("konfigurimi.php");

if(isset($_POST['ShtoTeDhena'])) {	
	$Titulli = $_POST['Titulli'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$File = $_POST['File'];
 	$pamjaefaqes = $_POST['pamjaefaqes'];
	

	
	

	if(empty($Titulli) || empty($Pershkrimi)|| empty($File) || empty($pamjaefaqes)) {
				
		if(empty($Titulli)) {
			echo "<font color='red'>Titulli eshte i zbrazet!</font><br/>";
		}
		
		if(empty($PershkrimiD)) {
			echo "<font color='red'>Pershkrimi eshte i zbrazet!</font><br/>";
		}
			if(empty($File)) {
			echo "<font color='red'>File eshte i zbrazet!</font><br/>";
		}
		if(empty($pamjaefaqes)) {
			echo "<font color='red'>pamjaefaqes eshte i zbrazet!</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
			
		
		$result = mysqli_query($conn, "INSERT INTO umb_tedhenat(Titulli,Pershkrimi, File, pamjaefaqes) VALUES('$Titulli', '$Pershkrimi', 'images/$File', '$pamjaefaqes')");
				
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina_admin.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
		 
	
	}
}
?>