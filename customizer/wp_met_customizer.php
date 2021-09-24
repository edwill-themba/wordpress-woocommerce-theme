<?php
  /** customize theme **/
 function wp_met_powders_theme_customizer($wp_customize)
 {
       $wp_customize->add_section('MET',array(
            'title'        => __('MET Powders Customizer'),
            'description'  => sprintf(__('met_powders_customizer')),
            'priority'     => 30
       ));
       /** Background Image Setting  **/
       $wp_customize->add_setting('hero_background_image', array(
          'default' => get_bloginfo('template_directory').'/images/hero.jpg',
          'type'    => 'theme_mod'
       ));

       $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'hero_background_image',array(
          'label'    => __('hero background image'),
          'section'  => 'MET',
          'priority' => 1
       )));
       /** End Background Image Setting  **/
       /** MET Powders Heading **/
       $wp_customize->add_setting('Heading', array(
          'default' => 'GET FIT WITH US',
          'type'    => 'theme_mod'
       ));

       $wp_customize->add_control('Heading', array(
          'label'    => __('Heading For Showcase'),
          'section'  => 'MET',
          'priority' => 2
       ));
       /** End MET Powders Heading **/
       /** MET Powders Slogan **/
       $wp_customize->add_setting('slogan', array(
        'default' => 'We Fuel Athletes And Individuals Safely',
        'type'    => 'theme_mod'
        ));

       $wp_customize->add_control('slogan', array(
        'label'    => __('slogan'),
        'section'  => 'MET',
        'priority' => 3
       ));
       /** End Powders Slogan **/
       /** Button url **/
       $wp_customize->add_setting('button_url', array(
        'default' => 'http://localhost/wordpress/shop/',
        'type'    => 'theme_mod'
        ));

       $wp_customize->add_control('button_url', array(
        'label'    => __('change button url'),
        'section'  => 'MET',
        'priority' => 4
       ));
       /** End Button url **/
       /** Button Text **/
       $wp_customize->add_setting('button_text', array(
        'default' => 'Shop With Us',
        'type'    => 'theme_mod'
        ));

       $wp_customize->add_control('button_text', array(
        'label'    => __('change button text'),
        'section'  => 'MET',
        'priority' => 5
       ));
       /** End Button Text **/
 }
 add_action('customize_register','wp_met_powders_theme_customizer');