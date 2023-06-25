<?php 

    if ( ! isset ( $content_width) ) {
        $content_width = 800;
    }    

    if ( ! function_exists( 'bwptwo_setup' ) ) {

            function bwptwo_setup() {
                bwptwo_textdomain( 'bwptwo', get_template_directory() . '/languages' );
                load_theme_textdomain( 'bwptwo', get_template_directory() . '/languages' );
                add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
                
            }
        
    }

    // add_action( 'after_setup_theme', 'bwptwo_setup' );

    function bwptwo_enqueue_style_sheet() {
        	
        wp_enqueue_style(
            'bwptwo',
            get_template_directory_uri() . '/style.css',
            array(), rand(111,9999)
            // wp_get_theme( 'bwptwo' )->get( 'Version' )
        );

    }

    add_action( 'wp_enqueue_scripts', 'bwptwo_enqueue_style_sheet' );

    // add_theme_support( 'custom-header' );

    // function enqueue_theme_images() {
    //     wp_enqueue_style('theme-images', get_stylesheet_directory_uri() . '/images/style.css');
    // }
    // add_action('wp_enqueue_scripts', 'enqueue_theme_images');
    
   




    
