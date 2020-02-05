<?php
add_action('init', 'create_actus_cpt');
function create_actus_cpt(){
  $post_type = "Actualites";
  $labels = array(
        'name'               => 'Actualite',
        'singular_name'      => 'Actualite',
        'all_items'          => 'Toutes les actualites',
        'add_new'            => 'Ajouter une actualite',
        'add_new_item'       => 'Ajouter une actualite',
        'edit_item'          => "Éditer une actualite",
        'new_item'           => 'Nouvelle actualite',
        'view_item'          => "Voir le actualite",
        'search_items'       => 'Rechercher une actualite',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Actualite parent',
        'menu_name'          => 'Actualites',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-video-alt3',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type( 'actualites', $args );
    $taxonomy = "actualite";
    $object_type='actualites';
    $args = array(
          'label' => 'Catégorie de actualite',
          'rewrite' => array( 'slug' => 'actualite' ),
          'hierarchical' => true,
      );
    register_taxonomy( $taxonomy, $object_type, $args );
}
?>