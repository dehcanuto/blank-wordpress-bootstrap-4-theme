<?php get_header(); ?>
<section class="blog head-posts blog-alternative-head">
	<div class="container">
		<div class="row">
			<div class="col-12 text-left">
				<h2 class="entry-title">
					<?php printf( __( 'Resultados para: %s', 'blankslate' ), get_search_query() ); ?>
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
						<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								get_template_part( 'inc/entry/part', 'list' );
							endwhile;else :
						?>
								<div class="col-12">
									<article id="post-0" class="post no-results not-found">
										<h3 class="entry-title"><?php _e( 'Nenhum Resultado', 'blankslate' ); ?></h3>
										<p><?php _e( 'Desculpe, sua busca não retornou resultados. Tente novamente.', 'blankslate' ); ?></p>
										<?php get_search_form(); ?>
									</article>
								</div>
						<?php endif; ?>
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