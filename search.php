<?php get_header() ?>

    <div class="thumb">
        <img class="thumb__img" src="<?php echo INTERNO_IMG_DIR ?>/bg-blog.jpg" alt="">
        <div class="thumb__info">
            <h2 class="title thumb__title">Search Result</h2>
            <ul class="breadcrumbs">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li>Search Result</li>
            </ul>
        </div>
    </div>
    <div class="page">
        <div class="container">
            <section class="article">
                <?php
                    $args = array(
                        'orderby' => 'date',
                        'order' => 'DESC',
                        's' => get_search_query(),
                        'post_per_page' => '6',
                        'paged' => get_query_var('paged') ?: 1
                    );

                    wp_reset_query();
                    $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : ?>
                     <h2 class="title">Search Result: <?php the_search_query(); ?></h2>
                     <div class="articles">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <article class="articles__item">
                                <div class="articles__thumb">
                                    <?php the_post_thumbnail(large); ?>
                                    <?php
                                    $posttags = get_the_tags();

                                    if ( $posttags ) {
                                        echo '<span class="articles__tag">' . $posttags[0]->name . '</span>';
                                    }
                                    ?>
                                </div>
                                <h3 class="articles__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="articles__info">
                                    <span class="articles__date"><?php echo get_the_date('j F, Y'); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="articles__link"></a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <?php
                    $wp_query = $query;

                    the_posts_pagination(
                        $args = array(
                            'show_all'     => true,
                            'prev_next'    => true,
                            'prev_text'    => __(' '),
                            'next_text'    => __(' '),
                            'type'         => 'array',
                            'class'        => 'pagination',
                        ));
                    ?>
                <?php else : ?>
                    <p>Nothing found</p>
                <?php endif; ?>
            </section>
        </div>
    </div>

<?php get_footer() ?>