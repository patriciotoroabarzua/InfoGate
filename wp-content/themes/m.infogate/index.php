<?php get_header(); ?>
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
<!-- Destacado-->
<?php query_posts('cat=4&showposts=1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid margin-10 margin-vert">
	<div class="row">
		<div class="col-xs-12 no-padding">
			<a href="<?php the_permalink() ?>">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<img class="full-img" src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
		<div class="col-xs-12 bg-first">
			<h3>
				<a class="color-white roboto-slab font-24 normal spacing-1" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h3>
			<hr class="line-bot-1">
			<p class="  normal spacing-2 color-white">Por:
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-5 padding-left color-white roboto-slab italic normal  spacing-1"><?php the_author(); ?> </a>
				<!-- Fecha publicacion-->	
				
			</p>			
			
			<p class="padding-10 padding-vert normal color-white">
				<?php echo $post->post_excerpt ?>
			</p>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php endwhile;endif; ?>
<!-- Banner-->
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


<div class="row margin-10 margin-vert">

	<?php $categoriaId=6; ?>
	<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-xs-6 padding-3">
		<div class="section margin-20 margin-bottom">
			<div class="">
				<h3 class="no-margin">
					<a class="bg-first br-top color-white padding-10 block font-18 spacing-1 normal" href="<?php echo get_category_link( $categoriaId ); ?>">
						<?php echo get_the_category_by_ID($categoriaId) ?>
					</a>
				</h3>
			</div>
			<div>
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="br-bot bg-light border3 border-bottom height-110">
				<p class="padding-10"><a class="color-dark normal" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</div>
		</div>
	</div>
	<?php endwhile;endif; ?>



	<?php $categoriaId=258; ?>
	<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-xs-6 padding-3">
		<div class="section margin-20 margin-bottom">
			<div class="">
				<h3 class="no-margin">
					<a class="bg-first br-top color-white padding-10 block font-18 spacing-1 normal" href="<?php echo get_category_link( $categoriaId ); ?>">
						<?php echo get_the_category_by_ID($categoriaId) ?>
					</a>
				</h3>
			</div>
			<div>
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="br-bot bg-light border3 border-bottom height-110">
				<p class="padding-10"><a class="color-dark normal" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</div>
		</div>
	</div>
	<?php endwhile;endif; ?>
	<!-- Nacional -->
	<?php $categoriaId=8; ?>
	<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-xs-6 padding-3">
		<div class="section margin-20 margin-bottom">
			<div class="">
				<h3 class="no-margin">
					<a class="bg-first br-top color-white padding-10 block font-18 spacing-1 normal" href="<?php echo get_category_link( $categoriaId ); ?>">
						<?php echo get_the_category_by_ID($categoriaId) ?>
					</a>
				</h3>
			</div>
			<div>
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="br-bot bg-light border3 border-bottom height-110">
				<p class="padding-10"><a class="color-dark normal" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</div>
		</div>
	</div>
	<?php endwhile;endif; ?>


	<?php $categoriaId=4961; ?>
	<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-xs-6 padding-3">
		<div class="section margin-20 margin-bottom">
			<div class="">
				<h3 class="no-margin">
					<a class="bg-first br-top color-white padding-10 block font-18 spacing-1 normal" href="<?php echo get_category_link( $categoriaId ); ?>">
						<?php echo get_the_category_by_ID($categoriaId) ?>
					</a>
				</h3>
			</div>
			<div>
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="br-bot bg-light border3 border-bottom height-110">
				<p class="padding-10"><a class="color-dark normal" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</div>
		</div>
	</div>
	<?php endwhile;endif; ?>


	<?php $categoriaId=5; ?>
	<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-xs-6 padding-3">
		<div class="section margin-20 margin-bottom">
			<div class="">
				<h3 class="no-margin">
					<a class="bg-first br-top color-white padding-10 block font-18 spacing-1 normal" href="<?php echo get_category_link( $categoriaId ); ?>">
						<?php echo get_the_category_by_ID($categoriaId) ?>
					</a>
				</h3>
			</div>
			<div>
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="br-bot bg-light border3 border-bottom height-110">
				<p class="padding-10"><a class="color-dark normal" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</div>
		</div>
	</div>
	<?php endwhile;endif; ?>
	

	<?php $categoriaId=8653; ?>
	<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-xs-6 padding-3">
		<div class="section margin-20 margin-bottom">
			<div class="">
				<h3 class="no-margin">
					<a class="bg-first br-top color-white padding-10 block font-18 spacing-1 normal" href="<?php echo get_category_link( $categoriaId ); ?>">
						<?php echo get_the_category_by_ID($categoriaId) ?>
					</a>
				</h3>
			</div>
			<div>
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="br-bot bg-light border3 border-bottom height-110">
				<p class="padding-10"><a class="color-dark normal" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</div>
		</div>
	</div>
	<?php endwhile;endif; ?>
	<div class="clear"> </div>
</div>


<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-bottom">
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

<!-- Infogate Te Ve -->
<div class="container-fluid container-fluid margin-10 margin-vert padding-b-10">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="#">
					Infogate Te Ve
				</a>
			</h3>
		</div>	
	</div>
</div>
<?php $categoriaId=8408; ?>
<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container-fluid margin-10 margin-vert border-grey border-bottom">
			<div class="row margin-b-10 bg-light">
				<div class="col-xs-12 col-sm-8 margin-v-10">
					<h3 class="margin-5 margin-bottom line-h-16">
						<a class="color-dark font-18 bold spacing-1" href="<?php the_permalink() ?>">
							
							<?php echo get_the_category_by_ID($categoriaId) ?>
						</a>
					</h3>
					<hr class="line-bot-1">
					<p class="padding-10 padding-bottom normal font-14 color-first">
						<?php the_title(); ?>
					</p>
				</div>

				<div class="col-xs-12 col-sm-4 no-padding">
					<div class="embed-responsive embed-responsive-16by9">
						<?php $videoYoutube = get_field( "id_de_youtube", get_the_ID() ); ?>
					    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $videoYoutube ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				
				<div class="clear"> </div>
			</div>
		</div>

		<div class="clear"> </div>
<?php endwhile;endif; ?>

<?php $categoriaId=8423; ?>
<?php query_posts("cat=$categoriaId&showposts=1"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container-fluid margin-10 margin-vert border-grey border-bottom">
			<div class="row margin-b-10 bg-light">
				<div class="col-xs-12 col-sm-8 margin-v-10">
					<h3 class="margin-5 margin-bottom line-h-16">
						<a class="color-dark font-18 bold spacing-1" href="<?php the_permalink() ?>">
							<?php echo get_the_category_by_ID($categoriaId) ?>
						</a>
					</h3>
					<hr class="line-bot-1">
					<p class="padding-10 padding-bottom normal font-14 color-first">
						<?php the_title(); ?>
					</p>
				</div>

				<div class="col-xs-12 col-sm-4 no-padding">
					<div class="embed-responsive embed-responsive-16by9">
						<?php $videoYoutube = get_field( "id_de_youtube", get_the_ID() ); ?>
					    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $videoYoutube ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				
				<div class="clear"> </div>
			</div>
		</div>

		<div class="clear"> </div>
<?php endwhile;endif; ?>
<!-- Infogate Te Ve -->




<?php $categoriaId=4425; ?>
<div class="container-fluid container-fluid margin-10 margin-vert padding-b-10">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="<?php echo get_category_link( $categoriaId ); ?>">
					<?php echo get_the_category_by_ID($categoriaId) ?>
				</a>
			</h3>
		</div>	
	</div>
</div>
<div class="container-fluid margin-10 margin-vert">
	<?php query_posts("cat=$categoriaId&showposts=6"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row margin-b-10 border-grey border-bottom bg-light">
		<div class="col-xs-12 col-sm-4 min-height-140 no-padding">
			<a href="<?php the_permalink() ?>">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<img class="width-100" src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
		<div class="col-xs-12 col-sm-8 margin-v-10">
			<h3 class="margin-5 margin-bottom line-h-16">
				<a class="color-dark  font-16 bold spacing-1" href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h3>
			<p class=" font-12 normal spacing-2 color-first line-h-12">
				Por:
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-2 padding-left color-first roboto-slab light italic normal font-12 spacing-1 line-h-12"> 
					<?php the_author(); ?>
				</a>
			</p>
		</div>
		<div class="clear"> </div>
	</div>
	<?php endwhile;endif; ?>	
</div>
<div class="clear"> </div>



<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
			<!-- /99776453/m.home.300x250.3 -->
			<div id='div-gpt-ad-1472053043529-0' style='height:250px; width:300px; margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472053043529-0'); });
			</script>
			</div>
			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x250.png">-->
		</div>
	</div>
