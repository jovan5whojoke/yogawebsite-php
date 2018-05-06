<?php
/**
 * Created by Jovan Petkovic.
 * User: wwall
 * Date: 2.5.18.
 * Time: 21.42
 */

$argsImagePosts = array(
    'post_status' => 'published',
    'posts_per_page' => 4,
    'category_name' => 'jb-posts',
    'orderby' => 'post_date',
    'order' => 'DESC'
);
$queryImagePosts = new WP_Query( $argsImagePosts );


$argsVideoPosts = array(
    'post_status' => 'published',
    'posts_per_page' => 3,
    'category_name' => 'jb-posts-videos',
    'orderby' => 'post_date',
    'order' => 'DESC'
);
$queryVideoPosts = new WP_Query( $argsVideoPosts );

function the_slug($echo = true) {
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);

    do_action('after_slug', $slug);

    return $slug;
}
?>

<section class="jb-main-content">

   <?php
    get_template_part( 'image-header' );
   ?>

    <!-- Articles -->
    <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jb-content-container">
        <div class="container jb-articles-container">
            <div class="row content">
                <div class="col-sm-12">
                    <h2 class="custom-title-articles"><span class="first">Recent </span>Posts</h2>

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

    <!-- Videos -->
    <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jb-videos-container">
        <div class="container jb-video-container">
            <div class="row content">
                <div class="col-sm-12">
                    <h2 class="custom-title-videos"><span class="first">Recent </span>Videos</h2>
                    <div class="videos posts-loop slider">
                        <div class="posts-loop-content row">

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="loop-thumb">
                                    <div class="loop-thumb-wrap">
                                        <div class="loop-thumb-content">
                                            <div class="carousel slide fade">
                                                <div class="carousel-inner">

                                                    <?php
                                                    // Check that we have query results.
                                                    if ( $queryVideoPosts->have_posts() ) {
                                                        $counter = 0;
                                                        // Start looping over the query results.
                                                        while ( $queryVideoPosts->have_posts() ) {
                                                            $queryVideoPosts->the_post();
                                                            ?>

                                                            <div class="item active <?php if ($counter == 0) echo 'jb-active'; ?>">
                                                                <a class="jb-video-links" data-slide-to="<?php echo the_ID(); ?>">
                                                                    <span class="icon">
                                                                        <i class="fa fa-play"></i>
                                                                    </span>
                                                                    <?php echo get_field('post_title'); ?>
                                                                    <span class="thumbnail-content"> <?php echo get_field('post_description_short'); ?>…</span>
                                                                </a>
                                                            </div>

                                                            <?php
                                                            $counter ++;
                                                        }
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="videos-content" class="video carousel slide fade col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="carousel-inner">

                                    <?php
                                    // Check that we have query results.
                                    if ( $queryVideoPosts->have_posts() ) {
                                        $counterContent = 0;
                                        // Start looping over the query results.
                                        while ( $queryVideoPosts->have_posts() ) {
                                            $queryVideoPosts->the_post();
                                            ?>

                                            <article class="item <?php if ($counterContent == 0) echo 'active'; ?>" data-id="<?php echo the_ID(); ?>">
                                                <div class="loop-item-wrap">
                                                    <div class="loop-item-featured">
                                                        <a class="jb-video-image">
                                                            <img src="<?php echo get_field('post_image'); ?>" alt="<?php echo get_field('post_title'); ?>">
                                                        </a>
                                                        <video class="jb-video-iframe jb-hide" controls="" id="<?php if ($counterContent == 0) echo 'selected-video'; ?>">
                                                            <source src="<?php echo get_field('post_video'); ?>" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <span class="icon jb-play-button" title="Play video"><i class="fa fa-play"></i></span>
                                                        <h2 class="loop-item-title">
                                                            <a href="<?php echo esc_url( get_permalink()); ?>" title=""><?php echo get_field('post_title'); ?></a>
                                                        </h2>
                                                        <div class="loop-item-excerpt">
                                                            <p><?php echo get_field('post_description_short'); ?>…</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>

                                            <?php
                                            $counterContent ++;
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Testemonials -->
    <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jb-testemonials-container">
        <div class="container jb-articles-container">
            <div class="row content">
                <div class="col-sm-12">
                    <div class="col-md-6 col-sm-12 jb-testemonials-img-wrapper">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/resources/images/4_bw.png" alt="girl-2" class="noo-image">
                    </div>
                    <div class="col-md-6 col-sm-12 jb-testemonials-quote-wrapper">
                        <hr class="noo-gap noo-gap-150">
                        <div class="text-block">
                            <div class="testimonial-content">
                                <p class="text">And if you are to love, love as the moon loves; it does not steal the night - it only unveils the beauty of the dark.</p>
                                <p><span class="text-primary"><i>Isra al-thibeh</i></span></p>
                            </div>
                        </div>
                        <hr class="noo-gap noo-gap-150">
                    </div>
                </div>
            </div>
        </div>
    </article>

</section>