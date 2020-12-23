<div class="ms-item col col-sm-12 col-md-6 col-lg-4 post grid-item">
    <div class="post-image">
        <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail(); ?>
        <?php } else {
            echo '<img class="wp-post-image" src="' . get_bloginfo('template_directory') . '/assets/img/no-image.png' . '" width="180" height="180" alt="no image" />'; } ?>
    </div>
    <div class="post-date-comments">
        <time class="post-date"><?php echo get_the_date('d F, Y'); ?></time>
        <span class="post-comments"><?php comments_number('0', '1', '%'); ?> Comments</span></div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (has_excerpt()) { ?>
       <?php excerpt('40'); ?>
    <?php } ?>
</div>
