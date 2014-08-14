<?php
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'homepage-thumb', 290, 130, true );


register_nav_menus( array(
'menu-top' => 'Menu superior',
'menu' => 'Menu principal'
));


/* Mi jQuery */
function my_init_method() {
 if (!is_admin()) {
 wp_deregister_script( 'jquery' );
 wp_register_script( 'jquery', '/wp-content/themes/base/js/jquery.min.js');
 wp_enqueue_script( 'jquery' );
 }
}
add_action('init', 'my_init_method');



register_sidebar(array(
 'name' => 'Sidebar Home',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));
 register_sidebar(array(
 'name' => 'Sidebar Categoria',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));
 register_sidebar(array(
 'name' => 'Sidebar Pagina',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));


 register_sidebar(array(
 'name' => 'Sidebar Dos',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));

register_sidebar(array(
 'name' => 'Sidebar Categoria',
 'before_widget' => '<div class="sidebarHorizontal">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));

register_sidebar(array(
 'name' => 'Widget Footer',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));
 


?>


