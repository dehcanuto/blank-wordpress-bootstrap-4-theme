<?php 

get_header();

?>

<section class="blog-page-single py-0 mb-0">
	<?php 
		has_post_thumbnail() ?
			printf('<div class="entry-media"><img class="img-cover" src="%1$s" alt="%2$s"></div>', get_the_post_thumbnail_url(), get_the_title() ) :
			print( '<div class="entry-media"><img class="img-cover" src="' . get_template_directory_uri() . '/assets/img/placeholder.jpg" alt="' . get_the_title() . '"></div>' );
	?>
</section>

<section class="blog-single-post bg-gray mt-0">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1 bg-white post-single">
				<div class="post-meta">
					<h2 class="title"><?php the_title(); ?></h2>
					<date><i class="far fa-calendar-alt"></i> <?php the_time('j \d\e F \d\e Y') ?></date>
				</div>
				<section class="conteudo py-0 mt-4" role="main">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; endif;
				?>
				</section>
			</div>
			<div class="col-12">
				<div class="footer text-center text-muted my-5">
					<?php get_template_part( 'nav', 'below-single' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="leia-tbm bg-grey py-5">
	<div class="container">
		<h3 class="mb-5">Leia Também</h3>
		<div class="row leia-mais-slide">
		<?php 
			$related_args = array(	'orderby' => 'rand',
									'post_type' => 'post',
									'post_in'  => get_the_tag_list(),
									'posts_per_page' => 3
								);
			$related = new WP_Query($related_args);
			
			if( $related->have_posts() ) : while( $related->have_posts() ): $related->the_post(); ?>
				<div class="col-12 col-lg-4 item">
					<div class="leia-tbm-item mb-4">
						<span class="overlay"></span>
						<div class="thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php 
									has_post_thumbnail() ?
										printf('<img class="img-cover" src="%1$s" alt="%2$s">', wp_get_attachment_url(get_post_thumbnail_id($post->ID)), get_the_title() ) :
										print( '<img class="img-cover" src="' . get_template_directory_uri() . '/assets/img/placeholder.jpg" alt="' . get_the_title() . '">' );
								?>
							</a>
						</div>
						<div class="desc">
							<div class="tm-blog-meta">
								<span><i class="far fa-clock"></i> <?php the_time( get_option( 'date_format' ) ); ?></span>
							</div>
							<h4 class="my-3">
								<a href="<?php the_permalink(); ?>">
									<?php the_title();?>
								</a>
							</h4>
							<a class="read-more" href="<?php the_permalink(); ?>">Continue lendo</a>
						</div>
					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata();?>
		</div>
	</div>
</section>

<?php 

get_template_part( 'inc/blank/part', 'newsletter' );

get_footer();

?>