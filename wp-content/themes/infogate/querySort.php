<?php header( 'Content-type: text/html; charset=utf-8' );?>
<div id="query_ajax">
				<?php
				    // load wordpress into template. dont touch me!
				    $path = $_SERVER['DOCUMENT_ROOT'];
				    define('WP_USE_THEMES', false);
				    require($path .'/wp-load.php');
				    // ah, wordpress is loaded. balance has been restored.
				    query_posts($_GET["query"]);
				?>
				 
				<div id="queryContainer">
				<ul>
				    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				    <li>
				    <a href="<?php the_permalink() ?>" class="img">
						<?php the_post_thumbnail('populares'); ?>
					</a>
					
					<div class="post-on">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					</div>
				    </li>
				    <?php endwhile; ?>
				    <?php endif; ?>
				</ul>
				</div>
			</div>