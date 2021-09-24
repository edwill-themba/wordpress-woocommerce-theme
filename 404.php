<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-8">
           <h1 class="page-title"><?php _e('404 Page') ?></h1>
           <hr/>
           <h3 style="font-family:Roboto;font-weight:700;"><?php _e('Sorry The page you are looking is not found'); ?></h3>
           <p style="font-family:Roboto;font-weight:700;"><?php _e('Please check spelling mistakes and an other kind of mistakes on the url') ?></p>
        </div>
        <div class="col-lg-4 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>