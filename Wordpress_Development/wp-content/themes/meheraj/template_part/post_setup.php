<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="blog_area">
    <div class="post_thumb">
        <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
    </div>
    <div class="post_details">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <p class="date"><i class="fa-solid fa-calendar-days"></i> <?php the_time('D, t F Y'); ?> <span>At</span> <i class="fa-solid fa-clock"></i> <?php the_time('h:i a'); ?> </p>
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; else : _e('No Post Found'); endif; ?>


