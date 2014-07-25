<div class = 'headertitle'><h2>business</h2></div>


<?php 
foreach ($business_list as $business2): ?>
<div class = 'center'>
	<div class="box">
    <h3><?php echo $business2['title'] ?></h3>
		<div class="main">
			<?php echo $business2['main'] ?>
			<p></p>
			
			<a href=''?> Read More </a>
		
		</div>
   	</div>
</div>


<?php endforeach ?>


 