<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-8">
           <h1 class="page-title"><?php the_title() ?></h1>
           <hr/>
           <?php if(has_post_thumbnail()): ?>
             <div class="page-image">
               <?php the_post_thumbnail() ?>
             </div>
             <hr/>
           <?php endif; ?>
           <div class="body-content" style="background-color:#fff;border:0px;">
               <p><?php the_content(); ?></p>
           </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>