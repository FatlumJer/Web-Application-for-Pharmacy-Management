<footer id="footer">
				<div class="inner">
					<div class="content">
					<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='umb_footer_adresa'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<section>
							<h3><?php echo $Titulli ?></h3>
							<p><?php echo $Pershkrimi; ?>
							</p>
						</section>
			<?php } ?>
									<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='umb_footer_linqe'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<?php echo $Pershkrimi; ?>
						</section>
			<?php } ?>
									<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='umb_footer_rrjetesociale'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<?php echo $Pershkrimi; ?>
						</section>
			<?php } ?>
					</div>
					<div class="copyright">
					
												<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='umb_footer_copyright'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
					
					
							<?php echo $Pershkrimi; ?>
					
			<?php } ?>
						
					</div>
				</div>
			</footer>