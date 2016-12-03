<!DOCTYPE HTML>
<html>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?>">



	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php if (is_single()) { ?><?php the_excerpt_rss(); ?><?php } else { ?><?php bloginfo('description'); ?><?php } ?>" />
	<?php if(is_single()){ ?>
		<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-1', true); ?>
		<meta property="og:url"                content="<?php echo get_permalink(); ?>" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="<?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?>" />
		<meta property="og:description"        content="<?php the_excerpt_rss(); ?>" />
		<meta property="og:image"              content="<?php rename_url($thumb_url[0]); ?>" />
	<?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" type="text/css">
	<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/infogate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

		<!-- Google Analytics-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-65225134-1', 'auto');
		  ga('send', 'pageview');
		</script>

	<!--Google DFP | digitalsuppor.cl-->
	<script>
		(function() {
			var useSSL = 'https:' == document.location.protocol;
			var src = (useSSL ? 'https:' : 'http:') +
			'//www.googletagservices.com/tag/js/gpt.js';
			document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
		})();
	</script>
	<script>
		googletag.cmd.push(function() {
			googletag.defineSlot('/99776453/m.home.320.1', [320, 100], 'div-gpt-ad-1472009314987-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.300x250.1', [300, 250], 'div-gpt-ad-1472047853958-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.300x250.2', [300, 250], 'div-gpt-ad-1472052793703-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.300x250.3', [300, 250], 'div-gpt-ad-1472053043529-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.320.2', [320, 100], 'div-gpt-ad-1472053377514-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.300x250.4', [300, 250], 'div-gpt-ad-1472053693896-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.320.3', [320, 100], 'div-gpt-ad-1472053915578-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.320.4', [320, 100], 'div-gpt-ad-1472054172335-0').addService(googletag.pubads());
			googletag.defineSlot('/99776453/m.home.300x250.5', [300, 250], 'div-gpt-ad-1472054329810-0').addService(googletag.pubads());
			googletag.pubads().set("page_url", "http://www.infogate.cl/");
			googletag.pubads().enableSingleRequest();
			googletag.pubads().collapseEmptyDivs();
			googletag.pubads().enableSyncRendering();
			googletag.enableServices();
		});
	</script>

	<!--facebook comments-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=960834943995361";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	<?php //wp_head() ?>

</head>

<body>
	<!---start-wrap-->
	<div class="container bg-dark-first border-first border-bottom padding-5 padding-top">
		<!---start-header-->
		<div id="page">
			<div id="header row">
				<a class="navicon" href="#menu-left"> </a>
				<div class="logo text-center">
					<a href="<?php echo site_url(); ?>">
						<img class="logo margin-10 margin-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-h.png" alt="Infogate" />
					</a>
				</div>
			</div>
			<!--top-->
			<!--<span class="ir-arriba fa fa-arrow-up" aria-hidden="true""></span>-->
			<nav id="menu-left">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<div class="rss">
					<div class="logo text-center">
						<a href="<?php echo site_url(); ?>">
							<img class="logo margin-10 margin-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-h.png" alt="Infogate" />
						</a>
					</div>
					<!-- imagen redes sociales-->			
					<div class="text-center border-first-dark border-bottom">
						<a href="#">
							<img class="logo margin-10 margin-bottom icon-rs padding-4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-facebook.png" alt="facebook"/>
						</a>				
						<a href="#">
							<img class="logo margin-10 margin-bottom icon-rs padding-4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-twitter.png" alt="facebook"/>
						</a>
						<a href="#">
							<img class="logo margin-10 margin-bottom icon-rs padding-4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-youtube.png" alt="facebook"/>
						</a>
					</div>
					
				</div>			
			</nav>
		</div>
	</div>
	<!---start-articls-->
	<div class="container-fluid">
		<div class="section margin-10 margin-vert">
			<div class="container-fluid">
				<div class="row">





