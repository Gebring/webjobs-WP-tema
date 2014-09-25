<?php
/*
 *	
 */
register_nav_menus( array(
	'top_menu' => ' Menu displayed at the top of the page',
) );
/*
 *	Adds thumbnail to "portfolio_post" down below.
 */
add_theme_support( 'post-thumbnails' ); 
/*
 *	CUSTOM POST TYPE CODE FOR MY BOOK REVIEWS
 */
function portfolio_post() {
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name' ),
		'singular_name'      => _x( 'Project', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Project' ),
		'add_new_item'       => __( 'Add New Project' ),
		'edit_item'          => __( 'Edit Project' ),
		'new_item'           => __( 'New Project' ),
		'all_items'          => __( 'All Projects' ),
		'view_item'          => __( 'View Project' ),
		'search_items'       => __( 'Search Projects' ),
		'not_found'          => __( 'No Projects found' ),
		'not_found_in_trash' => __( 'No Projects found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Projects',
		'rewrite'			 => false
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'All my projects that I want to showcase',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'page-attributes'),
		'has_archive'   => true,
	);
	register_post_type( 'projects', $args );
	register_taxonomy_for_object_type('category', 'projects');	
}
add_action( 'init', 'portfolio_post' );
?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'presentation-sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>