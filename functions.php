<?php

if ( ! function_exists( 'prplpride_setup' ) ) :
	function prplpride_setup() {

        $args = array(
			'width'         => 500,
            'height'        => 500,
            'default-color' => '#614878',
			'default-image' => get_stylesheet_directory_uri() . '/assets/images/pattern.png',
			
		);
        add_theme_support( 'custom-background', $args );

        //remove_theme_support( 'custom-header' );
        //remove_custom_image_header();

        //wp_enqueue_style( get_template_directory_uri(). '/style.css' );
        
    }
    add_action( 'after_setup_theme', 'prplpride_setup', 11 );

    function prplpride_scripts() {
        wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'main', get_stylesheet_uri() );
        //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );

        
        
    }
    add_action( 'wp_enqueue_scripts', 'prplpride_scripts' );

endif;