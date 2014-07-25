<div class = 'headertitle'><h2>Notices</h2></div>

<?php 
foreach ($notices_list as $notices): ?>
<div class = 'center'>
	<div class="box">
    <h3><?php echo $notices['title'] ?></h3>
		<div class="main">
			<?php echo $notices['main'] ?>
			<p></p>
			
			<a href=''?> Read More </a>
		
		</div>
   	</div>
</div>


<?php endforeach ?>


 

 
 
 

 
