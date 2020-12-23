<?php get_header(); ?>
   <?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- No post found -->
    <p>post not found</p>
<?php endif;
; ?>
<?php get_footer(); ?>