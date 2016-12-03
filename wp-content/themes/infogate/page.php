<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="head">
			<div class="titulo">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</div>
		</div>
		
		<div class="single-content">
			<article class="post" id="post-<?php the_ID(); ?>">
	
				<div class="entry-content">
	
					<?php the_content(); ?>
		
				</div>
	
			</article>
			
			<?php endwhile; endif; ?>
		</div>


<?php get_footer(); ?>
