					</div>
				</div>
			</div>
		</div>
			<!---start-footer-->

		<div class="container-fluid margin-20 margin-top bg-first padding-v-10">
			<div class="row">
				<div class="col-xs-6 padding-20 color-white padding-5 roboto-slab regular spacing-1 text-center">
					<a class="color-white block margin-10" href="http://www.infogate.cl/quienes-somos/">Quienes Somos</a>
					<a class="color-white block margin-10" href="http://www.infogate.cl/contratar-publicidad/">Publicidad</a>				
				</div>	
				<div class="col-xs-6 padding-20 color-white padding-5 roboto-slab regular spacing-1 text-center">				
					<a class="color-white block margin-10" href="#">Contacto</a>
					<a class="color-white block margin-10" href="#">Editorial</a>
				</div>		
			</div>
		</div>


		<div class="container-fluid bg-dark-first padding-v-40">
			<div class="row text-center">				
				<div class="col-xs-12 padding-20 color-white padding-5 roboto font-12 light spacing-1 text-center">
					<p class="">Infogate &#169; 2016 Algunos derechos reservados.</p>
					<p class="">Av. Bulnes 180, Oficina 64, Santiago Centro</p>
				</div>
				<hr class="line-bot-1">
				<div class="col-xs-12">
					<img class="logo-footer center-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-footer.png" alt=" " />
				</div>					
			</div>
		</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


		

		

		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				//$('nav#menu-left').mmenu();
				$('nav#menu-left').mmenu({
					// options
					classes: 'mm-slide',
					searchfield: false,
					counters: false,
					dragOpen: {
						open: false,
						maxStartPos: 50
					},
					searchfield: false
					}, {
					pageSelector: "#page"
					});
			});
		</script>
		
    <!--<?php //wp_footer(); ?> -->
	</body>
</html>