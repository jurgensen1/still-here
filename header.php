<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
<title>Still Here</title>
</head>

<body>
	<div id="slideout-menu">
		<ul>
				<li>
					<a href="<?php echo site_url(''); ?>">Home</a>
				</li>
				<li>
					<a href="<?php echo site_url('/blog'); ?>">Writings</a>
				</li>
				<li>
					<a href="<?php echo site_url('/artworks'); ?>">Artworks</a>
				</li>
				<li>
					<a href="<?php echo site_url('/about'); ?>">About</a>
				</li>
				<div class="searchbox-slide-menu">
                    <?php get_search_form(); ?>
                </div>
			</ul>
	</div>
	
	<nav>
		<div id="logo-img">
			<a href="<?php echo site_url(''); ?>" class="logo-a">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo10.png" alt="Still Here Logo">
			</a>
		</div>
		<div id="menu-icon">
			<i class="fas fa-bars"></i>
		</div>
			<ul>
				<li>
					<a href="<?php echo site_url(''); ?>" 
                    <?php if(is_front_page()) echo 'class="active"'?>
                    >HOME</a>
				</li>
				<li>
					<a href="<?php echo site_url('/blog'); ?>" 
                    <?php if(get_post_type() == 'post') echo 'class="active"' ?>
                    >WRITINGS</a>
				</li>
				<li>
					<a href="<?php echo site_url('/artworks'); ?>"
                    <?php if(get_post_type() == 'project') echo 'class="active"' ?>
                    >ARTWORKS</a>
				</li>
				<li>
					<a href="<?php echo site_url('/about'); ?>"
                    <?php if(is_page() and !is_front_page()) echo 'class="active"' ?>
                    >ABOUT</a>
				</li>
				<li>
					<div id="search-icon">
						<i class="fas fa-search"></i>
					</div>
				</li>
			</ul>
	</nav>

<div id="search-box">
    <?php get_search_form(); ?>  
</div>
<?php

/* This adds a *main container/block element to all pages except the front page. 
* So all the other pages have their main removed from the body (i.e. archive-project, 
* archive, and index */
if(!is_front_page()){ ?>
	<main>
<?php } ?>
	
