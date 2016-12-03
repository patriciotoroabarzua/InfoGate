<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
 <div id="sidebar">


<center><p style="margin-bottom:5px;border-bottom:4px solid #0082ac;"><strong>INFOGATE</strong> TE VE</p></center>
<div style="background-color:#f4f4f4;">
<h5 style="margin-bottom:5px;">Opiniones que Valen:</h5>
<iframe width="300" height="220" src="https://www.youtube.com/embed/ja9GPJhgMcs" frameborder="0" allowfullscreen></iframe>
</div>

	
<div style="clear:both;"><center>
<!-- /99776453/w.home.300x250.1 -->
<div id='div-gpt-ad-1451309190961-0' style='height:250px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1451309190961-0'); });
</script>
</div></center>
</div>


</br>





<div style="clear:both;"><center><!-- /124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_A -->
<div id='div-gpt-ad-1448304889500-3' style='height:250px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1448304889500-3'); });
</script>
</div></center>
</div>


</br>



<div style="clear:both;">
<center>
<!-- /99776453/w.home.300x250.2 -->
<div id='div-gpt-ad-1455160721846-0' style='height:auto; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1455160721846-0'); });
</script>
</div>
</center>
</div>
</br>


	<div class="opinion">
		<h4>Opinión</h4>
		<?php query_posts('post_type=opinion&showposts=3'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'opinion-avatar', true); ?>
				<img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="autor">
					<p>por <?php the_field('autor') ?></p>
				</div>
	
			</article>
            
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

		<a class="mas" href="<?php echo get_post_type_archive_link('opinion'); ?>">Leer más columnas <span><i class="fa fa-angle-right"></i></span></a>
	</div>
	<div class="opinion">
<center>
<!-- /99776453/w.home.300x100.1 -->
<div id='div-gpt-ad-1455398629174-0' style='height:100px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1455398629174-0'); });
</script>
</div>

</center>
</div>
	<div class="citas">
		<?php query_posts('post_type=cita&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>"><a href="<?php echo get_post_type_archive_link('cita'); ?>">
				
				<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'home-cita', true); ?>
				<img class="img" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />
				<div class="trans"></div>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<p class="quien">— <?php the_title(); ?></p>
	
			</a></article>
	
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div><br>
	
	
		
			
			<?php wp_reset_query(); ?><br>

	

<center><div class="fb-page" data-href="https://www.facebook.com/igatecl" data-width="300" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/igatecl"><a href="https://www.facebook.com/igatecl">infogate.cl</a></blockquote></div></div></center><br>
<center>
<!-- /124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_B -->
<div id='div-gpt-ad-1448304889500-4' style='height:250px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1448304889500-4'); });
</script>
</div></center>
<br />

<div style="clear:both;">
<center>
<!-- /99776453/w.home.300x250.3 -->
<div id='div-gpt-ad-1455404728021-0' style='height:100%; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1455404728021-0'); });
</script>
</div>
</center>
</div>

<br />
<!-- /124506296/N_NOTICIAS_Infogate.cl/Infogate_300x90 -->
<center><div id='div-gpt-ad-1448304889500-7' style='height:90px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1448304889500-7'); });
</script>
</div></center></br>

	<center>
<!-- /124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_C -->
<div id='div-gpt-ad-1448304889500-5' style='height:250px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1448304889500-5'); });
</script>
</div></center>

	<div class="popular">
		<h4>Lo más leído</h4>
		<?php if ( is_single() ) { ?>
			<?php
		    if (function_exists('wpp_get_mostpopular'))
		        wpp_get_mostpopular("range=daily&post_type=post&cat=-18&limit=5");
			?>
		<?php } else { ?>
		<?php
		    if (function_exists('wpp_get_mostpopular'))
		        wpp_get_mostpopular("range=daily&post_type=post&cat=-18");
			?>
		<?php } ?>
	</div>
    
    <!-- /124506296/N_NOTICIAS_Infogate.cl/Infogate_300x250_D -->
<center>
<div id='div-gpt-ad-1448304889500-6' style='height:250px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1448304889500-6'); });
</script>
</div></center>

<center>
<!-- /99776453/300x600 -->
<div id='div-gpt-ad-1463504530859-0' style='height:600px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1463504530859-0'); });
</script>
</div>
</center>






</div>