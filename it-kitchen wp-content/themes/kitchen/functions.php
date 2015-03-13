<?
/***
 *  загружаемые стили и скрипты
 **/
function load_style_script () {
    wp_enqueue_script('jquery-1.11.2.min' , get_template_directory_uri() . '/js/jquery-1.11.2.min.js');
    wp_enqueue_script('jquery.flexslider-min' , get_template_directory_uri() . '/js/jquery.flexslider-min.js');
    wp_enqueue_script('jquery.uniform.min' , get_template_directory_uri() . '/js/jquery.uniform.min.js');
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}
/***
 * загружаем стили и скрипты
 **/
add_action('wp_enqueue_scripts', 'load_style_script');

/***
 * меню
 **/
register_nav_menu('menu', 'Меню ');
register_nav_menu('menu_footer', 'Меню футер');


/***
 * слайдер
 **/
add_action('init', 'slider');
function slider() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('slider', array(
        'public' => true,
        'supports' => array('title'),
        'labels' => array(
            'name' => 'Слайдер',
            'all_items' => 'Все слайды',
            'singular_name' => 'слайд',
            'add_new' => 'Добавить слайд',
            'add_new_item' => 'Добавление нового слайда',
            'not_found' => 'Слайдов нет.'
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'menu_position' => 21
    ));
}


/***
 * услуги
 **/
add_action('init', 'equipment');
function equipment() {
    register_post_type('services', array(
        'public' => true,
        'supports' => array('title', 'editor'),
        'labels' => array(
            'name' => 'Услуги',
            'all_items' => 'Все услуги',
            'singular_name' => 'оборудование',
            'add_new' => 'Добавить услугу',
            'add_new_item' => 'Добавление новой услуги',
            'not_found' => 'Усгул нет.'
        ),
        'menu_icon' => 'dashicons-cart',
        'menu_position' => 22
    ));
}


?>