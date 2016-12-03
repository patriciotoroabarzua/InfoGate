<?php get_header(); ?>
<?php //the_post() ?>
<?php $current_cat = get_the_category(); ?>
<?php $current_cat = $current_cat[0]; ?>
<?php if(isset($current_cat)){
		$tituloCategory = $current_cat->name;
		$urlCategory = get_category_link( $current_cat->term_id );
	}else{
		$postType = get_post_type();
		$object = get_post_type_object($postType);
		//print_r($post);die;
		$tituloCategory = $object->labels->name;
		$urlCategory = get_post_type_archive_link($postType);;
	} 
?>
<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
			<!-- /99776453/m.home.320.1 -->
			<div id='div-gpt-ad-1472009314987-0' style='height:100px; width:320px;margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472009314987-0'); });
			</script>
			</div>
		<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x50.png">-->
		</div>
	</div>
</div>

<div class="container-fluid margin-10 margin-vert">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="<?php echo $urlCategory ; ?>">
					<?php echo $tituloCategory ?>
				</a>
			</h3>
		</div>	
	</div>
</div>

<div class="container-fluid margin-10 margin-vert bg-light">
	<div class="row">
		<div class="col-xs-12 no-padding">
			<?php $videoYoutube = get_field( "id_de_youtube", get_the_ID() ); ?>
			<?php if($videoYoutube){ ?>
				<div class="embed-responsive embed-responsive-16by9">
				    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $videoYoutube ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			<?php }else{ ?>
				<a href="#">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img class="full-img" src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			<?php } ?>
		</div>
		<div class="col-xs-12">
			<h3><a class="color-dark roboto-slab font-24 normal spacing-1" href="#"><?php the_title(); ?></a></h3>
			<hr class="line-bot-1">
			<div class="col-xs-12">
				<div class="col-xs-7">
					<p class="font-12 normal color-first line-h-12 padding-10 padding-top">Por:
						<a href="<?php echo get_author_posts_url( $post->post_author ); ?>" target="_blank" class="padding-2 padding-left color-first roboto-slab light italic normal font-12 spacing-1 line-h-12">
							<?php echo get_the_author_meta("display_name",$post->post_author); ?>
						</a>
					</p>
				</div>
				<div class="col-xs-5">
					<p class="font-12 normal color-first line-h-12 padding-10 padding-top">
						<?php echo get_the_date() ?>
					</p>
				</div>
			</div>
			<!-- imagen redes sociales-->			
			<div class="text-center border-first-dark border-bottom">
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
					<img class="logo margin-10 margin-bottom icon-rs padding-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-facebook.png" alt="facebook"/>
				</a>
				<?php $mensajeUrl = urlencode(get_the_title()." ".get_permalink()); ?>				
				<a href="https://twitter.com/intent/tweet?text=<?php echo $mensajeUrl ?>" target="_blank">
					<img class="logo margin-10 margin-bottom icon-rs padding-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-twitter.png" alt="twitter"/>
				</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
				</script>
				<a href="whatsapp://send?text=<?php echo $mensajeUrl ?>; ?>" target="_blank">
					<img class="logo margin-10 margin-bottom icon-rs padding-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-whatsapp.png" alt="whatsapp"/>
				</a>
				<?php $subject= urlencode("Infogate mail: ".get_the_title()) ?>
				<?php $subject20 = str_replace("+", "%20", $subject) ?>
				<?php $mensajeUrl20 = str_replace("+", "%20", $mensajeUrl) ?>
				<a href="mailto:?subject=<?php echo $subject20 ?>&amp;body=<?php echo $mensajeUrl20 ?>" target="_blank">
					<img class="logo margin-10 margin-bottom icon-rs padding-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-mail.png" alt="Email"/>
				</a>
			</div>
			<p class="padding-10 padding-bottom normal font-14 color-dark justify">
				<?php echo $post->post_excerpt ?>
			</p>
		</div>
		<div class="clear"> </div>
	</div>
</div>

<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
		    <!-- /99776453/m.home.320.2 -->
			<div id='div-gpt-ad-1472053377514-0' style='height:100px; width:320px; margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472053377514-0'); });
			</script>
			</div>
			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x50.png">-->
		</div>
	</div>
</div>

<div class="container-fluid margin-10 margin-vert bg-light padding-v-10">
	<div class="row">
		<div class="col-xs-12 ">
			<?php echo do_shortcode(wpautop($post->post_content)); ?>
			<div class="clear"> </div>
		</div>
	</div>	
</div>

<div class="clear"> </div>


<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5"></div>




<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
		    <!-- /99776453/m.home.300x250.1 -->
			<div id='div-gpt-ad-1472047853958-0' style='height:250px; width:300px;margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472047853958-0'); });
			</script>
			</div>
		</div>
	</div>
</div>

<!-- art relacionados -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert relacionados">
		
			 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		     <ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-5997907599330450"
		     data-ad-slot="8889666521"
		     data-ad-format="autorelaxed">
		     </ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
		
		</div>
	</div>
</div>

<!--Lo mas leido-->
<div class="container-fluid margin-10 margin-vert margin-top">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin"><a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="#">Lo + leido</a></h3>
		</div>	
	</div>
</div>

<div class="container-fluid margin-vert margin-top no-padding">
	<?php
    	if (function_exists('wpp_get_mostpopular'))
        	wpp_get_mostpopular('range=daily&post_type=post&cat=-18&limit=5&post_html="<div class=\'row margin-10 margin-vert border-grey border-bottom\'>
				<div class=\'col-xs-3 col-sm-2 margin-10 margin-bottom no-padding text-center\'>
					<a href=\'{url}\'>
						<div class=\'center-block circle bg-first color-white contador-mas-leido\'><p>{views}</p></div>
					</a>
				</div>
				<div class=\'col-xs-9 col-sm-10\'>
					<div class=\'margin-5 margin-bottom\'>
						<h3 class=\'margin-10 margin-bottom line-h-16\'><a class=\'color-dark  font-16 bold spacing-1\' href=\'{url}\'>{text_title}</a></h3>
					</div>
				</div>
				<div class=\'clear\'> </div>
			</div>"');
	?>
</div>

<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
		    <!-- /99776453/m.home.300x250.2 -->
			<div id='div-gpt-ad-1472052793703-0' style='height:250px; width:300px;margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472052793703-0'); });
			</script>
			</div>
			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x250.png">-->
		</div>
	</div>
</div>

<?php get_footer(); ?>