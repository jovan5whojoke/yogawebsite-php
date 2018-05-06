<?php
/* Template Name: JB-Pages */

// Get page slug for template load
global $post;
$post_slug = $post->post_name;

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

        <section class="jb-main-content">

            <?php

            if ($post_slug == 'posts') {
                get_template_part( 'image-header' );
                get_template_part( 'content-posts' );
            } elseif ($post_slug == 'about-us') {
                get_template_part( 'under-construction' );
//                get_template_part( 'content-about-us' );
            } elseif ($post_slug == 'contact-us') {
                get_template_part( 'under-construction' );
//                get_template_part( 'content-contact-us' );
            } else {
                ?>

                <?php
            }
            ?>

        </section>

        <?php get_footer(); ?>

        <script src="<?php echo get_bloginfo('template_directory'); ?>/resources/js/jb.js"></script>
    </body>
</html>