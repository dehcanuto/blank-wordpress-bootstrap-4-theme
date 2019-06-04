<div class="col-12">
	<article class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		<div class="col-12 col-lg-6 d-none d-lg-block">
			<?php 
				has_post_thumbnail() ?
					printf('<img class="card-img-top" src="%1$s" alt="%2$s">', get_the_post_thumbnail_url(), get_the_title() ) : 
					printf( '<img class="card-img-top" src="%1$s/assets/img/placeholder-header.jpg" alt="%2$s">', get_template_directory_uri(), get_the_title() );		
			?>
		</div>
		<div class="col-12 col-lg-6 p-4 d-flex flex-column position-static">
			<strong class="d-inline-block mb-2 text-primary"><?php the_category( 'single' ); ?></strong>
			<h3 class="mb-0"><?php the_title(); ?></h3>
			<div class="mb-1 text-muted"><?php the_time( get_option( 'date_format' ) ); ?></div>
			<p class="card-text mb-auto"><?php the_title(); ?></p>
			<a href="<?php the_permalink(); ?>" class="stretched-link">Continue lendo</a>
		</div>
	</article>
</div>