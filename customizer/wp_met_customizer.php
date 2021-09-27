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
       /** Telephone **/
       $wp_customize->add_setting('tel', array(
            'default' => '(013) 712 4642',
            'type'    => 'theme_mod'
            ));
    
           $wp_customize->add_control('tel', array(
            'label'    => __('Telephone'),
            'section'  => 'MET',
            'priority' => 6
           ));
       /** End Telephone **/
       /** Email **/
       $wp_customize->add_setting('email', array(
            'default' => 'info@met-powders.co.za',
            'type'    => 'theme_mod'
            ));
    
           $wp_customize->add_control('email', array(
            'label'    => __('Email Address'),
            'section'  => 'MET',
            'priority' => 7
           ));
       /** End email **/
       /** Body Content Heading **/
          $wp_customize->add_setting('body_content_heading', array(
            'default' => 'Fitness Information',
            'type'    => 'theme_mod'
            ));
    
           $wp_customize->add_control('body_content_heading', array(
            'label'    => __('Content Heading'),
            'section'  => 'MET',
            'priority' => 8
           ));
       /** End Body Content Heading**/
       /** Content **/
         $wp_customize->add_setting('content', array(
            'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti necessitatibus adipisci dicta ratione iure harum dolore eligendi amet! Provident dignissimos doloremque harum obcaecati nesciunt nemo officia inventore ea velit nostrum!Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'type'    => 'theme_mod'
            ));
    
           $wp_customize->add_control('content', array(
            'label'    => __('Content'),
            'section'  => 'MET',
            'priority' => 9
           ));
       /** End Content **/
 }
 add_action('customize_register','wp_met_powders_theme_customizer');