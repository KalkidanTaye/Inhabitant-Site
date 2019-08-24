<?php

//Filter stylesheet to point to minified CSS

// function inhabitant_min_css(){

//     if(file_exists(get_template_directory(). '/build/css/style.min.css' )){
//         $stylesheet_uri =  '/build/css/style.min.css';
//     }
//     return $stylesheet_uri;
// }

// add_filter('stylesheet_uri', 'inhabitant_min_css', 10, 2);

// // Adds scripts and stylesheets

function inhabitant_files() {

    wp_enqueue_script('navigation-js', get_template_directory_uri() . '/js/navigation.js', array('jquery'), 1.0, true);
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap" );
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css");
}

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds Theme support - ex: title tag

function inhabitant_features() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'inhabitant_features');

//Initialize sidebar widget

function inhabitent_sidebar_widget(){
    register_sidebar(array(
        'name' => esc_html('Sidebar'),
        'id' => 'sidebar-1',
        'description' => 'This is a nice bar',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'inhabitent_sidebar_widget');

function new_login_logo() { ?>
    <style type="text/css">
        #login h1 a {
        background-image: url('../Inhabitant/wp-content/themes/Inhabitant/assets/images/inhabitent-logo-tent.svg');
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'new_login_logo' );

//Initialize Custom Post Type: Products
function inhabitant_post_types(){
    register_post_type('products', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Products',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Products',
            'singular_name' => 'Product'

        ),
        'menu_icon' => 'dashicons-cart'
    ));
}
add_action('init', 'inhabitant_post_types');

//Custom Taxonomies 

function inhabitant_register_taxonomies(){
    register_taxonomy('product-type', 'products', array(
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Product Types',
            'singular_name' => 'Product Type'
        )
        ));
}
//Custom Taxonomies
add_action('init', 'inhabitant_register_taxonomies');



// Custom post type function
function create_posttype() {
    register_post_type( 'adventures',
        array(
            'labels' => array(
                'name' => __( 'Adventures' ),
                'singular_name' => __( 'Adventure' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'adventures'),
        )
    );
}

add_action( 'init', 'create_posttype' );


/*
* Creating a function to create Custom Post Types
*/
 
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Adventures', 'Post Type General Name', 'inhabitant' ),
            'singular_name'       => _x( 'Adventure', 'Post Type Singular Name', 'inhabitant' ),
            'menu_name'           => __( 'Adventures', 'inhabitant' ),
            'all_items'           => __( 'All Adventures', 'inhabitant' ),
            'view_item'           => __( 'View Adventure', 'inhabitant' ),
            'add_new_item'        => __( 'Add New Adventure', 'inhabitant' ),
            'add_new'             => __( 'Add New', 'inhabitant' ),
            'edit_item'           => __( 'Edit Adventure', 'inhabitant' ),
            'update_item'         => __( 'Update Adventure', 'inhabitant' ),
            'search_items'        => __( 'Search Adventure', 'inhabitant' ),
        
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'adventures', 'inhabitant' ),
            'description'         => __( 'Latest Adventures', 'inhabitant' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'adventure' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 2,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'capability_type'     => 'page',
        );
         
        // Registering Custom Post Type
        register_post_type( 'adventures', $args );
     
    }
     
    add_action( 'init', 'custom_post_type', 0 );
?>


