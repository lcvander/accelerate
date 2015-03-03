<?php
/*
* Template Name: My Custom About Page

 */

get_header(); ?>
<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-hero">
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</section>	

<section class="our-services">
	<div class="site-content">
		<ul class="about-services">
		<?php query_posts('post_type=services'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li class="individual-service">
				<h4><?php the_title(); ?></h4>
				<?php the_content();?>
			</li>
				
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>	
			
	</div>
</section>	

<?php get_footer(); ?>