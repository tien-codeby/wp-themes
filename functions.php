<?php
/**
 * mumoiravn.com functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mumoiravn.com
 */

use JetBrains\PhpStorm\NoReturn;

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mumoiravn_com_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on mumoiravn.com, use a find and replace
        * to change 'mumoiravn-com' to the name of your theme in all the template files.
        */
    load_theme_textdomain('mumoiravn-com', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'mumoiravn-com'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'mumoiravn_com_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'mumoiravn_com_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mumoiravn_com_content_width()
{
    $GLOBALS['content_width'] = apply_filters('mumoiravn_com_content_width', 640);
}

add_action('after_setup_theme', 'mumoiravn_com_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mumoiravn_com_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'mumoiravn-com'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'mumoiravn-com'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'mumoiravn_com_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mumoiravn_com_scripts(): void
{
//    wp_register_style('mumoiravn-com-bundle', get_template_directory_uri() . '/html/bundle.min.css');
//    wp_enqueue_style('mumoiravn-com-bundle');

    wp_enqueue_style('mumoiravn-com-style', get_stylesheet_uri(), array(), _S_VERSION);
//	wp_style_add_data( 'mumoiravn-com-style', 'rtl', 'replace' );

//    wp_enqueue_style( 'mumoiravn-com-bundle', get_template_directory_uri() . '/html/bundle.min.css', array(), _S_VERSION );
    wp_enqueue_style('mumoiravn-com-bootstrap', get_template_directory_uri() . '/html/assets/css/bootstrap.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-jquery.pageslide', get_template_directory_uri() . '/html/assets/css/jquery.pageslide.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-all', get_template_directory_uri() . '/html/assets/css/all.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-ladda-themeless.min', get_template_directory_uri() . '/html/assets/css/ladda-themeless.min.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-toastr.min', get_template_directory_uri() . '/html/assets/css/toastr.min.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-jquery-confirm.min', get_template_directory_uri() . '/html/assets/css/jquery-confirm.min.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-select2-bootstrap', get_template_directory_uri() . '/html/assets/css/select2-bootstrap.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-jquery.fancybox', get_template_directory_uri() . '/html/assets/css/jquery.fancybox.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-commons', get_template_directory_uri() . '/html/assets/css/commons.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-style1', get_template_directory_uri() . '/html/assets/css/style1.css', array(), _S_VERSION);
    wp_enqueue_style('mumoiravn-com-output', get_template_directory_uri() . '/html/assets/css/output.css', array(), _S_VERSION);

    wp_enqueue_script('mumoiravn-com-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-popper', get_template_directory_uri() . '/html/assets/js/popper.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-bootstrap', get_template_directory_uri() . '/html/assets/js/bootstrap.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-commons', get_template_directory_uri() . '/html/assets/js/commons.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-commons', get_template_directory_uri() . '/html/assets/js/commons.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-spin', get_template_directory_uri() . '/html/assets/js/spin.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-ladda', get_template_directory_uri() . '/html/assets/js/ladda.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-ladda-jquery', get_template_directory_uri() . '/html/assets/js/ladda.jquery.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-jquery.fancybox', get_template_directory_uri() . '/html/assets/js/jquery.fancybox.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-fakeLoader', get_template_directory_uri() . '/html/assets/js/fakeLoader.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-jquery-confirm', get_template_directory_uri() . '/html/assets/js/jquery-confirm.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-toastr', get_template_directory_uri() . '/html/assets/js/toastr.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-jquery.validate', get_template_directory_uri() . '/html/assets/js/jquery.validate.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('mumoiravn-com-scripts', get_template_directory_uri() . '/html/assets/js/scripts.js', array(), _S_VERSION, true);

//    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', array(), _S_VERSION, true );


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'mumoiravn_com_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

require_once get_template_directory() . '/inc/custom-menu-generator.php';
require_once get_template_directory() . '/inc/custom_required/plugin_required.php';

require_once get_template_directory() . '/inc/custom_game/game_post_type.php';
require_once get_template_directory() . '/inc/custom_game/game_meta_boxes.php';
require_once get_template_directory() . '/inc/custom_game/season_taxonomy.php';
require_once get_template_directory() . '/inc/custom_game/MuTheoLoai_taxonomy.php';
require_once get_template_directory() . '/inc/custom_game/LoaiBai_taxonomy.php';
require_once get_template_directory() . '/inc/custom_game/create_action.php';
//require_once get_template_directory() . '/inc/custom_game/GameImageDefault.php';

require_once get_template_directory() . '/inc/custom_banner/banner_post_type.php';
require_once get_template_directory() . '/inc/custom_banner/banner_meta_boxes.php';
require_once get_template_directory() . '/inc/custom_banner/position_taxonomy.php';
//
//add_action('save_post', 'save_post_action', 10, 3);
//function save_post_action($post_id, $post, $update)
//{
//    if ($update && 'post' == $post->post_type) {
//        echo '<pre>';
//        var_dump(1);
//        echo '</pre>';
//        die();
//    }
//}

#[NoReturn] function send_email_after_post_ads($post_id): void
{
    echo '<pre>';
    var_dump($post_id);
    echo '</pre>';
    die();
}

add_action('after_post_ads', 'send_email_after_post_ads', 10, 3);

//add_filter( 'posts_where', 'qirolab_posts_where', 10, 2 );
//function qirolab_posts_where( $where, &$wp_query )
//{
//    global $wpdb;
//    if ( $title = $wp_query->get( 'search_title' ) ) {
//        $where .= " AND " . $wpdb->posts . ".post_title LIKE '" . esc_sql( $wpdb->esc_like( $title ) ) . "%'";
//    }
//    return $where;
//}


function after_update_game($post_ID, $post_after, $post_before): void
{
//    if($post_after->post_type == 'game' && $post_before->post_status == 'private' && $post_after->post_status == 'publish') {
    $blogusers = get_users('role=Administrator');
    foreach ($blogusers as $user) {
        $email = rwmb_get_value('email', '', $post_before->ID);
        $subject = "Bài quảng cáo đã được duyệt";
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $user->user_email . "\r\n" .
            'Content-Type: text/html; charset=UTF-8';

        $message = '<h3>Nội dung quảng cáo</h3>';
        $message .= '<br/> Tên: ' . $post_before->title;
        $message .= '<br/> Đã được duyệt';
        $sent = wp_mail($user->user_email, $subject, $message, $headers);
//            echo '<pre>';
//            var_dump($sent);
//            echo '</pre>';
//            die();
    }
//    }
}

add_action('post_updated', 'after_update_game', 10, 3);

//function add_string_to_content($content)
//{
//    $html_links = preg_replace( '!(((f|ht)tp(s)?://)[-a-zA-Z?-??-?()[email protected]:%_+.~#?&;//=]+)!i', '<a href="$1" target="_blank">$1</a>', $content );
//    return $html_links;
//}
//
//add_filter('the_content', 'add_string_to_content', 10, 1);