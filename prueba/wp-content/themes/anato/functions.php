<?php 

function theme_scripts(){
    wp_enqueue_style('home', get_template_directory_uri().'/css/home.css');

}

    add_action('wp_enqueue_scripts', 'theme_scripts');

    if ( ! function_exists('agencias') ) {

        // Register Custom Post Type
        function agencias() {
        
            $labels = array(
                'name'                  => 'Agencias',
                'singular_name'         => 'Agencia',
                'menu_name'             => 'Agencias',
                'name_admin_bar'        => 'Agencias',
            );
            
            $args = array(
                'label'                 => 'Agencia',
                'description'           => 'Agencias',
                'labels'                => $labels,
                'supports'              => array( 'title', 'custom-fields' ),
                'hierarchical'          => false,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => true,
                'exclude_from_search'   => true,
                'publicly_queryable'    => true,
                'capability_type'       => 'page',
            );
            register_post_type( 'agencias', $args );
        
        }
        add_action( 'init', 'agencias', 0 );
        
        }


?>