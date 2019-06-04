<?php get_header(); ?>

<section class="blog head-posts">
	<div class="container-fluid">
		<div class="row head-posts-slide">
			<?php 	
				if ( have_posts() ) : 
					query_posts( 'showposts=3');
						while ( have_posts() ) : the_post();
							get_template_part( 'inc/entry/part', 'banner' );
						endwhile;
					wp_reset_query();
				endif;
			?>
		</div>
	</div>
</section>

<div id="wrapper" class="hfeed">
	<div id="container">
		<section id="content" role="main">
			<div class="container">
				<div class="row mb-2">
					<div class="col-12 col-lg-9">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								get_template_part( 'inc/entry/part', 'list' );
								comments_template();
								endwhile; endif;
						?>
					</div>
					<div class="col-12 col-lg-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<div class="col-12 paginacao">
					<?php get_template_part( 'nav', 'below' ); ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>