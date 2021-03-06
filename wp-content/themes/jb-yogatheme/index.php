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

        <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    </head>
    <body>

        <?php get_template_part( 'navigation' ); ?>

        <?php get_template_part( 'content-index' ); ?>

        <?php get_footer(); ?>

        <script src="<?php echo get_bloginfo('template_directory'); ?>/resources/js/jb.js"></script>
    </body>
</html>