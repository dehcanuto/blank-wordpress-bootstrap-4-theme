<?php

// Define as folhas CSS do tema.
add_action( 'wp_enqueue_scripts', 'css_files' );
function css_files() {
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome.css', array(), '5.7.2', 'all');
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), 'beta-1.0.0', 'all');
}

// Define as folhas JS do tema.
add_action( 'wp_enqueue_scripts', 'js_files' );
function js_files() {
	wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.3.1', true);
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '4.3.1', true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '4.3.1', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.9', true);
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), 'beta-1.0.0', true);
}

// Adiciona uma logo ao tema com medidas prédefinidas.
add_theme_support( 'custom-logo', array(
	'height'	  => 40,
	'width'       => 150,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
function theme_prefix_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}

// Barra de busca personalizada.
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="header-searchform" action="' . home_url( '/' ) . '" >
    			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Pesquisar..."/>
			    <button type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'""><i class="fas fa-search"></i></button>
			</form>';
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

// Paginação.
function paginacao() {
	global $wp_query;
	$big = 999999999;
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_text' => '<i class="fas fa-chevron-left"></i>',
		'next_text' => '<i class="fas fa-chevron-right"></i>',
	) );
}

// Adiciona novos widgets.
if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name' => __( 'Footer Widget 1'),
			'id' => 'footer-widget-1',
			'description' => __( 'Primeiro widget do footer da esquerda para direita.'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) 
	);
	register_sidebar(
		array(
			'name' => __( 'Footer Widget 2'),
			'id' => 'footer-widget-2',
			'description' => __( 'Segundo widget do footer da esquerda para direita.'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) 
	);
	register_sidebar(
		array(
			'name' => __( 'Footer Widget 3'),
			'id' => 'footer-widget-3',
			'description' => __( 'Terceiro e último widget do footer da esquerda para direita.'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		) 
	);
}

// Funções diversas.
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
	load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
		register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
	);
}

add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) { 
		wp_enqueue_script( 'comment-reply' );
	}
}

add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'blankslate' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

function blankslate_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}

add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}