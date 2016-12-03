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

<div class="container-fluid margin-10 margin-vert">
	<div class="row">
		<div class="col-xs-12 bg-first padding-20">
			<h3 class="no-margin">
				<a class="color-white padding-5 roboto-slab font-24 regular spacing-1" href="#">
					404 - Página no encontrada
				</a>
			</h3>
		</div>	
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

<!-- art relacionados -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 no-padding text-center margin-10 margin-vert">
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

			<!--<img class="full-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/320x50.png">-->
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