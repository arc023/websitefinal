<div class = 'headertitle'><h2>meetings</h2></div>

<?php 
foreach ($meeting_list as $meeting_times): ?>
<div class = 'center'>
	<div class="box">
    <h3><?php echo $meeting_times['title'] ?></h3>
		<div class="main">
			<?php echo $meeting_times['dateAndTime'] ?>
			
		</div>
   	</div>
</div>


<?php endforeach ?>


