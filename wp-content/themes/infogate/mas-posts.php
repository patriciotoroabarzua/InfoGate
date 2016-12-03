<?php
    /*
        Template Name: Mas Posts
    */
    $offset = htmlspecialchars(trim($_GET['offset']));
    if ($offset == '') {
        $offset = 0;
    }
   
    $query = new WP_Query('cat=4,7,258,52,8,6,44,5,12,207&posts_per_page=5&offset=' . $offset); 
?>

    <?php    
        while ($query->have_posts()) : $query->the_post(); ?>
            <!-- 				Asides -->
			
				<?php if ( 'aside' == get_post_format() ) { ?>
				
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
    <?php 
        endwhile; 
    ?>
