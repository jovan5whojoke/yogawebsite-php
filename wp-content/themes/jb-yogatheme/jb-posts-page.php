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
                        <a class="breadcrumbs-home"><span class="glyphicon glyphicon-home"></span> Home</a> / <a class="post-title">Post: <?php echo get_field('post_title'); ?></a>
                    </div>
                    <div class="jb-posts-left-column col-xs-9">
                        <div class="col-xs-12 col-md-12 jb-post-title">
                            <h3><?php echo get_field('post_title'); ?></h3>
                        </div>

                        <div class="col-xs-12 col-md-12 jb-post-short-description">
                            <p>
                                <span><i><?php echo the_modified_date(); ?></i></span>&nbsp;&nbsp;/&nbsp;&nbsp;
                                <span><?php echo get_field('post_description_short'); ?></span>&nbsp;&nbsp;/&nbsp;&nbsp;
                                <span>0 Comment</span>
                            </p>
                        </div>

                            <?php
                                if (get_field('post_image') && !get_field('post_video')) {
                                ?>
                                <div class="col-xs-12 col-md-12 jb-post-image">
                                    <img src="<?php echo get_field('post_image'); ?>">
                                </div>
                            <?php

                                } else {
                                    ?>
                                <div class="col-xs-12 col-md-12 jb-post-video">
                                    <div class="jb-overlay"></div>
                                    <video class="jb-video-iframe jb-hide" controls="">
                                        <source src="<?php echo get_field('post_video'); ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php
                                }
                            ?>

                        <div class="col-xs-12 col-md-12 jb-post-long-description">
                            <?php echo get_field('post_description_long'); ?>
                        </div>

                        <div id="respond" class="comment-respond col-xs-12 col-md-12">
                            <div class="jb-form-overlay">
                                <p>Under construction</p>
                            </div>
                        		<h3 id="reply-title" class="comment-reply-title">Leave a Comment

                        		</h3>
                                <form action="" method="post" id="commentform" class="comment-form">
                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label>
                                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <label for="author">Name <span class="required">*</span></label>
                                        <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                        <input type="hidden" name="comment_post_ID" value="4296" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>
                                </form>
                        </div>
                    </div>

                    <div class="jb-posts-right-column col-xs-3">
                       <div class="jb-recent-posts">
                            <h3 class="jb-recent-posts-title"><span>Recent Comments</span></h3>


                            <ul id="jb-recent-posts-post">
                                <li class="post">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                    <span class="comment-author-link">
                                        <a href="">Post Lorem Ipsum Title</a>
                                    </span>
                                </li>
                                <li class="post">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                    <span class="comment-author-link">
                                        <a href="">Post Lorem Ipsum Title</a>
                                    </span>
                                </li>
                                <li class="post">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                    <span class="comment-author-link">
                                        <a href="">Post Lorem Ipsum Title</a>
                                    </span>
                                </li>
                                <li class="post">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                    <span class="comment-author-link">
                                        <a href="">Post Lorem Ipsum Title</a>
                                    </span>
                                </li>
                                <li class="post">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                    <span class="comment-author-link">
                                        <a href="">Post Lorem Ipsum Title</a>
                                    </span>
                                </li>
                                <li class="post">
                                    <i class="glyphicon glyphicon-th-large"></i>
                                    <span class="comment-author-link">
                                        <a href="">Post Lorem Ipsum Title</a>
                                    </span>
                                </li>
                            </ul>
                       </div>
                    </div>


                </div>
            </div>
        </section>


        <?php get_footer(); ?>

        <script src="<?php echo get_bloginfo('template_directory'); ?>/resources/js/jb.js"></script>
    </body>
</html>