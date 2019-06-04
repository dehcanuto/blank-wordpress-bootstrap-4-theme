<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class="d-flex position-relative flex-lg-row align-items-center p-3 px-md-4 bg-white">
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