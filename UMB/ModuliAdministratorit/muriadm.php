<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='muriballinaadm'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
<section id="one" class="wrapper style1 special">
				<div class="container">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
					<header class="major">
                  <h2 style="color:black"><b>Menaxhimi i te dhenave te ballines</b></h2>				
						
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
						<a href="shto_barna.php"><section class="box" style="background-color:#90EE90;">
								
								<h3 style="color:black">Shto Barna</h3>
								
							</section></a>
						</div>
						<div class="4u 12u$(medium)">
							<a href="modifiko_barna.php"><section class="box" style="background-color:#90EE90;">
								<h3 style="color:black"> Modifiko Barna </h3>
								
							</section></a>
						</div>
						<div class="4u$ 12u$(medium)">
							<a href="fshij_barna.php"><section class="box" style="background-color:#90EE90;">
								<h3 style="color:black">Fshij Barna</h3>
							
							</section></a>
						</div>
					</div>
					<br>
					<br>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<a href="shto_tedhenat.php"><section class="box" style="background-color:#90EE90;">
								<h3 style="color:black">Shto Te Dhenat</h3>
								
							</section></a>
						</div>
						<div class="4u 12u$(medium)">
							<a href="modifiko_tedhenat.php"><section class="box" style="background-color:#90EE90;">
								<h3 style="color:black"> Modifiko Te Dhenat</h3>
								
							</section></a>
						</div>
						<div class="4u$ 12u$(medium)">
							<a href="fshij_tedhenat.php"><section class="box" style="background-color:#90EE90;">
								<h3 style="color:black">Fshije Te Dhenat</h3>
								
							</section></a> 
						</div>
					</div>
					
					</div>
			</section>

            <?php } ?>