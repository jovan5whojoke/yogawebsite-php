<?php

$argsImagePosts = array(
    'post_status' => 'published',
    'posts_per_page' => 10,
    'category_name' => 'jb-posts',
    'orderby' => 'post_date',
    'order' => 'DESC'
);
$queryImagePosts = new WP_Query( $argsImagePosts );


$argsVideoPosts = array(
    'post_status' => 'published',
    'posts_per_page' => 10,
    'category_name' => 'jb-posts-videos',
    'orderby' => 'post_date',
    'order' => 'DESC'
);
$queryVideoPosts = new WP_Query( $argsVideoPosts );
?>

<!-- Articles -->
<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jb-articles-category-wrapper">
    <div class="container jb-articles-container">
        <div class="row content">
            <div class="col-sm-12">
                <h2 class="custom-title-articles">Browse Articles (Text)</h2>

                <?php

                // Check that we have query results.
                if ( $queryImagePosts->have_posts() ) {

                    // Start looping over the query results.
                    while ( $queryImagePosts->have_posts() ) {
                        $queryImagePosts->the_post();

                        ?>
                        <div class="loop-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="item-wrap">
                                <div class="icon">
                                    <a href="<?php echo esc_url( get_permalink()); ?>"><i class="glyphicon glyphicon-th-large"></i></a>
                                </div>
                                <div class="item-featured">
                                    <a href="<?php echo esc_url( get_permalink()); ?>" title="<?php echo get_field('post_title'); ?>">
                                        <img width="600" height="450" src="<?php echo get_field('post_image'); ?>" alt="<?php echo get_field('post_title'); ?>">
                                    </a>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title">
                                        <a href="<?php echo esc_url( get_permalink()); ?>" title=""><?php echo get_field('post_title'); ?></a>
                                    </h3>
                                    <div class="info">
                                        <span class="time"><?php echo the_modified_date(); ?></span>
                                        <span>By <em>John Doe</em></span>
                                    </div>
                                    <div class="learn-more">
                                        <a class="btn-darker" href="<?php echo esc_url( get_permalink()); ?>" title="<?php echo get_field('post_title'); ?>">Read more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
</article>


<!-- Articles -->
<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jb-articles-category-wrapper">
    <div class="container jb-articles-container">
        <div class="row content">
            <div class="col-sm-12">
                <h2 class="custom-title-articles">Browse Articles (Text+Video)</h2>

                <?php

                // Check that we have query results.
                if ( $queryVideoPosts->have_posts() ) {

                    // Start looping over the query results.
                    while ( $queryVideoPosts->have_posts() ) {
                        $queryVideoPosts->the_post();

                        ?>
                        <div class="loop-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="item-wrap">
                                <div class="icon">
                                    <a href="<?php echo esc_url( get_permalink()); ?>"><i class="glyphicon glyphicon-play-circle"></i></a>
                                </div>
                                <div class="item-featured">
                                    <a href="<?php echo esc_url( get_permalink()); ?>" title="<?php echo get_field('post_title'); ?>">
                                        <img width="600" height="450" src="<?php echo get_field('post_image'); ?>" alt="<?php echo get_field('post_title'); ?>">
                                    </a>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title">
                                        <a href="<?php echo esc_url( get_permalink()); ?>" title=""><?php echo get_field('post_title'); ?></a>
                                    </h3>
                                    <div class="info">
                                        <span class="time"><?php echo the_modified_date(); ?></span>
                                        <span>By <em>John Doe</em></span>
                                    </div>
                                    <div class="learn-more">
                                        <a class="btn-darker" href="<?php echo esc_url( get_permalink()); ?>" title="<?php echo get_field('post_title'); ?>">Read more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
</article>