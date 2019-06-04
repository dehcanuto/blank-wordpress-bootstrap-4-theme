<?php 

get_header();

?>

<div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
	<div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal"><?php the_title(); ?></h1>
	</div>
</div>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
		</section>
	<?php endwhile; endif; ?>
</div>

<?php

get_footer()

?>