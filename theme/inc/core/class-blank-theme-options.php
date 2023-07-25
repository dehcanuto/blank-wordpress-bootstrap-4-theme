<?php
/**
 * Blank Theme Options
 *
 * @package     Blank Theme
 * @author      André Canuto
 * @copyright   Copyright (c) 2023, André Canuto
 * @link        https://andrecanuto.dev.br
 * @since       Blank Theme 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Options
 */
if ( ! class_exists( 'Blank_Theme_Options' ) ) :

	class Blank_Theme_Options {
		/**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
            add_action( 'wp_enqueue_scripts', array( $this, 'css_files' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'js_files' ) );
        }

        public function js_files() {
            wp_enqueue_script( 'jquery-3', BLANK_THEME_URI . '/assets/js/jquery.min.js', array(), '3.3.1', true);
            // wp_enqueue_script( 'popper', BLANK_THEME_URI . '/assets/js/popper.min.js', array(), '4.3.1', true);
            wp_enqueue_script( 'bootstrap', BLANK_THEME_URI . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
            wp_enqueue_script( 'slick', BLANK_THEME_URI . '/assets/js/slick.min.js', array(), '1.0.9', true);
            wp_enqueue_script( 'scripts', BLANK_THEME_URI . '/assets/js/scripts.js', array(), BLANK_THEME_VERSION, true);
        }

        public function css_files() {
            wp_enqueue_style( 'bootstrap', BLANK_THEME_STYLE . '/assets/css/bootstrap.min.css', array(), '5.3.0', 'all');
            wp_enqueue_style( 'fontawesome', BLANK_THEME_STYLE . '/assets/css/fontawesome.css', array(), '5.7.2', 'all');
            wp_enqueue_style( 'style', get_stylesheet_uri(), array(), BLANK_THEME_VERSION, 'all');
        }
    }

endif;

/**
 * Kicking this off by calling 'get_instance()' method
 */
Blank_Theme_Options::get_instance();
