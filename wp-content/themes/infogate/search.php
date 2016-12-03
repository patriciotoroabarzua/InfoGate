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
				
				<h2 class="entry-title">
				<?php echo $wp_query->found_posts; ?> <?php _e( 'resultados de la búsqueda de', 'locale' ); ?>: "<?php the_search_query(); ?>"
				</h2>
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

		<h2><?php _e('No se ha encontrado nada para tu búsqueda','html5reset'); ?></h2>

	<?php endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
