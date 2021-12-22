<?php get_header(); ?>

<div id="banner">
	<h1>STILL &nbspHERE</h1>
	<a href="https://www.patreon.com/bePatron?u=56407726">
		<h2><i class="fab fa-patreon"></i> Patreon Supported</h2>
	</a>
</div>

<main>

<?php  

?>
	<section>
		<div class="front-page-section-heading">
			<h2 class="section-heading">Selected Writings</h2>
		</div>
		<?php  
		$args = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
        'offset' => 0,	
		);
			
		$blogposts = new WP_Query($args);
		
		while($blogposts->have_posts()) {
			$blogposts->the_post();
		?>
		<div class="recent-card">
			<div>
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>
				<div><h3 class='author'>by <?php the_author(); ?></h3></div>
			</div> 
			<div class="mobile-thumbnail">
				<div class='card-image-image'><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" id="image" alt="Card Image"></div>
				<div class='card-image-caption'><?php the_post_thumbnail_caption(); ?></div>	
			</div>
			<div class='card-div'>
				<div class='content'>
					<div class='card-image'>
						<div class='card-image-image'><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" id="image" alt="Card Image"></div>
						<div class='card-image-caption'><?php the_post_thumbnail_caption(); ?></div>
					</div>
					<p><?php  the_excerpt(); ?></p>
				</div>
			</div>


			<div id="read-more">
				<a href="<?php the_permalink(); ?>" class="btm-readmore">Read More</a>
			</div>
		</div>
	
		<?php } 
		
		wp_reset_query(); 
		
		?>
		
	</section>
			
    <a href="<?php echo site_url('/artworks'); ?>"> 
		<h2 class="section-heading">Artworks</h2>
	</a>

	<section>

	
		<?php  
	
		$args = array(
		'post_type' => 'project',
		'posts_per_page' => 2,	
		);
			
		$projects = new WP_Query($args);
		
		while($projects->have_posts()) {
			$projects->the_post();
		
		
		?>
		
		<div class="card">
			<div class="card-image">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">	
				</a>
			</div>
			<div class="card-description"> 
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
				</a>
                <div class="card-meta-blogpost">
					by <?php the_author(); ?>  </p>
                </div>    
				<p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
				</p>
				<a href="<?php the_permalink(); ?>" class="btm-readmore">Read More</a>
			</div>
		</div>
	
		<?php }
		
		wp_reset_query(); 
		
		?>
	</section>

<?php get_footer(); ?>
