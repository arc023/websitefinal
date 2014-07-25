<div class = 'headertitle'><h2>Bids</h2></div>

<?php 
foreach ($bids_list as $bids2): ?>
<div class = 'center'>
	<div class="box">
    <h3><?php echo $bids2['title'] ?></h3>
		<div class="main">
			<?php echo $bids2['main'] ?>
			<p></p>
			
			<a href=''?> Read More </a>
		
		</div>
   	</div>
</div>


<?php endforeach ?>


 
