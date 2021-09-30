<?php get_header(); ?>

<div id="banner">
	<h1>STILL &nbspHERE</h1>
	<h3>Explorations of Existence &#8212 mostly writing, but other stuff too</h3>
</div>

<main>

<?php 

while(have_posts()){
    the_post();

the_content();


}?>
<?php wp_reset_query(); ?>

<?php  
/* Recent Card Loop */	
		$args = array(
		'post_type' => 'post',
		'posts_per_page' => 1,	
		);
			
		$blogposts = new WP_Query($args);
		
		while($blogposts->have_posts()) {
			$blogposts->the_post();

?>
<div class="recent-card">
	<div>
		<a href="<?php the_permalink(); ?>">
			<h3 ><?php the_title(); ?></h3>
		</a>
	</div> 
	<div>
		<p><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" id="recent-card-image" alt="Card Image"><?php  the_excerpt(); ?></p>
	</div>
	<div id="recent-read-more">
		<a href="<?php the_permalink(); ?>" class="recent-btm-readmore">Read More</a>
	</div>
</div>

<?php } 
		
		wp_reset_query(); 
		
?>

	<a href="<?php echo site_url('/blog'); ?>">
		<h2 class="section-heading">Writings</h2>
	</a>
	
	<section>
		
		<?php  
		
		$args = array(
		'post_type' => 'post',
		'posts_per_page' => 2,
        'offset' => 1,	
		);
			
		$blogposts = new WP_Query($args);
		
		while($blogposts->have_posts()) {
			$blogposts->the_post();
		
		
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
					by <?php the_author(); ?>  
					<?php if(get_post_type()== 'post'){ ?>
					(Under the following: <a href="#"><?php echo get_the_category_list(', '); ?>)</a>
                    <?php } ?>
			    </div>
				<p><?php ;
                    echo the_excerpt()?>
				</p>
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
