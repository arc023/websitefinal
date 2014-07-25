	<div class = 'center'>
	<div class="box">
		<h2> City of Colville Jobs</h2>

	<p>JOB OPENINGS
To apply for one of the jobs listed below, click on the links to download a copy of the application form and job description. Please fill out the application by hand, sign the back page and turn in to the City Clerk's Office, 170 S. Oak, Colville, WA 99114. Applications and job descriptions may also be picked up from the City Clerk's Office. Applications may be faxed to the City Clerk's Office at (509) 684-5030, however the original must also be returned to the City Clerk's Office. If you have any questions or need additional information, please call (509) 684-5094</p>
		
	</div>
	</div>
		
<?php 
	foreach ($jobs_list as $job2): ?>
	<div class = 'center'>
		<div class="box">
		<h3><?php echo $job2['title'] ?></h3>
			<div class="main">
				<?php echo $job2['main'] ?>
				<p></p>
			
		
		
			</div>
		</div>
</div>


<?php endforeach ?>


 

 