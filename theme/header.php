<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="top-bar py-2">
	<div class="container">
		<div class="d-flex justify-content-between">
			<div class="d-flex flex-lg-row align-items-center gap-3">
				<p class="d-flex mb-0">Tem alguma dúvida? Fale conosco: </p>
				<ul class="d-inline-flex list-inline contatos">
					<li><i class="fab fa-whatsapp"></i> 8199999-9999</li>
					<li><i class="fas fa-phone fa-flip-horizontal"></i> 99999-9999</li>
					<li><i class="fas fa-envelope"></i> contato@exemplo.com.br</li>
				</ul>
			</div>
			<div class="d-flex flex-lg-row align-items-center gap-3">
				<p class="d-flex mb-0">Redes sociais: </p>
				<ul class="d-inline-flex list-inline ml-3 contatos">
					<li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=55819999999"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<header class="d-flex flex-lg-row align-items-center justify-content-between p-3 px-md-4 bg-white">
	<h1 class="my-0 mr-auto font-weight-normal">
	  	<?php 
	  		if ( has_custom_logo() ) {
	  			echo the_custom_logo();
	  		} else {
	  			echo esc_html( get_bloginfo( 'name' ) );
	  		}
	  	 ?>
	</h1>
	<nav class="d-none d-lg-flex align-items-center my-2 my-md-0 mr-md-3">
		<?php 
			wp_nav_menu( 
				array( 
					'theme_location' => 'main-menu',
					'menu_class' => 'menu-horizontal'
				)
			);
	  	?>
	  	<div id="search">
			<?php get_search_form(); ?>
		</div>
  	</nav>
  	<button class="d-block d-lg-none navbar-toggler mr-4" type="button">
		<div class="menu-bar"></div>
		<div class="menu-bar"></div>
		<div class="menu-bar"></div>
	</button>
</header>