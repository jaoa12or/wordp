
<?php
register_nav_menus( array(
'menu' => 'Menu superior',
'menuFooter' => 'Menu inferior',
'menuFooter2' => 'Menu footer',
));
add_theme_support( 'post-thumbnails');
add_image_size( 'single_thumbs', 530, 290, true );
add_image_size( 'list_articles_thumbs', 650, 800, true );	
add_image_size( 'list_convenios_thumbs', 192, 143, true );	
register_sidebar(array(
 'name' => 'Sidebar',
 'before_widget' => '<section class="widget">',
 'after_widget' => '</section>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));
register_sidebar(array(
 'name' => 'Footer',
 'before_widget' => '<section class="widget">',
 'after_widget' => '</section>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));
?>