<?php
// Include your functions files here
include('inc/enqueues.php');
// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
    global $wp_version;
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    // let wordpress manage the title
    add_theme_support( 'title-tag' );
    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
    // Automatic feed links compatibility
    if( version_compare( $wp_version, '3.0', '>=' ) ) {
        add_theme_support( 'automatic-feed-links' );
    } else {
        automatic_feed_links();
    }
}
add_action( 'after_setup_theme', 'customThemeSupport' );
// Content width
if( !isset( $content_width ) ) {
    // @TODO : edit the value for your own specifications
    $content_width = 960;
}

require_once get_template_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';
require_once get_template_directory() . '/inc/custom-fields/settings-meta.php';
require_once get_template_directory() . '/inc/custom-fields/post-meta.php';
require_once get_template_directory() . '/inc/custom-fields/pages-meta.php';
require_once get_template_directory() . '/inc/TGM/example.php';


register_nav_menus( array(
  'head_menu' => 'Головне меню у шапці',
  'aboutus_menu' => 'Меню про нас',
  'news_menu' => 'Меню НОВИНИ',
  'footer_menu' => 'Меню у футері',
) );

function addAdminEditorStyle() {
    add_editor_style( get_stylesheet_directory_uri() . 'css/editor-style.css' );
};
// подключаем файлы со стилями
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'editor-style', get_stylesheet_directory_uri() . '/css/style.css', false, time() );
    wp_enqueue_style( 'jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css', false, time() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', '','',true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js','','',true);
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.min.js','','',true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', '','',true);
    wp_register_script( 'loadmore_rada', get_stylesheet_directory_uri() . '/js/loadmore_rada.js', array('jquery'), true );
    wp_localize_script( 'loadmore_rada', 'loadmore_params_rada', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $custom_query_member_rada->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'total' => $custom_query_member_rada->max_num_pages
    ), true );
    wp_enqueue_script( 'loadmore_rada' );

    wp_register_script( 'loadmore_team', get_stylesheet_directory_uri() . '/js/loadmore_team.js', array('jquery'), true );
    wp_localize_script( 'loadmore_team', 'loadmore_params_team', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $custom_query_member_team->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'total' => $custom_query_member_team->max_num_pages
    ), true );
    wp_enqueue_script( 'loadmore_team' );
};

//подключаем стили к админке
function load_custom_wp_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function loadmore_rada_ajax_handler(){
  // prepare our arguments for the query
  $args = json_decode( stripslashes( $_POST['query'] ), true );
  $args['paged'] = $_POST['page'] + 1; 
  $args['post_status'] = 'publish';
  $args['post_type'] = 'members';
  query_posts( $args );
  $custom_query_member_rada = new WP_Query( array( 'post_type' => 'members', 'posts_per_page' => 6, 'paged' => $args['paged'], 'orderby' => 'menu_order', 'order' => 'ASC', 'meta_query' => array(array( 'key'     => 'crb_members_rada', 'value'   => 'no', 'compare' => '=')) ) );
  if ($custom_query_member_rada->have_posts()) : while ($custom_query_member_rada->have_posts()) : $custom_query_member_rada->the_post();
    echo '<div class="col-md-4 p_about__member-rada">';
    get_template_part( 'blocks/about/about-member' );
    echo '</div>';
  endwhile; 
  endif;
  die;
}

add_action('wp_ajax_loadmore_rada', 'loadmore_rada_ajax_handler'); 
add_action('wp_ajax_nopriv_loadmore_rada', 'loadmore_rada_ajax_handler');

function loadmore_team_ajax_handler(){
  // prepare our arguments for the query
  $args = json_decode( stripslashes( $_POST['query'] ), true );
  $args['paged'] = $_POST['page'] + 1; 
  $args['post_type'] = 'members';
  query_posts( $args );
  $custom_query_member_team = new WP_Query( array( 'post_type' => 'members', 'posts_per_page' => 6, 'paged' => $args['paged'], 'orderby' => 'menu_order', 'order' => 'ASC' ) );
  if ($custom_query_member_team->have_posts()) : while ($custom_query_member_team->have_posts()) : $custom_query_member_team->the_post();
    echo '<div class="col-md-4 p_about__member-team">';
    get_template_part( 'blocks/about/about-member' );
    echo '</div>';
  endwhile; 
  endif;
  die;
}

add_action('wp_ajax_loadmore_team', 'loadmore_team_ajax_handler'); 
add_action('wp_ajax_nopriv_loadmore_team', 'loadmore_team_ajax_handler');

function create_post_type() {
    register_post_type( 'news',
        array(
            'labels' => array(
                'name' => __( 'Новини' ),
                'singular_name' => __( 'Новина' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
    register_post_type( 'blogs',
        array(
            'labels' => array(
                'name' => __( 'Блог' ),
                'singular_name' => __( 'Блог' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Проекти' ),
                'singular_name' => __( 'Проект' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
    register_post_type( 'members',
        array(
            'labels' => array(
                'name' => __( 'Учасники' ),
                'singular_name' => __( 'Учасник' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
    register_post_type( 'ad',
        array(
            'labels' => array(
                'name' => __( 'Анонси' ),
                'singular_name' => __( 'Анонс' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
    register_post_type( 'reports',
        array(
            'labels' => array(
                'name' => __( 'Звіти' ),
                'singular_name' => __( 'Звіт' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
}
add_action( 'init', 'create_post_type' ); 

function my_custom_upload_mimes($mimes = array()) {
    $mimes['xls'] = "application/excel";
    return $mimes;
}
add_action('upload_mimes', 'my_custom_upload_mimes');

function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url(<?php bloginfo('template_url') ?>/img/logo.png);
      width: 100%;
      height: 53px;
      background-size: auto;
      padding: 20px 0px;
      background-position: center;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );