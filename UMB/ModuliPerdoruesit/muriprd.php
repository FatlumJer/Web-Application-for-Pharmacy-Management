<?php
            $result = mysqli_query($conn, "SELECT * FROM umb_tedhenat WHERE pamjaefaqes='muriballinaprd'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
            <section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/aspirin.png" alt="" /></span>
						<div class="content">
							<h2>Aspirin 100mg</h2>
						</div>
					</article>
					<article class="feature left">
						<span class="image"><img src="images/siofor.jpg" alt="" /></span>
						<div class="content">
							<h2>Siofor 850</h2>
						</div>
					</article>
					<article class="feature left">
						<span class="image"><img src="images/oki.jpg" alt="" /></span>
						<div class="content">
							<h2>Oki Tableta 80mg</h2>
						</div>
					</article>
				</div>
			</section>


            <?php } ?>