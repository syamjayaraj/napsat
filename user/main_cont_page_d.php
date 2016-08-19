<?php
require_once("sq.php");
?>
<?php
while ($nap_urr=mysqli_fetch_assoc($nap_ur_d)) {
?>
<section id="one">
						<section>
							<h1 align=center><u><?php echo $nap_urr['title'];?></u></h1>
							<h4>Category : <?php echo $nap_urr['cat'];?></h4>
							<p><span class="image left"><img src="images/avatar.jpg" alt="No image to display" />
							</span>
							<?php echo nl2br($nap_urr['stat']);?>
							</p>
						</section>
						<div class="row">
								<div class="6u 12u$(xsmall)">
									<h5>Posted on : <?php echo $nap_urr['dat'];?> &nbsp <?php echo $nap_urr['tim'];?></h5>
								</div>
							</div>
								</section>
<?php } ?>