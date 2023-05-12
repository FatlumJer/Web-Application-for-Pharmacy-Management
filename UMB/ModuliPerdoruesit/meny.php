				
			<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='MenyPrd'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  	 echo $Pershkrimi;
			  
if($result==null)
  mysqli_free_result($result);

			}
            ?>
