<?php get_header(); ?>
<div class="container">
   <div class="row">
        <div class="col-lg-8 col-sm-8">
        <h1 class="page-title"><?php _e('Blog') ?></h1>
        <hr/>
         <?php if(have_posts()): ?>
           <?php while(have_posts()) : the_post() ?>
             <?php if(has_post_thumbnail()): ?>
             <div class="page-image">
               <?php the_post_thumbnail() ?>
             </div>
              <hr/>
           <?php endif; ?>
            <div class="body-content" style="background-color:#fff;border:0px;">
                 <h4>
                    <a href="<?php the_permalink() ?>" style="color:#fff;text-decoration:none;cursor:pointer">
                      <?php the_title() ?>
                    </a>
                 </h4>
               <p><?php the_excerpt(); ?></p>
            </div>
            <?php endwhile ?>
            <?php else: ?>
           <h3><?php __('No Posts Found')?></h3>
         <?php endif; ?>
        </div>
        <div class="col-lg-4 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>