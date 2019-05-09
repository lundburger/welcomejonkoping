<?php
//Custom post type for destinations
function destination_post_type() {
	$args = array(
	
	'public' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'show_in_nav_menus' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
	'menu_position' => 5,
	'menu_icon'   => 'dashicons-location-alt',
	'can_export' => true,
	'delete_with_user' => false,
	'hierarchical' => false,
	'has_archive' => 'destinations',
	'query_var' => 'destination',
	'capability_type' => 'post',
	'map_meta_cap' => true,
	
	'rewrite' => array(
	
	'slug' => 'destination',
	'with_front' => false,
	'pages' => true,
	'feeds' => false,
	),
		
	'supports' => array(
	
	'title',
	'editor',
	'excerpt',
	'author',
	'thumbnail',
	'comments',
	'trackbacks',
	'custom-fields',
	'revisions',
	'page-attributes',
	'post-formats',
	),
		
	'taxonomies'	=> array( 'category', 'tag' ),
	'labels' => array(
		'name' => __( 'Destinations', 'destination-textdomain' ),
		'singular_name' => __( 'Destination', 'destination-textdomain' ),
		'menu_name' => __( 'Destinations', 'destination-textdomain' ),
		'name_admin_bar' => __( 'Destinations', 'destination-textdomain' ),
		'add_new' => __( 'Add New', 'destination-textdomain' ),
		'add_new_item' => __( 'Add New Destination', 'destination-textdomain' ),
		'edit_item' => __( 'Edit Destination', 'destination-textdomain' ),
		'new_item' => __( 'New Destination', 'destination-textdomain' ),
		'view_item' => __( 'View Destination', 'destination-textdomain' ),
		'search_items' => __( 'Search Destinations', 'destination-textdomain' ),
		'not_found' => __( 'No destinations found', 'destination-textdomain' ),
		'not_found_in_trash' => __( 'No destinations found in trash', 'destination-textdomain' ),
		'all_items' => __( 'All Destinations', 'destination-textdomain' ),
	
		)
	);
	
	register_post_type('destination', $args);
}
	add_action( 'init', 'destination_post_type' );





//Custom post type for food & beverages
function food_post_type() {
	$args = array(
	
	'public' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'show_in_nav_menus' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
	'menu_position' => 5,
	'menu_icon'   => 'dashicons-carrot',
	'can_export' => true,
	'delete_with_user' => false,
	'hierarchical' => false,
	'has_archive' => 'foods',
	'query_var' => 'food',
	'capability_type' => 'post',
	'map_meta_cap' => true,
	
	'rewrite' => array(
	
	'slug' => 'foods',
	'with_front' => false,
	'pages' => true,
	'feeds' => false,
	),
		
	'supports' => array(
	
	'title',
	'editor',
	'excerpt',
	'author',
	'thumbnail',
	'comments',
	'trackbacks',
	'custom-fields',
	'revisions',
	'page-attributes',
	'post-formats',
	),
		
	'taxonomies'	=> array( 'category', 'tag' ),
	'labels' => array(
		'name' => __( 'Food & Beverages', 'food-textdomain' ),
		'singular_name' => __( 'Food & Beverage', 'food-textdomain' ),
		'menu_name' => __( 'Food & Beverages', 'food-textdomain' ),
		'name_admin_bar' => __( 'Food & Beverages', 'food-textdomain' ),
		'add_new' => __( 'Add New', 'food-textdomain' ),
		'add_new_item' => __( 'Add New Food & Beverage', 'food-textdomain' ),
		'edit_item' => __( 'Edit Food & Beverage', 'food-textdomain' ),
		'new_item' => __( 'New Food & Beverage', 'food-textdomain' ),
		'view_item' => __( 'View Food & Beverage', 'food-textdomain' ),
		'search_items' => __( 'Search Food & Beverage', 'food-textdomain' ),
		'not_found' => __( 'No food & beverages found', 'food-textdomain' ),
		'not_found_in_trash' => __( 'No food & beverages found in trash', 'food-textdomain' ),
		'all_items' => __( 'All Food & Beverages', 'food-textdomain' ),
	
		)
	);
	
	register_post_type('food', $args);
}
	add_action( 'init', 'food_post_type' );




