<?php
require_once("sq.php");
?>
<?php
while ($ins_urs=mysqli_fetch_assoc($ins_ur)) {
?>
<section id="one">
						<section>
							<h3>Category : <?php echo $ins_mainn['cat'];?></h3>
							<p><span class="image left"><img src="images/avatar.jpg" alt="No image to display" />
							</span>
							<?php echo $ins_mainn['stat'];?>
							</p>
						</section>
						<div class="row">
								<div class="6u 12u$(xsmall)">
									<h5>Posted on : <?php echo $ins_mainn['dat'];?> &nbsp <?php echo $ins_mainn['tim'];?></h5>
								</div>
								<div class="6u$ 12u$(xsmall)">
									<h5>Submited by : <?php echo $ins_mainn['by'];?></h5>
								</div>
							</div>
								</section>
<?php } ?>