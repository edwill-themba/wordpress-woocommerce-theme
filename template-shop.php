<?php
/**
 * Template Name:shop-page
 */
 get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php if(have_posts()) : ?>
               <?php while(have_posts()): the_post() ?>
                   <?php the_title() ?>
                   <?php the_content() ?>
               <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>