//Custom post type for activities
function activities_post_type() {
	$args = array(
	
	'public' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'show_in_nav_menus' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
	'menu_position' => 5,
	'menu_icon'   => 'dashicons-universal-access',
	'can_export' => true,
	'delete_with_user' => false,
	'hierarchical' => false,
	'has_archive' => 'activities',
	'query_var' => 'activity',
	'capability_type' => 'post',
	'map_meta_cap' => true,
	
	'rewrite' => array(
	
	'slug' => 'activity',
	'with_front' => false,
	'pages' => true,
	'feeds' => false,
	),
		
	'supports' => array(
	
	'title',
	'editor',
	'excerpt',
	'author',
	'thumbnail',
	'comments',
	'trackbacks',
	'custom-fields',
	'revisions',
	'page-attributes',
	'post-formats',
	),
		
	'taxonomies'	=> array( 'category', 'tag' ),
	'labels' => array(
		'name' => __( 'Activities', 'activity-textdomain' ),
		'singular_name' => __( 'Activity', 'activity-textdomain' ),
		'menu_name' => __( 'Activities', 'activity-textdomain' ),
		'name_admin_bar' => __( 'Activities', 'activity-textdomain' ),
		'add_new' => __( 'Add New', 'activity-textdomain' ),
		'add_new_item' => __( 'Add New Activity', 'activity-textdomain' ),
		'edit_item' => __( 'Edit Activity', 'activity-textdomain' ),
		'new_item' => __( 'New Activity', 'activity-textdomain' ),
		'view_item' => __( 'View Activity', 'activity-textdomain' ),
		'search_items' => __( 'Search Activities', 'activity-textdomain' ),
		'not_found' => __( 'No activities found', 'activity-textdomain' ),
		'not_found_in_trash' => __( 'No activities found in trash', 'activity-textdomain' ),
		'all_items' => __( 'All Activities', 'activity-textdomain' ),
	
		)
	);
	
	register_post_type('activities', $args);
}
	add_action( 'init', 'activities_post_type' );




//Register taxonomies for price
function create_price_range() {
	$labels = array(
	'name' => _x( 'Price ranges', 'Taxonomy General Name', 'welcomejonkoping' ),
	'singular_name' => _x( 'Price range', 'Taxonomy Singular Name', 'welcomejonkoping' ),
	'menu_name' => __( 'Price ranges', 'welcomejonkoping' ),
	'all_items' => _x( 'All ranges', 'welcomejonkoping' ),
	'new_item_name' => _x( 'New Range Name', 'welcomejonkoping' ),
	'add_new_item' => _x( 'Add New Price Range', 'welcomejonkoping' ),
	'edit_item' => _x( 'Edit Price Range', 'welcomejonkoping' ),
	'update_item' => _x( 'Update Price Range', 'welcomejonkoping' ),
	'add_or_remove_items' => _x( 'Add or remove Price Ranges', 'welcomejonkoping' ),
	'popular_items' => _x( 'Popular Ranges', 'welcomejonkoping' ),
	);
	
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var' => 'price_range',
	);
	
	register_taxonomy('price_range', array( 'destination', 'food', 'activities'), $args );	
}

add_action( 'init', 'create_price_range' );




//Register taxonomies for rating
function create_rating() {
	$labels = array(
	'name' => _x( 'Ratings', 'Taxonomy General Name', 'welcomejonkoping' ),
	'singular_name' => _x( 'Rating', 'Taxonomy Singular Name', 'welcomejonkoping' ),
	'menu_name' => __( 'Ratings', 'welcomejonkoping' ),
	'all_items' => _x( 'All ratings', 'welcomejonkoping' ),
	'new_item_name' => _x( 'New Rating Name', 'welcomejonkoping' ),
	'add_new_item' => _x( 'Add New Rating', 'welcomejonkoping' ),
	'edit_item' => _x( 'Edit Rating', 'welcomejonkoping' ),
	'update_item' => _x( 'Update Rating', 'welcomejonkoping' ),
	'add_or_remove_items' => _x( 'Add or remove Rating', 'welcomejonkoping' ),
	'popular_items' => _x( 'Popular Ratings', 'welcomejonkoping' ),
	);
	
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var' => 'rating',
	);
	
	register_taxonomy('rating', array( 'destination', 'food', 'activities'), $args );	
}

add_action( 'init', 'create_rating' );




//Image support
add_theme_support('post-thumbnails');
add_theme_support('post-formats');


//Image sizing
add_image_size('desktop_grid', 300, 300, true);
add_image_size('mobile_grid', 500, 500, true);
add_image_size('desktop_single', 800, 800, true);


//Register menus
function register_my_menus() {
	register_nav_menus(
		array('header-menu' => __( 'Header Menu' ),
			  'extra-menu' => __( 'Extra Menu' )));
}

add_action( 'init', 'register_my_menus' );

?>






















