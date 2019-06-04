<?php get_header(); ?>
<section class="blog head-posts blog-alternative-head">
	<div class="container">
		<div class="row">
			<div class="col-12 text-left">
				<h2 class="entry-title">
					<?php 
						if ( is_day() ) {
							printf( __( 'Arquivos do dia: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) );
						}
						elseif ( is_month() ) { 
							printf( __( 'Arquivos do mês: %s', 'blankslate' ), get_the_time( 'F Y' ) );
						}
						elseif ( is_year() ) {
							printf( __( 'Arquivos do ano: %s', 'blankslate' ), get_the_time( 'Y' ) );
						}
						else {
							_e( 'Arquivos', 'blankslate' );
						}
					?>
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