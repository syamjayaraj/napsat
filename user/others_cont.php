<?php
require_once("sq.php");
?>
<?php
while ($nap_urr=mysqli_fetch_assoc($nap_others)) {
?>
<section id="one">
						<section>
							<?php	$link= $nap_urr['cat'].'.php'; ?>
							<h1 align=center><u><?php echo $nap_urr['title'];?></u></h1>
							<h5>Category :<a href="<?php echo "$link"; ?>"><?php echo $nap_urr['cat'];?></a></h5>
							<p><span class="image left"><img src="images/thumbs/avatar.jpg" alt="No image to display" />
							</span>
							<?php echo $nap_urr['stat'];?>
							</p>
						</section>
						<div class="row">
								<div class="6u 12u$(xsmall)">
									<h5>Posted on : <?php echo $nap_urr['dat'];?> &nbsp <?php echo $nap_urr['tim'];?></h5>
								</div>
								<div class="6u 12u$(xsmall)">
									<h5>Written By : <a href="author.php"><?php echo $nap_urr['author'];?></a></h5>
								</div>
							</div>
								</section>
<?php } ?>