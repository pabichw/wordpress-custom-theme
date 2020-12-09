<?php 

    function preload_scripts() {
        wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('index', get_stylesheet_directory_uri().'/styles/index.css');
        wp_enqueue_style('header', get_stylesheet_directory_uri().'/styles/header.css');
        wp_enqueue_style('footer', get_stylesheet_directory_uri().'/styles/footer.css');
        wp_enqueue_style('button', get_stylesheet_directory_uri().'/styles/button.css');
        wp_enqueue_style('boxes', get_stylesheet_directory_uri().'/styles/boxes.css');
        wp_enqueue_style('form', get_stylesheet_directory_uri().'/styles/form.css');
        wp_enqueue_style('cennik', get_stylesheet_directory_uri().'/styles/cennik.css');
        
        wp_enqueue_script('smooth-scroll', '/scripts/smooth-scroll.polyfills.min.js');
        
        wp_enqueue_script('aos-src', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
        wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
        
        // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        // wp_enqueue_script('parallax', '/scripts/parallax.min.js');

        wp_enqueue_script('main', get_theme_file_uri('/scripts/main.js'));
    }

    function theme_init() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
    }

    function get_images_from_media_library() {
        $args = array(
            'post_type' => 'attachment',
            'post_mime_type' =>'image',
            'post_status' => 'inherit',
            'posts_per_page' => 5,
            'orderby' => 'rand'
        );
        $query = new WP_Query( $args );
        $images = $query->posts;
        return $images;
    }

    function display_custom_logo() {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
        if ( has_custom_logo() ) {
            echo '<img src="' . $logo . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
    }

    function welcome_title() {
        if( get_option( 'page_on_front' ) ) {
            $content = apply_filters( 'the_content', get_post( get_option( 'page_on_front' ) )->post_content );
            $lines=explode("\n", $content);
            echo $lines[1];
        }
    }

    function welcome_subtitle() {
        if( get_option( 'page_on_front' ) ) {
            $content = apply_filters( 'the_content', get_post( get_option( 'page_on_front' ) )->post_content );
            $lines=explode("\n", $content);
            echo $lines[5];
        }
    }

    function main_image() {
        function is_main_img($el) {
            return property_exists($el, 'post_title') && $el->post_title == "GLOWNE";
        }
        
        $front_page = get_post( get_option( 'page_on_front' ) );
        $main_photos = wp_get_attachment_image_src( get_post_thumbnail_id($front_page->ID), 'single-page-thumbanail' );
        $main_photo_url = reset($main_photos);
        
        echo "<img src=". $main_photo_url . "\" \/>";
    }


    function about_panel_desc() {
        $page = get_page_by_title("O_NAS_LEWA_KOLUMNA", 'OBJECT', "page");

        echo $page->post_content;
    }

    function about_grid_content($num) {
        $page = get_page_by_title("O_NAS_KRATKA_$num", 'OBJECT', "page");
        echo apply_filters( 'the_content', $page->post_content );
    } 

    function about_grid_icon($num) {
        $page = get_page_by_title("O_NAS_KRATKA_$num", 'OBJECT', "page");
        $image_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-page-thumbnail' );
        $image = reset($image_arr);

        echo "<img src=$image alt='grid-icon-$page->title'/>";
    } 

    function about_article() {
        $page = get_page_by_title("O_NAS_ARTYKUL", 'OBJECT', "page");
        echo $page->post_content;
    }

    function about_article_img() {
        $page = get_page_by_title("O_NAS_ARTYKUL", 'OBJECT', "page");
        // echo $page;
        $image_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-page-thumbnail' );
        // var_dump($image_arr);
        $image = reset($image_arr);
        echo "<img src=$image alt='grid-icon-$page->title'/>";
    }

    function contact_info() {
        $page = get_page_by_title("KONTAKT", 'OBJECT', "page");
        echo $page->post_content;
    }

    function pricelist_info() {
        $page = get_page_by_title("CENNIK", 'OBJECT', "page");
        echo $page->post_content;
    }


    add_action('wp_enqueue_scripts', 'preload_scripts');
    add_action('after_setup_theme', 'theme_init');
    add_theme_support( 'custom-logo' );
?>