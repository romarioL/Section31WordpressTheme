<?php register_nav_menus(array(
   'principal' => __('menu principal', 'section31')
)); 

 if ( function_exists('register_sidebar') )
  register_sidebar(array(
  	'id' => 'sidebar',
    'name' => 'Sidebar',
    'before_widget' => '<div class = "jumbotron-sidebar animated bounceInRight">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="jumbotron-sidebar-title">',
    'after_title' => '</h3>',
  )
);


add_filter('next_posts_link_attributes', 'posts_link_attributes');
 add_filter('previous_posts_link_attributes', 'posts_link_attributes');
 function posts_link_attributes() {
 	return 'class="button-primary"';
 }


?>

