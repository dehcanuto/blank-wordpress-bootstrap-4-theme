<div class="col-12">
	<article class="list-article row no-gutters rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
		<div class="col-12 col-lg-5">
			<?php 
				has_post_thumbnail() ?
					printf('<img class="img-cover" src="%1$s" alt="%2$s">', get_the_post_thumbnail_url(), get_the_title() ) : 
					printf( '<img class="img-cover" src="%1$s/assets/img/placeholder-header.jpg" alt="%2$s">', get_template_directory_uri(), get_the_title() );		
			?>
		</div>
		<div class="col-12 col-lg-7 p-4 d-flex flex-column position-static">
			<h3 class="mb-0"><?php the_title(); ?></h3>
			<div class="mb-1 post-data">
				<i class="far fa-calendar-alt"></i> <?php the_time( get_option( 'date_format' ) ); ?>
			</div>
			<div class="my-3 post-description">
				<?php echo get_the_excerpt(); ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="btn-rounded stretched-link">Continue lendo</a>
		</div>
	</article>
</div>