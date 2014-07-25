<div class = 'headertitle'><h2>Mayor / council</h2>
</div>


<?php 
foreach ($council_list as $council_people): ?>
<div class = 'center'>
	<div class="box">
    <h3><?php echo $council_people['title'] ?></h3>
		<div class="main">
			<?php echo $council_people['fname'] ?>
			<?php echo $council_people['lname'] ?>
			<p></p>
			<?php echo $council_people['address1'] ?>
			
			<?php echo $council_people['address2'] ?>
			<p></p>
			<?php echo $council_people['phone'] ?>
			<p></p>
			<?php echo $council_people['email'] ?>
		</div>
   	</div>
</div>


<?php endforeach ?>


