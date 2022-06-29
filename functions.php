<?php

/* Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'myfermi_setup' ) ):
    function myfermi_setup() {
        
        add_theme_support( 'title-tag' );
        
        // Enable automatic deef links
        add_theme_support( 'automatic-feed-links' );
        
        // Enable featured image
        add_theme_support( 'post-tumbnails' );

        // Custom menu areas
        register_nav_menus( array(
            'header' => esc_html__( 'Header', 'myfermi' ),
        ) );

    }
endif;
add_action( 'after_setup_theme', 'myfermi_setup' );

/* Include styles and scripts
/* ------------------------------------ */
if ( ! function_exists( 'myfermi_styles_scripts' ) ):
    function myfermi_styles_scripts() {
        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'myfermi_script', get_template_direcotry_uri() . '/js/script.js', array( 'jquery' ), '', true );
        
        wp_enqueue_style( 'myfermi-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css' );

        wp_enqueue_style( 'myfermi_style', get_template_directory_uri() . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'myfermi_styles_scripts' );

?>