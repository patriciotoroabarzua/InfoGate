<?php
    /*
        Template Name: Mas Portadas
    */
    $offset = htmlspecialchars(trim($_GET['offset']));
    if ($offset == '') {
        $offset = 0;
    }
   
    $query = new WP_Query('cat=7&posts_per_page=4&offset=' . $offset); 
?>

    <?php    
        while ($query->have_posts()) : $query->the_post(); ?>
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
    <?php 
        endwhile; 
    ?>
