<?php get_header(); 

while(have_posts()){
	the_post();
	

?>

<div id="artpost-container">
        <div class="art-meta">
                    <h3 class="art-title"><?php the_title(); ?></h3>
					<h4>by <?php the_author(); ?></h4> 
        </div>
	    <section id="blogpost">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="artwork" alt="Artwork Image">
            <div class="artcard-description">
                <p><?php the_content(); ?></p>
            </div>
		</section>
		
		<?php } ?>
</div>		
	
<?php get_footer(); ?>