</div>

<?php $categoriaId=12; ?>
<div class="container-fluid container-fluid margin-10 margin-vert padding-b-10">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="<?php echo get_category_link( $categoriaId ); ?>">
					<?php echo get_the_category_by_ID($categoriaId) ?>
				</a>
			</h3>
		</div>	
	</div>
</div>
<?php query_posts("cat=$categoriaId&showposts=1"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid margin-10 margin-vert">
	<div class="row">
		<div class="br-top col-xs-12 bg-grey">
			<h3 class="padding-v-10 no-margin">
				<a class="color-white  font-20 normal spacing-1" href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h3>
		</div>
		<div class="col-xs-12 no-padding">
			<a href="<?php the_permalink() ?>">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
				<img class="width-100" src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
		<div class="col-xs-12 bg-light br-bot border3 border-bottom">
			<p class=" font-12 normal spacing-2 color-first line-h-12 padding-10 padding-top">Por:
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-2 padding-left color-first roboto-slab light italic normal font-12 spacing-1 line-h-12"> 
					<?php the_author(); ?>
				</a>
			</p>
			<p class=" normal  color-dark padding-10 padding-bottom">
				<?php echo $post->post_excerpt ?>
			</p>			
		</div>
	</div>	
</div>
<?php endwhile;endif; ?>
<div class="clear"> </div>

<?php $array=array(6892,4046,4045,4044); ?>
<div class="row margin-10 margin-vert">
	<?php for($i=0;$i<4;$i++){ ?>
		<?php $categoriaId=$array[$i]; ?>
		<?php query_posts("cat=$categoriaId&showposts=1"); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="col-xs-6 padding-3 <?php echo ($i%2==0)? "left":"right" ?>">
			<div class="section margin-20 margin-bottom">
				<div class="">
					<h3 class="no-margin"><a class="bg-first br-top color-white padding-10 block  font-18 spacing-1 normal" href="<?php echo get_category_link( $categoriaId ); ?>"><?php echo get_the_category_by_ID($categoriaId) ?></a></h3>
				</div>
				<div class="bg-light  height-110">
					<p class="padding-10 no-margin"><a class="color-dark  normal " href="<?php the_permalink() ?>">
						<?php the_title(); ?></a></p>
				</div>
				<div class="blog-articla-grid-pic">
					<a href="<?php the_permalink() ?>">
						<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
						<img class="br-bot" src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
					</a>
				</div>
			</div>
		</div>
		<?php endwhile;endif; ?>
	<?php } ?>
</div>
<div class="clear"> </div>

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


<?php $categoriaId=3124; ?>
<div class="container-fluid container-fluid margin-10 margin-vert padding-b-10">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="<?php echo get_category_link( $categoriaId ); ?>">
					<?php echo get_the_category_by_ID($categoriaId) ?>
				</a>
			</h3>
		</div>	
	</div>
</div>

<div class="container-fluid margin-10 margin-vert no-padding">
	<?php query_posts("cat=$categoriaId&showposts=4"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row margin-10 margin-vert border-grey border-bottom">
		<div class="col-xs-3 col-sm-2 margin-10 margin-bottom no-padding">
			<a href="<?php the_permalink() ?>">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true); ?>
				<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
		<div class="col-xs-9 col-sm-10">
			<h3 class="margin-10 margin-bottom line-h-16">
				<a class="color-dark  font-16 bold spacing-1" href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h3>
			<p class=" font-12 normal spacing-2 color-first line-h-12">Por:
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-2 padding-left color-first roboto-slab light italic normal font-12 spacing-1 line-h-12">
				<?php the_author() ?>
				</a>
			</p>
		</div>
		<div class="clear"> </div>
	</div>
	<?php endwhile;endif; ?>
</div>

<div class="clear"> </div>

<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
			<!-- /99776453/m.home.300x250.4 -->
			<div id='div-gpt-ad-1472053693896-0' style='height:250px; width:300px; margin: 0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472053693896-0'); });
			</script>
			</div>
			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x250.png">-->
		</div>
	</div>
