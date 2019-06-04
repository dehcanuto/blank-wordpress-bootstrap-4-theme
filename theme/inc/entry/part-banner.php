<div class="item">
	<a href="<?php the_permalink(); ?>">
<?php 
	has_post_thumbnail() ?
		printf('<img class="img-cover" src="%1$s" alt="%2$s">', get_the_post_thumbnail_url(), get_the_title() ) : 
		print( '<img class="img-cover" src="' . get_template_directory_uri() . '/assets/img/placeholder-header.jpg" alt="' . get_the_title() . '">' );		
?>
		<div class="desc-banner">
			<strong class="d-inline-block mb-2 text-primary"><?php the_category( ' ' ); ?></strong>
			<h3 class="mb-2"><?php the_title(); ?></h3>
			<div class="text-muted"><?php the_time( get_option( 'date_format' ) ); ?></div>
		</div>
	</a>
</div>