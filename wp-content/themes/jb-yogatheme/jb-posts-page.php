<?php
/*
 * Template Name: JB-PostsPage
 * Template Post Type: post, page, product
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Yoga - way of life</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/resources/css/footer.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/resources/css/styles.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/resources/css/slider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/resources/css/banner.css">
    </head>
    <body>

        <?php get_template_part( 'navigation' ); ?>

        <section id="jb-posts-section" class="col-xs-12 jb-main-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 jb-post-breadcrumbs">
                        <a style=>Home</a> / Post: <?php echo get_field('post_title'); ?>
                    </div>
                    <div class="col-xs-12 col-md-12 jb-post-image">
                        <?php
                            if (get_field('post_image')) {
                                echo get_field('post_image');
                            } else {
                                get_field('post_video');
                            }
                        ?>
                        <img src="https://artyogaabundance.000webhostapp.com/wp-content/uploads/2018/05/mantra-yoga.jpg">
                    </div>
                    <div class="col-xs-12 col-md-12 jb-post-title">
                        <h3><?php echo get_field('post_title'); ?></h3>
                    </div>
                    <div class="col-xs-12 col-md-12 jb-post-short-description">
                        <?php echo get_field('post_description_short'); ?>
                        <b>Posted on:</b> <i><?php echo the_modified_date(); ?></i>
                    </div>
                    <div class="col-xs-12 col-md-12 jb-post-long-description">
                        <?php echo get_field('post_description_long'); ?>
                    </div>
                </div>
            </div>
        </section>


        <?php get_footer(); ?>

        <script src="<?php echo get_bloginfo('template_directory'); ?>/resources/js/jb.js"></script>
    </body>
</html>