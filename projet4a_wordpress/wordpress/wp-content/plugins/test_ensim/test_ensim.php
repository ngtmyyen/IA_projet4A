/**
* Plugin Name: plugin test ensim
*/
<?php 
add_action( 'init', 'voyages');
add_action( 'init', 'points_arret');
// Register Custom Post Type
if ( ! function_exists('voyages') ) {

// Register Custom Post Type
function voyages () {

	$labels = array(
		'name'                  => _x( 'voyages', 'Post Type General Name', 'a4_wordpress' ),
		'singular_name'         => _x( 'voyage', 'Post Type Singular Name', 'a4_wordpress' ),
		'menu_name'             => __( 'voyages', 'a4_wordpress' ),
		'name_admin_bar'        => __( 'voyages', 'a4_wordpress' ),
		'archives'              => __( 'archives voyages', 'a4_wordpress' ),
		'attributes'            => __( 'attributs voyages', 'a4_wordpress' ),
		'parent_item_colon'     => __( 'Parent Item:', 'a4_wordpress' ),
		'all_items'             => __( 'les voyages', 'a4_wordpress' ),
		'add_new_item'          => __( 'ajouter un voyage', 'a4_wordpress' ),
		'add_new'               => __( 'ajouter', 'a4_wordpress' ),
		'new_item'              => __( 'nouveau voyage', 'a4_wordpress' ),
		'edit_item'             => __( 'modifier un voyage', 'a4_wordpress' ),
		'update_item'           => __( 'mettre à jour un voyage', 'a4_wordpress' ),
		'view_item'             => __( 'voir un voyage', 'a4_wordpress' ),
		'view_items'            => __( 'voir des voyages', 'a4_wordpress' ),
		'search_items'          => __( 'chercher un voyage', 'a4_wordpress' ),
		'not_found'             => __( 'introuvable', 'a4_wordpress' ),
		'not_found_in_trash'    => __( 'introuvable dans la corbeille', 'a4_wordpress' ),
		'featured_image'        => __( 'Featured Image', 'a4_wordpress' ),
		'set_featured_image'    => __( 'Set featured image', 'a4_wordpress' ),
		'remove_featured_image' => __( 'Remove featured image', 'a4_wordpress' ),
		'use_featured_image'    => __( 'Use as featured image', 'a4_wordpress' ),
		'insert_into_item'      => __( 'insérer dans un voyage', 'a4_wordpress' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'a4_wordpress' ),
		'items_list'            => __( 'Items list', 'a4_wordpress' ),
		'items_list_navigation' => __( 'Items list navigation', 'a4_wordpress' ),
		'filter_items_list'     => __( 'Filter items list', 'a4_wordpress' ),
	);
	$args = array(
		'label'                 => __( 'voyage', 'a4_wordpress' ),
		'description'           => __( 'Gestion des voyages', 'a4_wordpress' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-controls-play',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'voyages', $args );

}

}

if ( ! function_exists('points_arret') ) {

// Register Custom Post Type
function points_arret() {

	$labels = array(
		'name'                  => _x( 'points', 'Post Type General Name', 'a4_wordpress' ),
		'singular_name'         => _x( 'point', 'Post Type Singular Name', 'a4_wordpress' ),
		'menu_name'             => __( 'points_arret', 'a4_wordpress' ),
		'name_admin_bar'        => __( 'points', 'a4_wordpress' ),
		'archives'              => __( 'archives points', 'a4_wordpress' ),
		'attributes'            => __( 'attributs points', 'a4_wordpress' ),
		'parent_item_colon'     => __( 'Parent Item:', 'a4_wordpress' ),
		'all_items'             => __( 'les points d\'arret', 'a4_wordpress' ),
		'add_new_item'          => __( 'ajouter un point d\'arret', 'a4_wordpress' ),
		'add_new'               => __( 'ajouter', 'a4_wordpress' ),
		'new_item'              => __( 'nouveau point d\'arret', 'a4_wordpress' ),
		'edit_item'             => __( 'modifier un point d\'arret', 'a4_wordpress' ),
		'update_item'           => __( 'mettre à jour un point d\'arret', 'a4_wordpress' ),
		'view_item'             => __( 'voir un point d\'arret', 'a4_wordpress' ),
		'view_items'            => __( 'voir des point d\'arret', 'a4_wordpress' ),
		'search_items'          => __( 'chercher un point d\'arret', 'a4_wordpress' ),
		'not_found'             => __( 'introuvable', 'a4_wordpress' ),
		'not_found_in_trash'    => __( 'introuvable dans la corbeille', 'a4_wordpress' ),
		'featured_image'        => __( 'Featured Image', 'a4_wordpress' ),
		'set_featured_image'    => __( 'Set featured image', 'a4_wordpress' ),
		'remove_featured_image' => __( 'Remove featured image', 'a4_wordpress' ),
		'use_featured_image'    => __( 'Use as featured image', 'a4_wordpress' ),
		'insert_into_item'      => __( '', 'a4_wordpress' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'a4_wordpress' ),
		'items_list'            => __( 'Items list', 'a4_wordpress' ),
		'items_list_navigation' => __( 'Items list navigation', 'a4_wordpress' ),
		'filter_items_list'     => __( 'Filter items list', 'a4_wordpress' ),
	);
	$args = array(
		'label'                 => __( 'point', 'a4_wordpress' ),
		'description'           => __( 'Gestion des points d\'arrêts', 'a4_wordpress' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-controls-play',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'points_arret', $args );

}

}


/**
 * Si inexistante, on créée la table SQL "commissions" après l'activation du thème
 */
// Runs when plugin is activated
register_activation_hook(__FILE__,'database_install'); 

// Runs when plugin is desactivated
register_deactivation_hook( __FILE__, 'database_delete' );

function database_install(){
	global $wpdb;


	$table_name = $wpdb->prefix . 'ma_table_ensim';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id int(10) NOT NULL AUTO_INCREMENT,
	 	title varchar(100),
	 	content varchar(100) NULL
	 )$charset_collate;";

     require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
     dbDelta($sql);

     
}

?>