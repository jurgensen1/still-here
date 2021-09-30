<?php get_header(); 

while(have_posts()){
	the_post();
	

?>
<div id="post-container">
        <aside id="sidebar">
			<?php dynamic_sidebar('main_sidebar'); ?>
		</aside>
	    <section id="blogpost">
			<div class="card">
				<div class="card-meta-blogpost">
                    <h2 class="post-page-heading"><?php the_title(); ?></h2>
				</div>
				<div class="card-description">
					<p><?php the_content(); ?></p>
				</div>
			</div>

		</section>
		
		<?php } ?>
</div>		
	
<?php get_footer(); ?>