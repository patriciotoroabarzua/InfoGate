<?php
if ( is_home() || is_front_page() ) :
    get_template_part( 'header-new' );

endif;
?>


<div id="left">

<center>
	<div class="ad ads-234 ">
<!-- /99776453/w.home.728x90.2 -->
<div id='div-gpt-ad-1454699830356-0' style='height:90px; width:728px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1454699830356-0'); });
</script>
</div>
<div>
</center>




	<div class="destacados" >
	
		<!-- Nacional-->
		<?php query_posts('cat=6&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div  class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background:#f4f4f4; height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
				
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				</div>
				</div>
			</article> 
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
		<!--EndNacional-->



		<!-- Tendencia -->
		<?php query_posts('cat=12&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background: rgba(0, 130, 172, 0.13); height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				</div>
				</div>
			</article>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

		<!-- EndTendencia -->

		<!-- Mundo -->
		<?php query_posts('cat=8&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background:#f4f4f4; height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				</div>
				</div>
			</article>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

		<!-- EndMundo -->

		<!-- Palacio -->
		<?php query_posts('cat=5&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background:#f4f4f4; height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				</div>
				</div>
			</article>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

		<!-- EndPalacio4 -->
		<!-- Economia -->
		<?php query_posts('cat=258&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background: rgba(27, 255, 34, 0.22);; height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				</div>
				</div>
	
			</article>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

		<!-- EndEconomia -->

		<!-- Deporte -->
		<?php query_posts('cat=3124&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background:#f4f4f4; height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	
			</article>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>


		<!-- EndDeporte -->
	
	</div> <!--cierre destacado-->   
    
   	<center>
   	<div class="ad ads-234 ">
		<!-- /99776453/w.home.728x90.3 -->
		<div id='div-gpt-ad-1454699952084-0' style='height:90px; width:728px;'>
		<script type='text/javascript'>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-1454699952084-0'); });
		</script>
		</div>
	</div>
 	</center><br>



 		<!-- test new -->

							
							
							<div class="content">
							<a href="http://www.infogate.cl/category/actualidad/"><div class="menu-actualidad">Actualidad</div></a>
							<?php query_posts('cat=4425f&showposts=4'); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
							<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
								


								<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
								<a href="<?php the_permalink() ?>"><img class="img" width="200" height="140" class="img" style="float:left;margin-right:10px;"  src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>

								<span style="display:block; margin-top:10px;"><a class="titulo" href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
								<div class="by">
								<p>por <a style="text-decoration: none;" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
								</div>
								<h2   style="font-size:1.1em; margin-bottom:12px; padding:0px; margin:0px; margin-bottom:4%; font-size: 0.875em; font-weight: 300; line-height: 1.6em;"><?php the_excerpt(); ?></h2>
						 	
						 	    
								</article>	
								
								<hr></hr>
						

						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

					</div><hr style="border: 0 ; border-top: 4px double #0082ac; width: 100%; margin-top:-20px;"></hr>
				</br>

			<!-- Endtest new -->

		

		

			


		
	
	<div class="content">
		
		
	<div class="uno"><div class="blogroll">
			<?php wp_reset_query(); ?>
			<?php query_posts('posts_per_page=5&cat=4,7,258,52,8,6,44,5,12,207'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<?php if ( 'aside' == get_post_format() ) { ?>

<!-- 				Asides -->
				
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
						<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-2', true); ?>
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
	
		</div>
		


</div>


		<a href="http://www.infogate.cl/category/regiones"><div class="menu-actualidad" >REGIONES</div></a>
	<hr>

	<div class="dos">



	<?php query_posts('cat=4962&showposts=3'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				<p><?php the_excerpt(); ?></p>
				<hr>
				
							
			</article> 

	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>


<a href="http://www.infogate.cl/category/elecciones"><div class="menu-actualidad" style="padding-top: 32px;" >ELECCIONES 2016</div></a>
<hr style="padding-top: 0px;">

<?php query_posts('cat=4961&showposts=3'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				<p><?php the_excerpt(); ?></p>
				<hr>
				
							
			</article> 

	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

















	    </div>
			

		<div class="destacados">

			<!--bebes&familias-->

	
			<?php query_posts('cat=4044f&showposts=1'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div  class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background: rgba(255, 170, 204, 0.23); height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
				
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
	
				</div>
				</div>
			</article> 
	
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	

			<!--Endbebes&familias-->

			<!--Mascotas-->
			<?php query_posts('cat=4045&showposts=1'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div  class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background: rgba(252, 215, 0, 0.23); height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
				
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
	
				</div>
				</div>
			</article> 
	
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			<!--EndMascotas-->

			<!--descubretuciudad-->
			<?php query_posts('cat=4046&showposts=1'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div  class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background: rgba(250, 130, 45, 0.39); height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
				
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
	

				</div>
				</div>
			</article> 
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	
</div>
	<!--EndDescubretuciudad-->

</div>


<!--
 testdestacadomovil-->
		<!--
		<div class="blogroll">

	
			<?php query_posts('cat=4044f&showposts=1'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article  <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div  class="cats"><?php exclude_post_categories("4, 7"); ?></div>
				<div style="background: rgba(255, 170, 204, 0.23); height:100%;">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<a href="<?php the_permalink() ?>"><img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
				
				<div style="margin-left:5px; margin-right:2px;"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="autor">
					<p>por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
				
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
	
				</div>
				</div>
			</article> 
	
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	
		</div>
		

 Endtestdestacadomovil-->





<center>
<!-- /99776453/w.home.728x90.5 -->
<div class="ad ads-234 ">
<div id='div-gpt-ad-1455406271755-0' style='height:90px; width:728px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1455406271755-0'); });
</script>
</div>
</div>
</center>


				<div style="max-height:250px;display:initial;">
 				<!-- google recomendados -->
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- 1er relacionado -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-5997907599330450"
                     data-ad-slot="8889666521"
                     data-ad-format="autorelaxed"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                </div>
                <br />
       			 <!--end gr --> 


</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>