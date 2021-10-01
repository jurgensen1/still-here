

<?php
/* Powers about page, conact form page */


get_header();

while(have_posts()){
the_post();
	
?>

<h2 class="page-heading"><?php the_title(); ?></h2>
<section>
			<div class="recent-card">
	            <div>
		            <p><?php  the_content(); ?></p>
	            </div>
			</div>
</section>
		
		
<?php } ?>		
		
<hr class="about-hr"/>
	
<?php get_footer(); ?>