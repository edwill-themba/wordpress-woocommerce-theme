<?php get_header(); ?>
<style>
.hero{
  background:url(<?php echo get_theme_mod('hero_background_image',get_bloginfo('template_directory').'/images/hero.jpg'); ?>) no-repeat center center;
}
</style>
<div class="hero">
   <h1><?php echo get_theme_mod('Heading', 'GET FIT WITH US') ?></h1>
   <h6><?php echo get_theme_mod( 'slogan','We Fuel Athletes And Individuals Safely') ?></h6>
   <a href="<?php echo get_theme_mod('button_url','http://localhost/wordpress/shop/') ?>" class="btn btn-warning btn-lg" style="font-family:Roboto;color:#111;font-weight:700">
      <?php echo get_theme_mod( 'button_text','Shop With Us') ?>
   </a>
   <p>contact us on<span><i class="fas fa-phone icons"></i>&nbsp;&nbsp;<?php echo get_theme_mod('tel','(013) 712 4642') ?></span>
      or email us on<span><i class="fas fa-envelope icons"></i>&nbsp;&nbsp;<?php echo get_theme_mod('email','info@met-powders.co.za') ?></span>
   </p>
</div>
<div>
     <div class="container">
         <?php if(is_active_sidebar('front_sidebar')): ?>
              <div class="latest-product">
                <?php dynamic_sidebar('front_sidebar') ?>
              </div>
         <?php endif; ?>
         <div class="body-content">
             <h4><?php echo get_theme_mod('body_content_heading','Fitness Information') ?></h4>
             <p>
               <?php
                    echo get_theme_mod('content',
                    ' Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Corrupti necessitatibus adipisci dicta ratione iure harum dolore
                    eligendi amet! Provident dignissimos doloremque harum obcaecati nesciunt nemo
                    officia inventore ea velit nostrum!Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Eligendi minima vero veritatis. Dignissimos laborum qui 
                    voluptates alias! Optio, sequi nihil beatae minima voluptas praesentium quo a eaque cum doloribus totam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere odio cumque earum quaerat nesciunt ab quis ullam voluptatem minus, 
                    quos dolores laudantium adipisci repudiandae eaque necessitatibus eos perferendis quae. Hic?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aliquid laborum, explicabo rem iste animi maxime doloremque culpa quam odio tenetur
                     quidem consectetur dolor officiis dolores facilis dolorem? Iure, quaerat?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sunt rerum fugiat accusantium eos voluptates alias tenetur quidem laudantium 
                     tempore vero modi, blanditiis reprehenderit. Delectus odit dignissimos unde doloremque laborum!'
                    
                    )
                ?>
             </p>
         </div>
         <div class="social-media">
           <h4>Follow Us On Social Media</h4>
             <ul class="social-media-bar">
               <li><img src="<?php bloginfo('template_directory') ?>/images/calendar.png" ></li>
               <li><img src="<?php bloginfo('template_directory') ?>/images/contact.png" ></li>
               <li><img src="<?php bloginfo('template_directory') ?>/images/facebook.png" ></li>
               <li><img src="<?php bloginfo('template_directory') ?>/images/instagram.png" ></li>
               <li><img src="<?php bloginfo('template_directory') ?>/images/linkedin.png" ></li>
               <li><img src="<?php bloginfo('template_directory') ?>/images/newsletter.png" ></li>
               <li><img src="<?php bloginfo('template_directory') ?>/images/twitter.png" ></li>
             </ul>
         </div>
    </div>
  </div>
<?php get_footer(); ?>