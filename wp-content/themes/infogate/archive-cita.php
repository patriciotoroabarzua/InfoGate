<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

		<?php if (have_posts()) : ?>
		
		<div class="head">
			<div class="titulo">
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h2 class="entry-title">Archivo de <span><?php single_cat_title(); ?></span></h2>
	
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h2 class="entry-title"> #<span class="tag"><?php single_tag_title(); ?></span></h2>
	
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h2 class="entry-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('F jS, Y'); ?></h2>
	
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h2 class="entry-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('F, Y'); ?></h2>
	
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h2 class="entry-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('Y'); ?></h2>
	
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h2 class="entry-title">Archivo de autor</h2>
	
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h2 class="entry-title">X Files</h2>
				
				<?php } ?>
				<h2 class="entry-title">Archivo de <span>Citas</span></h2>
			</div>
		</div>

<div id="ar" class="citacita">
	
	<div class="blogroll">
		
			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>"><a href="">
				
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-cita', true); ?>
					<img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />
					<div class="trans"></div>
					<div class="entry">
						<?php the_content(); ?>
					</div>
					<p class="quien">— <?php the_title(); ?></p>
		
				</a></article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>
			
	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
