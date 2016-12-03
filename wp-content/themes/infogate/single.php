<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 </div>
 </div>

					




					<div class="adsmobile">
							<center>
							<!-- /99776453/m.home.320.1 -->
							<div id='div-gpt-ad-1464119405277-0' style='height:100px; width:320px;'>
							<script type='text/javascript'>
							googletag.cmd.push(function() { googletag.display('div-gpt-ad-1464119405277-0'); });
							</script>
							</div>						
							</center>
					</div>




				<!--banner 990x90.1-->
				<div class="ads-single">
					<center>
							<!-- /99776453/w.990x90.1 -->
								<div id='div-gpt-ad-1464041189628-0' style='height:90px; width:990px;'>
								<script type='text/javascript'>
								googletag.cmd.push(function() { googletag.display('div-gpt-ad-1464041189628-0'); });
								</script>
								</div>

						
					</center>
				</div>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="interior">
	<div class="interior-head">


<div style="width: 100%; max-width: 1024px; margin:0 auto;  padding: 0px;">
			<div class="head">

				<div class="titulo">
						
						<div class="meta">
							<div class="category"><?php exclude_post_categories("4, 7"); ?></div>
							<div class="fecha"><?php echo get_the_date(); ?></div>
						</div><!--meta-->
								<h2 class="entry-title"><?php the_title(); ?></h2>
									<div class="autor">
											<p>por <?php if (is_singular('opinion')) { ?><a><?php the_field('autor') ?></a><?php } else { ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a><?php } ?></p>
									</div><!--autor-->
										
				</div><!--titulo-->				

												<div class="compartir">
															<script>
												          function fbShare(url, title, descr, image, winWidth, winHeight) {
												              var winTop = (screen.height / 2) - (winHeight / 2);
												              var winLeft = (screen.width / 2) - (winWidth / 2);
												              window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
												          }
												        
												        function popitup(url) {
												          newwindow=window.open(url,'name','height=280,width=520');
												          if (window.focus) {newwindow.focus()}
												          return false;
												        }
												        function emailCurrentPage(){
												            window.location.href="mailto:?subject="+document.title+"&body="+escape(window.location.href);
												        }
												      </script>
														<ul>
															<li><a href="javascript:fbShare('<?php the_permalink(); ?>', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)" class="facebook"><i class="fa fa-facebook"></i> <span>Compartir</span></a></li>
															<li><a href="https://twitter.com/share?text=<?php the_title(); ?>&via=infogatecl" class="twitter" onclick="return popitup('https://twitter.com/share?text=<?php the_title(); ?>&via=infogatecl')"><i class="fa fa-twitter"></i> <span>twittear</span></a></li>
															<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="return popitup('https://plus.google.com/share?url=<?php the_permalink(); ?>')" class="gplus"><i class="fa fa-google-plus"></i> <span>Compartir</span></a></li>
															<li><a href="javascript:emailCurrentPage()" class="mail"><i class="fa fa-envelope-o"></i> <span>enviar</span></a></li>
															<li class="wsp"><a href="whatsapp://send?text=<?php echo get_permalink(); ?>" data-action="share/whatsapp/share" class="fa fa-whatsapp" style="background:#43d854;"></i> <span>whatsapp</span></a></li>
														</ul>
												</div> <!--compartir-->
	        </div><!--head-->
</div>
	</div><!--interior-head-->					
</div><!--interior-->



<!-- laterales -->

		        
		

