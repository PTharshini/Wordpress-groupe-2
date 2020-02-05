<?php
add_action('init', 'create_event_cpt');
function create_event_cpt(){
  $post_type = "Evenements";
  $labels = array(
        'name'               => 'Evenements',
        'singular_name'      => 'Evenement',
        'all_items'          => 'Tous les evenements',
        'add_new'            => 'Ajouter un evenement',
        'add_new_item'       => 'Ajouter un evenement',
        'edit_item'          => "Éditer un evenement",
        'new_item'           => 'Nouveau evenement',
        'view_item'          => "Voir le evenement",
        'search_items'       => 'Rechercher un evenement',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Evenement parent',
        'menu_name'          => 'Evenements',
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
    register_post_type( 'evenements', $args );
    $taxonomy = "evenement";
    $object_type='evenements';
    $args = array(
          'label' => 'Catégorie de evenement',
          'rewrite' => array( 'slug' => 'evenement' ),
          'hierarchical' => true,
      );
    
    register_taxonomy( $taxonomy, $object_type, $args );
}
?>