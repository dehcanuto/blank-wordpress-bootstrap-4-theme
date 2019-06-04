<?php 
/**
 * Template Name: Quem Somos
 *
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
?>

<div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
	<div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Punny headline</h1>
    <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
  </div>
</div>

<div class="container">
	<?php 
    	get_template_part( 'inc/blank/part', 'blocos' );

    	get_template_part( 'inc/blank/part', 'desc-esq' );

    	get_template_part( 'inc/blank/part', 'desc-dir' );
	?>	
</div>

<?php get_footer(); ?>