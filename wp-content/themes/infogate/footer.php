<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

	</div>
	</div>
    
	<footer id="footer" class="source-org vcard copyright" role="contentinfo">
		<div class="footer">
        
			<nav id="foo" role="navigation">
				<?php wp_nav_menu( array('theme_location' => 'tertiary') ); ?>
			</nav>
			<p>Infogate @ 2015 — Algunos derechos reservados<br />
				Av. Bulnes 180 of. 63, Santiago Centro<br />
				</p>
			<img src="<?php echo get_template_directory_uri(); ?>/_/img/logof2.png" alt="logo" />
		</div>
	</footer>


	<?php wp_footer(); ?>


<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
<!-- <script src="<?php bloginfo('template_directory'); ?>/_/js/querySort.js"></script> -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65225134-1', 'auto');
  ga('send', 'pageview');

</script>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<!-- Sticky Position -->
    	<script src="http://www.infogate.cl/wp-content/themes/infogate/js/sticky-position.js"></script>

</body>

</html>
