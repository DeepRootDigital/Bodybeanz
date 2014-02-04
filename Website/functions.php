<?php
require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
require_once ( get_template_directory() . '/autocracy/system-manager.php' );
require_once ( get_template_directory() . '/autocracy/footer-manager.php' );
// Re-define meta box path and URL
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/autocracy/API/' ) );
define( 'RWMB_DIR', trailingslashit( get_template_directory(). '/autocracy/API/' ) );
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
function create_post_type() {
    register_post_type('supplement-facts', array(
        'labels' => array(
            'name' => __('Supplement Facts'),
            'singular_name' => __('Supplement Fact')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'supplement-facts'),
            )
    );
    register_post_type('Testimonials', array(
        'labels' => array(
            'name' => __('Testimonials'),
            'singular_name' => __('Testimonial')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Testimonials'),
            )
    );
    register_post_type('FAQ', array(
        'labels' => array(
            'name' => __('FAQ'),
            'singular_name' => __('FAQ')
        ),
        'public' => true,
        'has_archive' => 'FAQ',
        'rewrite' => array('slug' => 'FAQ'),
		'query_var' => true, 
        'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
		
            )
         );
    register_post_type('Products', array(
        'labels' => array(
            'name' => __('Products'),
            'singular_name' => __('Product')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Products'),
            )
    ); 
}

add_action('init', 'create_post_type');
function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
/**
 * Hooks the WP cpt_post_types filter 
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 **/
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'Products';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );

register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h3>',
  'after_title' => '</h3><img src="'.get_template_directory_uri().'/images/widget-ribbon.png">'
));
?>