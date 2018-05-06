<?php
/**
 * Created by PhpStorm.
 * User: wwall
 * Date: 3.5.18.
 * Time: 20.06
 */

// Get page slug for template load
global $post;
$post_slug = $post->post_name;

?>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top jb-header-navigation">
        <div class="container-fluid jb-header-container">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle jb-hamburger-button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/resources/images/brand-icon.png" title="Yoga website">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                <ul class="nav navbar-nav jb-navigation-list">
                    <?php

                        if ($post_slug == 'posts') {
                        ?>
                            <li><a href="/">Home</a></li>
                            <li class="active"><a href="<?php get_template_directory(); ?>/posts">Posts</a></li>
                            <li><a href="<?php get_template_directory(); ?>/about-us">About Us</a></li>
                            <li><a href="<<?php get_template_directory(); ?>/contact">Contact Us</a></li>
                        <?php
                        } elseif ($post_slug == 'about-us') {
                        ?>
                            <li><a href="/">Home</a></li>
                            <li><a href="<?php get_template_directory(); ?>/posts">Posts</a></li>
                            <li class="active"><a href="<?php get_template_directory(); ?>/about-us">About Us</a></li>
                            <li><a href="<<?php get_template_directory(); ?>/contact">Contact Us</a></li>
                        <?php
                        } elseif ($post_slug == 'contact-us') {
                        ?>
                            <li><a href="/">Home</a></li>
                            <li><a href="<?php get_template_directory(); ?>/posts">Posts</a></li>
                            <li><a href="<?php get_template_directory(); ?>/about-us">About Us</a></li>
                            <li class="active"><a href="<<?php get_template_directory(); ?>/contact">Contact Us</a></li>
                        <?php
                        } else {
                        ?>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="<?php get_template_directory(); ?>/posts">Posts</a></li>
                            <li><a href="<?php get_template_directory(); ?>/about-us">About Us</a></li>
                            <li><a href="<<?php get_template_directory(); ?>/contact">Contact Us</a></li>
                        <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>