<?php get_header(); ?>
<section class="blog head-posts blog-alternative-head">
	<div class="container">
		<div class="row">
			<div class="col-12 text-left">
				<h2 class="entry-title">
					<?php _e( 'Tag Archives: ', 'blankslate' ); single_tag_title(); ?>
				</h2>
			</div>
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