</div>



<?php $categoriaId=4962; ?>
<div class="container-fluid container-fluid margin-10 margin-vert padding-b-10">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="<?php echo get_category_link( $categoriaId ); ?>">
					<?php echo get_the_category_by_ID($categoriaId) ?>
				</a>
			</h3>
		</div>	
	</div>
</div>

<div class="container-fluid margin-10 margin-vert no-padding">
	<?php query_posts("cat=$categoriaId&showposts=4"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row margin-10 margin-vert border-grey border-bottom">
		<div class="col-xs-3 col-sm-2 margin-10 margin-bottom no-padding">
			<a href="<?php the_permalink() ?>">
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true); ?>
				<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
		<div class="col-xs-9 col-sm-10">
			<h3 class="margin-10 margin-bottom line-h-16">
				<a class="color-dark  font-16 bold spacing-1" href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h3>
			<p class=" font-12 normal spacing-2 color-first line-h-12">Por:
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-2 padding-left color-first roboto-slab light italic normal font-12 spacing-1 line-h-12">
				<?php the_author() ?>
				</a>
			</p>
		</div>
		<div class="clear"> </div>
	</div>
	<?php endwhile;endif; ?>
</div>

<div class="clear"> </div>


<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-bottom">
			<!-- /99776453/m.home.320.3 -->
			<div id='div-gpt-ad-1472053915578-0' style='height:100px; width:320px; margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472053915578-0'); });
			</script>
			</div>
			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x50.png">-->
		</div>
	</div>
