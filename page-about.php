

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
		            <p><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" id="recent-card-image" alt="Card Image"><?php  the_content(); ?></p>
	            </div>
			</div>
</section>
		
		
<?php } ?>		
		
<hr class="about-hr"/>
	
<?php get_footer(); ?>