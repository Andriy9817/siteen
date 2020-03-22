<?php
    add_action('wp_enqueue_scripts', 'siteen_scripts');


    function siteen_scripts(){
        wp_enqueue_style( 'siteen-style', get_stylesheet_uri() );

        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, false );
        wp_enqueue_script( 'siteen-scripts', get_template_directory_uri() . '/assets/js/script.js', (''), null, true);
        wp_enqueue_script( 'siteen-scripts-preloader', get_template_directory_uri() . '/assets/js/preloader.js', (''), null, true);
        


    
    }
    
    add_theme_support( 'custom-logo' );
?>