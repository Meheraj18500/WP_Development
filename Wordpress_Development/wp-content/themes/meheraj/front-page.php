<?php
// This is Theme Front Page

get_header(); ?>


<div class="slider_area">
    <div id="slider" class="owl-carousel owl-theme">
        <?php 
            query_posts('post_type=slider & post_status=publish & posts_per_page=3 & order=ASC & paged='. get_query_var('post')); 

            if(have_posts()) :
              while(have_posts()) : the_post(); 
            ?>
        <div><?php echo the_post_thumbnail('slider'); ?></div>
        <?php endwhile; endif; ?>
    </div>
</div>

<section id="service_area">
    <div class="container">
        <div class="row">
            <?php 
            query_posts('post_type=service & post_status=publish & posts_per_page=3 & order=ASC & paged='. get_query_var('post')); 

            if(have_posts()) :
              while(have_posts()) : the_post(); 
            ?>
            <div class="col-md-4">
                <div class="card">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <?php echo the_post_thumbnail('service'); ?>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>