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
			</div>
		</div>

<div id="ar">
	
	<div class="blogroll">
		
			<?php while (have_posts()) : the_post(); ?>
			
				<?php if ( 'aside' == get_post_format() ) { ?>
				
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
						<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-3', true); ?>
						<img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />
						
						<div class="cabeza">
							<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<div class="autor">
								<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
							</div>
						</div>
			
						<div class="entry">
							<?php the_excerpt(); ?>
						</div>
			
					</article>
				    
				<?php } else if ( 'video' == get_post_format() ) { ?>
				
<!-- 				Video -->
				
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						
						<div class="videoWrapper">
							<iframe width="500" height="281" src="https://www.youtube.com/embed/<?php the_field('id_de_youtube'); ?>" frameborder="0" allowfullscreen></iframe>
						</div>
					
						<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
						
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						
						<div class="autor">
							<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
						</div>
			
					</article>
				
				<?php } else { ?>
				
<!-- 				Normal -->
					
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
						<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
						
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						
						<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true); ?>
						<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
			
						<div class="entry">
							<?php the_excerpt(); ?>
						</div>
						
						<div class="autor">
							<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
						</div>
			
					</article>
					
				<?php } ?>

			<?php endwhile; ?>

			<?php post_navigation(); ?>
			
	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
