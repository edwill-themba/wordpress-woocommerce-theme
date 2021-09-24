<?php
/**
 * load theme important stylesheets
 */
function wp_met_powders_load_styles()
{
   wp_register_style('main-style',get_stylesheet_directory_uri().'/style.css','','all');
   wp_enqueue_style('main-style');
   wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css','main-style','all');
   wp_enqueue_style('bootstrap');
   wp_register_style( 'font-awesome',get_template_directory_uri().'/css/all.min.css','bootstrap','all');
   wp_enqueue_style('font-awesome');
}
add_action('wp_enqueue_scripts','wp_met_powders_load_styles');

/**
 * load theme important scripts
 */
function wp_met_powders_load_scripts()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery',get_template_directory_uri().'/js/jquery-3.3.1.js', '', true);
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','jquery',true);
  wp_enqueue_script('bootstrap');
  wp_register_script('font-awesome',get_template_directory_uri().'/js/all.min.js','bootstrap', true);
  wp_enqueue_script('font-awesome');
  wp_register_script('app',get_template_directory_uri().'/js/app.js','font-awesome',true);
  wp_enqueue_script( 'app');
}
add_action('wp_enqueue_scripts','wp_met_powders_load_scripts');

/**
 *  add theme support,register navbar and enable woorcommerce 
 */
 function wp_met_powders_theme_support_setup()
 {
     //enable woocommerce
     add_theme_support('woocommerce');
     // register nav menu
     register_nav_menus( array(
       'primary' => __('Primary Menu')
      ));

  } 
 add_action('after_setup_theme','wp_met_powders_theme_support_setup');

 /**
  * creating a blog post of products on the front page
  */
  function wp_met_powders_add_products_to_front()
  {
       register_sidebar( array(
          'name '         => 'Front Sidebar',
          'id'            => 'front_sidebar',
          'before_title'  => '<h4>',
          'after_title'   => '</h4>',
          'before_widget' => '<div class="single-product">',
          'after_widget'  => '</div>'
       ));
  }
  add_action('widgets_init','wp_met_powders_add_products_to_front');

 /**
  * return number of words in a single post on the page blog
  */
  function wp_met_powders_excerpt_length()
  {
     return 80;
  }
  add_filter('excerpt_length','wp_met_powders_excerpt_length');

  /**
   * add page sidebar
   */
  function wp_met_powders_add_page_sidebar(){

    register_sidebar( array(
      'name '         => 'Page Sidebar',
      'id'            => 'page_sidebar',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
      'before_widget' => '<div class="page-sidebar">',
      'after_widget'  => '</div>'
   ));

  }
  add_action('widgets_init','wp_met_powders_add_page_sidebar');
  /**
   * add horizontal on the archive discriptionn
   */
  function wp_met_powders_add_hr_line()
  {
     echo "<hr/>";
  }
  add_action( 'woocommerce_archive_description','wp_met_powders_add_hr_line');

  add_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );

  /**
   * require the theme customize
   */
  require_once get_template_directory().'/customizer/wp_met_customizer.php';

  