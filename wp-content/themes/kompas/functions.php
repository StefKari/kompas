<?php

function insert_jquery(){

wp_enqueue_script('jquery', false, array(), false, false);

}

add_filter('wp_enqueue_scripts','insert_jquery',1);

add_theme_support( 'post-thumbnails' );

function custom_excerpt_length( $length ) {
  return 25;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//Register custom menu
function kompas_register_nav_menu()
{
    register_nav_menus(array(
        'main-menu' => __('Main menu', 'menu'),
        'social-menu' => __('Social menu', 'social flex center-all'),
    ));
}
add_action('after_setup_theme', 'kompas_register_nav_menu', 0);


//Logo
function kompas_custom_logo_setup()
{
    $defaults = array(
        'height'      => 350,
        'width'       => 120,
        'flex-height' => true,
        'flex-width'  => true,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'kompas_custom_logo_setup');


// Registracija custom post type-a "Oglasi"
function custom_post_type_oglasi() {
    $labels = array(
        'name'               => 'Oglasi',
        'singular_name'      => 'Oglas',
        'add_new'            => 'Dodaj novi',
        'add_new_item'       => 'Dodaj novi oglas',
        'edit_item'          => 'Izmeni oglas',
        'new_item'           => 'Novi oglas',
        'all_items'          => 'Svi oglasi',
        'view_item'          => 'Pregledaj oglas',
        'search_items'       => 'Pretraži oglase',
        'not_found'          => 'Nema pronađenih oglasa',
        'not_found_in_trash' => 'Nema pronađenih oglasa u smeću',
        'menu_name'          => 'Oglasi'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'oglasi' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'        => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => array( 'category' ), // Dodajte kategorije
    );
    register_post_type( 'oglasi', $args );
}
add_action( 'init', 'custom_post_type_oglasi' );

// Registracija custom taksonomije za kategorije oglasa
function custom_taxonomy_oglasi_category() {
    $labels = array(
        'name'              => 'Kategorije oglasa',
        'singular_name'     => 'Kategorija oglasa',
        'search_items'      => 'Pretraži kategorije',
        'all_items'         => 'Sve kategorije',
        'parent_item'       => 'Roditeljska kategorija',
        'parent_item_colon' => 'Roditeljska kategorija:',
        'edit_item'         => 'Izmeni kategoriju',
        'update_item'       => 'Ažuriraj kategoriju',
        'add_new_item'      => 'Dodaj novu kategoriju',
        'new_item_name'     => 'Ime nove kategorije',
        'menu_name'         => 'Kategorije oglasa',
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'oglasi-kategorija' ),
    );
    register_taxonomy( 'oglasi_category', array( 'oglasi' ), $args );
}
add_action( 'init', 'custom_taxonomy_oglasi_category' );


// Registracija custom post type-a "Projekti"
function custom_post_type_projekti() {
    $labels = array(
        'name'               => 'Projekti',
        'singular_name'      => 'Projekat',
        'add_new'            => 'Dodaj novi',
        'add_new_item'       => 'Dodaj novi projekat',
        'edit_item'          => 'Izmeni projekat',
        'new_item'           => 'Novi projekat',
        'all_items'          => 'Svi projekti',
        'view_item'          => 'Pregledaj projekat',
        'search_items'       => 'Pretraži projekte',
        'not_found'          => 'Nema pronađenih projekata',
        'not_found_in_trash' => 'Nema pronađenih projekata u smeću',
        'menu_name'          => 'Projekti'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projekti' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => array( 'projekti_category' ), // Dodajte kategorije
    );
    register_post_type( 'projekti', $args );
}
add_action( 'init', 'custom_post_type_projekti' );

// Registracija custom taksonomije za kategorije projekata
function custom_taxonomy_projekti_category() {
    $labels = array(
        'name'              => 'Kategorije projekata',
        'singular_name'     => 'Kategorija projekta',
        'search_items'      => 'Pretraži kategorije',
        'all_items'         => 'Sve kategorije',
        'parent_item'       => 'Roditeljska kategorija',
        'parent_item_colon' => 'Roditeljska kategorija:',
        'edit_item'         => 'Izmeni kategoriju',
        'update_item'       => 'Ažuriraj kategoriju',
        'add_new_item'      => 'Dodaj novu kategoriju',
        'new_item_name'     => 'Ime nove kategorije',
        'menu_name'         => 'Kategorije projekata',
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'projekti-kategorija' ),
    );
    register_taxonomy( 'projekti_category', array( 'projekti' ), $args );
}
add_action( 'init', 'custom_taxonomy_projekti_category' );


// Adding Footer
if( function_exists('acf_add_options_page') ) {

    $option_page = acf_add_options_page(array(
        'page_title'  => 'Footer',
        'menu_title'  => 'Footer',
        'menu_slug'   => 'menu',
        'capability'  => 'edit_posts',
        'redirect'  => false
    ));

}


// Remove WP Admin Bar

add_filter('show_admin_bar', '__return_false');


// Translate message
add_filter("gform_validation_message", "gwp_change_message", 10, 2);
function gwp_change_message($message, $form){
    return '
<div class="validation_error">Došlo je do greške pri popunjavanju forme. Molimo Vas da popunite sva označena obavezna polja. Hvala!
</div>
';
}