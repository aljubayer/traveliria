<?php
/**
* functions.php, all core functions will be loaded from here
*
* @package 			Codexin
* @subpackage 		Core
* @since 			1.0
*/

// Do not allow directly accessing this file.
defined( 'ABSPATH' ) OR die( esc_html__( 'This script cannot be accessed directly.', 'traveliria' ) );


//https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyCtKdEyOrSfM5ffSGkC56heac_ttC6Zw5U

/*
 * Codexin enqueue styles and scripts.
 */

if ( ! function_exists( 'codexin_enqueue' ) ) {

    function codexin_enqueue() {

        wp_enqueue_style( 'materialize', trailingslashit( get_template_directory_uri() ) . 'assets/vendor/materialize/css/materialize.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0', 'all');
        wp_enqueue_style( 'sm-core', trailingslashit( get_template_directory_uri() ) . 'assets/vendor/smartmenus/css/sm-core-css.css' , array(), '1.1.0', 'all');
        // wp_enqueue_style( 'sm-mint', trailingslashit( get_template_directory_uri() ) . 'assets/vendor/smartmenus/css/sm-mint/sm-mint.css' , array(), '1.1.0', 'all');
        wp_enqueue_style( 'sm-simple', trailingslashit( get_template_directory_uri() ) . 'assets/vendor/smartmenus/css/sm-simple/sm-simple.css' , array(), '1.1.0', 'all');
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Assistant|Cabin|Oxygen|PT+Sans', array(), '1.0.0', 'all');

        wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0', 'all');

        wp_enqueue_script('materialize-js', trailingslashit( get_template_directory_uri() ) . 'assets/vendor/materialize/js/materialize.min.js', array('jquery'), '1.1.0', true);
        wp_enqueue_script('sm-js', trailingslashit( get_template_directory_uri() ) . 'assets/vendor/smartmenus/js/jquery.smartmenus.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('custom-js', trailingslashit( get_template_directory_uri() ) . 'assets/js/custom/custom.js', array('jquery'), '1.0.0', true);
    }

    
}
add_action('wp_enqueue_scripts', 'codexin_enqueue');

/*
 * Codexin theme supports.
 */

if ( ! function_exists( 'codexin_theme_support' ) ) {
    function codexin_theme_support() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        load_theme_textdomain( 'traveliria', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.lity/featured-images-post-thumbnails.
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1024, 700);

        

        /*
        * Enable support for post-formats
        */
        add_theme_support( 'post-formats', array(
        //    'aside',
           'gallery',
           'link',
        //    'image',
           'quote',
        //    'status',
           'video',
           'audio',
        //    'chat' 
        ) );

        
        /*
         * Switch default core markup.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        /**
         * Add support for core custom logo.
         */       
        add_theme_support( 'custom-header' );

        
        /**
         * Add support for core custom logo.
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 225,
                'width' => 190,
                'flex-width' => false,
                'flex-height' => false,
            )
        );
        /**
		 * Adding custom background support to the theme
		 */	
		add_theme_support( 'custom-background' );


        // Add image sizes
        if( function_exists( 'add_image_size' ) ) {
            add_image_size('codexin-fr-rect-one', 600, 375, true);
            add_image_size('codexin-fr-rect-two', 800, 354, true);
            add_image_size('codexin-fr-rect-three', 1170, 400, true);
            add_image_size('codexin-fr-rect-four', 800, 450, true);
        }

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles (Gutenberg). 
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images (Gutenberg).
        add_theme_support( 'align-wide' );
        
        
        // Enqueue editor styles(Gutenberg).
        add_editor_style( 'style-editor.css' );

        // Add custom editor font sizes(Gutenberg).
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name' => __('Small', 'traveliria'),
                    'shortName' => __('S', 'traveliria'),
                    'size' => 19.5,
                    'slug' => 'small',
                ),
                array(
                    'name' => __('Normal', 'traveliria'),
                    'shortName' => __('M', 'traveliria'),
                    'size' => 22,
                    'slug' => 'normal',
                ),
                array(
                    'name' => __('Large', 'traveliria'),
                    'shortName' => __('L', 'traveliria'),
                    'size' => 36.5,
                    'slug' => 'large',
                ),
                array(
                    'name' => __('Huge', 'traveliria'),
                    'shortName' => __('XL', 'traveliria'),
                    'size' => 49.5,
                    'slug' => 'huge',
                ),
            )
        );

        // Editor color palette(Gutenberg).
        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name' => __('Primary', 'traveliria'),
                    'slug' => 'primary',
                    'color' => '#333'
                ),
                array(
                    'name' => __('Secondary', 'traveliria'),
                    'slug' => 'secondary',
                    'color' => '#000'
                ),
                array(
                    'name' => __('Dark Gray', 'traveliria'),
                    'slug' => 'dark-gray',
                    'color' => '#111',
                ),
                array(
                    'name' => __('Light Gray', 'traveliria'),
                    'slug' => 'light-gray',
                    'color' => '#767676',
                ),
                array(
                    'name' => __('White', 'traveliria'),
                    'slug' => 'white',
                    'color' => '#FFF',
                ),
            )
        );

        // Add support for responsive embedded content(Gutenberg).
        add_theme_support('responsive-embeds');
    }

}
add_action( 'after_setup_theme', 'codexin_theme_support' );

/*
 * Codexin nav menu registers.
 */

if ( ! function_exists( 'codexin_nav_menu_register' ) ) {
    function codexin_nav_menu_register() {
        // This theme uses wp_nav_menu() in 4 locations.
        register_nav_menus(
            array(
                'menu-primary-main' => __('Primary', 'traveliria'),
                'menu-primary-center' => __('Primary Center', 'traveliria'),
                'footer' => __('Footer Menu', 'traveliria'),
                'social' => __('Social Links Menu', 'traveliria'),
            )
        );
    }
}
add_action( 'after_setup_theme', 'codexin_nav_menu_register' );



/**
 * Require menu file
 *
 */
require_once trailingslashit( get_template_directory() ) . 'inc/lib/menus.php';