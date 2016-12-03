<?php get_header(); ?>
<?php $current_cat = $wp_query->get_queried_object(); ?>
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
		</div>
	</div>
</div>

<div class="container-fluid margin-10 margin-vert">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="#">
					<?php echo $current_cat->name ?>
				</a>
			</h3>
		</div>	
	</div>
</div>

<?php $post = $posts[0]; $key=0; ?>
<?php query_posts($query_string.''); ?>
<?php if(have_posts() && !$paged && $key==0){ the_post(); ?>
	<div class="container-fluid margin-10 margin-vert bg-light">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<a href="<?php the_permalink() ?>">
					<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
					<img class="full-img" src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
			<div class="col-xs-12">
				<h3><a class="color-dark roboto-slab font-24 normal spacing-1" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<hr class="line-bot-1">
				<p class="font-12 normal spacing-2 color-first line-h-12 padding-10 padding-top">Por:
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-5 padding-left roboto-slab italic normal  spacing-1"><?php the_author(); ?></a>
				</p>
				<p class="padding-10 padding-bottom normal font-14 color-dark">
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
			</div>
		</div>
	</div>

<?php } ?>
<div class="container-fluid no-padding">
	<?php while ( have_posts() ){ ?>
		<?php the_post();  ?>
			<div class="row margin-10 margin-vert border-grey border-bottom">
				<div class="col-xs-3 col-sm-2 margin-10 margin-bottom no-padding">
					<a href="<?php the_permalink() ?>">
						<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true); ?>
						<img src="<?php rename_url($thumb_url[0]); ?>" alt="<?php the_title(); ?>" />
					</a>
				</div>
				<div class="col-xs-9 col-sm-10">
					<h3 class="margin-10 margin-bottom line-h-16">
					<a class="color-dark font-16 bold spacing-1" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<p class="font-12 normal spacing-2 color-first line-h-12">Por:
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="padding-2 padding-left color-first roboto-slab light italic normal font-12 spacing-1 line-h-12"><?php the_author(); ?></a></p>
				</div>
				<div class="clear"> </div>
			</div>	

		<?php $key++; ?>
	<?php } ?>
</div>

<div class="clear"> </div>

<!-- Banner -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
			<!-- /99776453/m.home.320.3 -->
			<div id='div-gpt-ad-1472053915578-0' style='height:100px; width:320px; margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472053915578-0'); });
			</script>
			</div>
		</div>
	</div>
</div>

<!--Lo mas leido-->
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
				<!-- /99776453/m.home.300x250.1 -->
			<div id='div-gpt-ad-1472047853958-0' style='height:250px; width:300px;margin:0 auto;'>
			<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472047853958-0'); });
			</script>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>