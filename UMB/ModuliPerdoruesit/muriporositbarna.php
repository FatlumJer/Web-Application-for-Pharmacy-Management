<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='muriporositbarna'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
<section id="main" class="wrapper">
				<div class="container">

					<header class="major special"/>
						<h2>Porosit Barna</h2>
					<form method="post" action="shto_porosi.php">
										<div class="row uniform 50%" style="width:100%; margin:auto; padding:50px;">
									<div class="6u 12u$(4)">
										
										<input type="text" name="emri" id="emri" value="" placeholder="Emri"/> 
									    
							         	</div>
										<div class="6u 12u$(4)">
										
										<input type="text" name="mbiemri" id="mbiemri" value="" placeholder="Mbiemri" style="color:black"/> 
									    
							         	</div>
											<div class="6u 12u$(4)">
										
										<input type="text" name="numri" id="numri" value="" placeholder="Numri Kontaktues" /> 
									    
							         	</div>
											<div class="6u 12u$(4)">
										<p>
										<input type="text" name="qyteti" id="qyteti" value="" placeholder="Qyteti" /> 
									    </p>
							         	</div>
										<div class="6u 12u$(4)">
										<textarea name="porosia" id="porosia" placeholder="Shkruani Porosine ketu" rows="6"></textarea>
										</div>
										
														<ul class="actions" style="text-align:center;">
							<li><input type="submit" name="shto_porosi" class="special" value="Porosit"  /></li>
							<li><input type="reset" value="Fshij" /></li>
						</ul>					
					</div> 
					</form>					
				</div>
			</section> 
            <?php } ?>