<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>


<div id="left">
	<div class="destacados">
	
		<?php query_posts('cat=7&showposts=6'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
	
			</article>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
		
		<div id="postContainer"></div>
		<!--<div class="llamada">
			<a href="#" id="another" class="cargar">cargar más portadas</a>
		</div> -->
		
	</div>
	
	<div class="ad ad-1 ad-horizontal">
		<section class="banner"><a href="http://www.puntoc.cl/" target="_blank"><img src="http://www.infogate.cl/wp-content/uploads/2015/10/banner2cafe.jpg"></a></section>
	</div>
	
	<div class="content">
		
		<div class="ad ad-2 ad-vertical">
			<!-- <section class="banner"><a href="https://www.facebook.com/igatecl" target="_blank"><img src="http://www.infogate.cl/wp-content/uploads/2015/07/infog.png"></a></section> -->
		</div>	
	
		<div class="blogroll">
			<?php wp_reset_query(); ?>
			<?php query_posts('posts_per_page=7&cat=4,7,258,52,8,6,44,5,12,207'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<?php if ( 'aside' == get_post_format() ) { ?>

<!-- 				Asides -->
				
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
						<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-3', true); ?>
						<img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />
						
						<div class="head">
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
						
						<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-2', true); ?>
						<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
			
						<div class="entry">
							<?php the_excerpt(); ?>
						</div>
						
						<div class="autor">
							<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
						</div>
			
					</article>
					
				<?php } ?>
		
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			
			<div id="postContainer2"></div>
			<div class="llamada">
				<a href="#" id="another2" class="cargar">cargar más noticias</a>
			</div>
		</div>
	
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>