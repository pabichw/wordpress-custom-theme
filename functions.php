<?php 

    function preload_scripts() {
        wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('index', get_stylesheet_directory_uri().'/styles/index.css');
        wp_enqueue_style('header', get_stylesheet_directory_uri().'/styles/header.css');
        wp_enqueue_style('footer', get_stylesheet_directory_uri().'/styles/footer.css');
        wp_enqueue_style('button', get_stylesheet_directory_uri().'/styles/button.css');
        wp_enqueue_style('boxes', get_stylesheet_directory_uri().'/styles/boxes.css');
        
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

    function about_panel_title() {
        echo '<h2>Duzo dostaniesz</h2>';
    }

    function about_panel_desc() {
        echo '<p>Nie wydasz nic albo mało, a będziesz mieć zrobione jako tako. Contra legem facit qui id facit quod lex prohibet. Fabio vel iudice vincam, sunt in culpa qui officia. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Nihil hic munitissimus habendi senatus locus, nihil horum?</p>';
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

    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
    
    add_action('wp_enqueue_scripts', 'preload_scripts');
    add_action('after_setup_theme', 'theme_init');
    add_theme_support( 'custom-logo' );
?>