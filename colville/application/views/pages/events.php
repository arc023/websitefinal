<div class = 'headertitle'><h2>events</h2></div>

<?php 
foreach ($events_list as $events2): ?>
<div class = 'center'>
	<div class="box">
    <h3><?php echo $events2['title'] ?></h3>
		<div class="main">
			<?php echo $events2['main'] ?>
			<p></p>
			
			<a href=''?> Read More </a>
		
		</div>
   	</div>
</div>


<?php endforeach ?>

