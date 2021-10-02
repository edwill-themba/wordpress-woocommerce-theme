<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class('test'); ?>>
<header>
	<nav>
		 <div class="logo">
	     <a href="<?php echo esc_url(home_url()) ?>" class="brand">
	      	<?php bloginfo('name') ?>
	     </a>
     </div>
  	<div class="navigation">
	     <?php
	        wp_nav_menu( array(
		          'menu'           => 'primary',
              'theme_location' => 'primary',
		       ));
	   	  ?>
		</div>
		<div class="toggle">
		  <input type="checkbox" class="checkbox" id="checkbox">
		    <label for="checkbox">
			   <i class="fas fa-bars bars"></i>
			   <i class="fas fa-times cancel"></i>
		   </label>
		</div>
	 </nav> 
</header>