<div class="clear"></div>
</div>

<div class="subir-topo" style="display: none;">
	<i class="fas fa-arrow-up"></i>
</div>

<footer class="bg-dark text-light">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3 text-center text-lg-left">
				<?php 
			  		if ( has_custom_logo() ) {
			  			echo the_custom_logo();
			  		} else {
			  			echo esc_html( get_bloginfo( 'name' ) );
			  		}
			  	?>
				<p class="my-4">
					Rua de Tal, n 205<br>
					Recife/PE<br>
					50300-090
				</p>
				<ul class="d-inline-flex list-inline ft-social mx-auto">
					<li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=5581XXXXXXXXX" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
			</div>
			<div class="col-12 col-md-9">
				<h5 class="text-center text-lg-left my-5 mt-lg-0">
					<?php echo get_bloginfo( 'description' ); ?>
				</h5>
				<div class="row no-gutters">
					<div class="col-6 col-lg-3 mb-4">
						<h6>Menu</h6>
						<?php 
							wp_nav_menu( 
								array(	'theme_location' => 'main-menu',
										'menu_class' => 'list-unstyled'
									 ) );
						?>
					</div>
					<div class="col-6 col-lg-3 mb-4">
						<?php 
							if ( is_active_sidebar('footer-widget-1') ) {
								dynamic_sidebar('footer-widget-1');
							}
						?>
					</div>
					<div class="col-6 col-lg-3 mb-4">
						<?php 
							if ( is_active_sidebar('footer-widget-2') ) {
								dynamic_sidebar('footer-widget-2');
							}
						?>
					</div>
					<div class="col-6 col-lg-3 mb-4">
						<?php 
							if ( is_active_sidebar('footer-widget-3') ) {
								dynamic_sidebar('footer-widget-3');
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mt-5 font-weight-light rodape">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 text-center text-lg-left">
					<p class="mb-0">
						<?php printf( '%1$s %2$s %3$s.', '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
					</p>
				</div>
				<div class="col-6 text-center text-lg-right developed-by">
					<p class="py-2">
						<?php printf( 'Desenvolvido por: %1$s', '<a href="https://andrecanuto.com.br/">André Canuto</a></p>' );?>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>