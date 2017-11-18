<?php
// Private Taxonomie
function interne_hinweise() {

	$labels = array(
		'name'                       => _x( 'Interne Hinweise', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Interner Hinweis', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Hinweise', 'text_domain' ),
		'all_items'                  => __( 'Alle Hinweise', 'text_domain' ),
		'parent_item'                => __( 'Übergeordneter Hinweis', 'text_domain' ),
		'parent_item_colon'          => __( 'Übergeordneter Hinweis:', 'text_domain' ),
		'new_item_name'              => __( 'Neuer Hinweis', 'text_domain' ),
		'add_new_item'               => __( 'Neuen Hinweis hinzufügen', 'text_domain' ),
		'edit_item'                  => __( 'Hinweis bearbeiten', 'text_domain' ),
		'update_item'                => __( 'Hinweis aktualisieren', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Trenne Hinweise mit Kommata', 'text_domain' ),
		'add_or_remove_items'        => __( 'Hinwiese entfernen oder zufügen', 'text_domain' ),
		'choose_from_most_used'      => __( 'Wähle aus häufigen Hinweisen', 'text_domain' ),
		'popular_items'              => __( 'Häufige Hinweise', 'text_domain' ),
		'search_items'               => __( 'Durchsuche Hinweise', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'rewrite'                    => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'hinweise', array( 'post' ), $args );

}
add_action( 'init', 'interne_hinweise', 0 );
?>