</div>

<div class="container-fluid container-fluid margin-10 margin-vert padding-b-10">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="<?php echo get_post_type_archive_link('opinion'); ?>">
					Opinión
				</a>
			</h3>
		</div>	
	</div>
</div>
<div class="container-fluid margin-10 margin-vert no-padding">
	<?php query_posts("post_type=opinion&showposts=3"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row margin-10 margin-vert border-grey border-bottom">
			<div class="col-xs-3 col-sm-2 margin-10 margin-bottom no-padding">
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true); ?>
					<img class="circle-img box" src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="col-xs-9 col-sm-10">
				<div class="margin-5 margin-bottom">
					<h3 class="margin-10 margin-bottom line-h-16">
						<a class="color-dark  font-16 bold spacing-1" href="<?php the_permalink() ?>">
							<?php the_title(); ?>
						</a>
					</h3>
					<p class=" font-12 normal spacing-2 color-first line-h-12">Por:
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-2 padding-left color-first roboto-slab light italic normal font-12 spacing-1 line-h-12"> 
							<?php the_author(); ?>
						</a>
					</p>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
	<?php endwhile;endif; ?>
</div>

<div class="clear"> </div>

<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
			<!-- /99776453/m.home.320.4 -->
			<div id='div-gpt-ad-1472054172335-0' style='height:100px; width:320px; margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472054172335-0'); });
			</script>
			</div>
			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x50.png">-->
		</div>
	</div>
</div>

<!--Lo mas leido -->
<div class="container-fluid margin-10 margin-vert">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin"><a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="#">Lo + leido</a></h3>
		</div>	
	</div>
</div>
<div class="container-fluid no-padding">
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
			<!-- /99776453/m.home.300x250.5 -->
			<div id='div-gpt-ad-1472054329810-0' style='height:250px; width:300px; margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472054329810-0'); });
			</script>
			</div>
			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x250.png">-->
		</div>
	</div>
</div>

<?php get_footer(); ?>