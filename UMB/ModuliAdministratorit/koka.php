<header id="header" class="alt">
				<a href="#nav">Menu</a>
			</header>
			<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='Header'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
			
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2><?php echo $Titulli ?></h2>
				<p><?php echo $Pershkrimi ?></p>
			</section>
			<?php } ?>