<!--finlaterales -->




			
				
	<div class="contenedor-principal-inter">
						 
						<div class="seccion-principal">
									<!--banner 728x90.2-->
									<div class="ads-728-inter">
									<!-- /99776453/w.home.728x90.2 -->
										<div id='div-gpt-ad-1454699830356-0' style='height:90px; width:728px;'>
										<script type='text/javascript'>
										googletag.cmd.push(function() { googletag.display('div-gpt-ad-1454699830356-0'); });
										</script>
										</div>
									</div>

									
									<div class="imagenprincipalsingle" style="width:100%; margin-top: 5px; margin-bottom: 5px;">
									<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'img-principal', true); ?>
									<img style="width: 100%; height: 100%;" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />
									<?php if( get_field('creditos_foto') ): ?>
										<div class="creditos">
											<?php the_field('creditos_foto'); ?>
										</div>
									<?php endif; ?>
								</div>


												<div class="inter-entry" >
													<?php the_excerpt(); ?>
													<hr>
												</div>

									
							<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							
							<div class="entry-content">
								<?php if ( !('opinion' == get_post_type()) ) { ?>
								
                
                          
                
				
				<?php } ?>
				
				<?php the_content(); ?>
				
				<?php if ( 'opinion' == get_post_type() ) { ?>
					<div class="sobre-autor">
						<p>Sobre el autor:</p>
						<p><?php the_field('bio_autor'); ?></p>
					</div>
				<?php } ?>
				
				<?php if ( !('opinion' == get_post_type()) ) { ?>
				</br>

									


									<div class="adsmobile">
										<center>
											<!-- /99776453/m.home.300x250.1 -->
											<div id='div-gpt-ad-1464109849382-0' style='height:250px; width:300px;'>
												<script type='text/javascript'>
												googletag.cmd.push(function() { googletag.display('div-gpt-ad-1464109849382-0'); });
												</script>
											</div>
											
										</center>

									</div>

									<!-- banner 728x90.3-->
									<div class="ads-728-inter">

									<!-- /99776453/w.home.728x90.3 -->
										<div id='div-gpt-ad-1454699952084-0' style='height:90px; width:728px;'>
										<script type='text/javascript'>
										googletag.cmd.push(function() { googletag.display('div-gpt-ad-1454699952084-0'); });
										</script>
										</div>
										
									</div>


				<h3 class="recomendados">recomendados</h3>
				<div class="related">
					<?php
					    $orig_post = $post;
					    global $post;
					    $tags = wp_get_post_tags($post->ID);
					     
					    if ($tags) {
					    $tag_ids = array();
					    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
					    $args=array(
					    'tag__in' => $tag_ids,
					    'post__not_in' => array($post->ID),
					    'posts_per_page'=>4, // Number of related posts to display.
					    'caller_get_posts'=>1
					    );
					     
					    $my_query = new wp_query( $args );
					 
					    while( $my_query->have_posts() ) {
					    $my_query->the_post();
					    ?>
					     
					    <div class="relatedthumb">
					        <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail('populares'); ?><br />
					        <?php the_title(); ?>
					        </a>
					    </div>
					     
					    <? }
					    }
					    $post = $orig_post;
					    wp_reset_query();
				    ?>
				</div>
				<?php } ?>
				
			</div>
	
		
			 <h3 class="recomendados">comenta esta noticia</h3> 
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="640" data-numposts="10" data-colorscheme="light"></div>
	
			<?php endwhile; endif; ?>
			
		</article>
									<!--banner 728x90.3-->
									<div class="ads-728-inter">
									<!-- /99776453/w.home.728x90.4 -->
										<div id='div-gpt-ad-1454700667548-0' style='height:90px; width:728px;'>
										<script type='text/javascript'>
										googletag.cmd.push(function() { googletag.display('div-gpt-ad-1454700667548-0'); });
										</script>
										</div>
									</div>
		
		

	
			<br>


			<div style="max-height:250px;display:initial; margin-top:20px;">
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





					</div><!-- seccionprincipal-->

					    <div class="contenedor-sidebar">
							
							
							<?php get_sidebar(); ?>
						
						</div><!--contenedor-sidebar-->







<div class="ultimas">

											
		<ul>
<?php



$args = array( 'posts_per_page' => 12, 'category' => -18 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	
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
	
		<?php endforeach; 
wp_reset_postdata();?>
	</div>


					

					</div>

					





		









			








	

<?php get_footer(); ?>