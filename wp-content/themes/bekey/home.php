<?php get_header(); ?>

    <main>
        <div class="container">
            <?php
            $posts_per_page = get_theme_mod('bekey_count_posts');
            $query = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => $posts_per_page,

            ));

            ?>

            <div class="row ">
                <div class="grid">
                    <?php
                    if ($query->have_posts())  : while ($query->have_posts()) : $query->the_post(); ?>

                        <?php get_template_part('template-parts/content', 'blog'); ?>

                    <?php endwhile; ?>

                    <?php else: ?>

                        <p>post not found</p>

                    <?php endif;
                    wp_reset_postdata(); ?>

                </div>
            </div>
            <div class="row">
                <div class="col justify-content-center text-center">

                    <?php
                    if ($query->max_num_pages > 1) {
                        echo '<button '
                            . 'data-post-type="post"'
                            . 'data-per-page="' . $posts_per_page . '"'
                            . 'data-current-page="1"'
                            . 'class="load-more">Load More</button>';
                    }
                    ?>
                </div>

            </div>

        </div>
    </main>

<?php get_footer(); ?>