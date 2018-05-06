<!-- Background Banner -->
<article id="masthead" class="site-header" role="banner">
    <div class="custom-header">

        <div class="custom-header-media">
            <div id="wp-custom-header" class="wp-custom-header">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/resources/images/banner.jpg" width="2000" height="1200" alt="WP project - Yoga">
            </div>
        </div>

        <div class="site-branding">
            <div class="wrap">
                <div class="site-branding-text">
                    <h1 class="site-title">
                        <a href="/" rel="home">The Bad Yogis Army</a>
                    </h1>

                    <p class="site-description">Yoga Website</p>
                </div><!-- .site-branding-text -->

                <a class="jb-menu-scroll-down">
                    <svg class="icon icon-arrow-right" aria-hidden="true" role="img">
                        <use href="#icon-arrow-right" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-right">
                            <svg id="icon-arrow-right" viewBox="0 0 43 32" width="100%" height="100%">
                                <path class="path1" d="M0.356 17.956c0.178 0.178 0.533 0.356 0.711 0.356h33.778l-10.311 10.489c-0.178 0.178-0.356 0.533-0.356 0.711 0 0.356 0.178 0.533 0.356 0.711l1.6 1.6c0.178 0.178 0.533 0.356 0.711 0.356s0.533-0.178 0.711-0.356l14.756-14.933c0.178-0.356 0.356-0.711 0.356-0.889s-0.178-0.533-0.356-0.711l-14.756-14.933c0-0.178-0.356-0.356-0.533-0.356s-0.533 0.178-0.711 0.356l-1.6 1.6c-0.178 0.178-0.356 0.533-0.356 0.711s0.178 0.533 0.356 0.711l10.311 10.489h-33.778c-0.178 0-0.533 0.178-0.711 0.356-0.356 0.178-0.533 0.356-0.533 0.711v2.311c0 0.178 0.178 0.533 0.356 0.711z"></path>
                            </svg>
                        </use>
                    </svg>
                    <span class="screen-reader-text">Scroll down to content</span>
                </a>

                <script>
                    setTimeout(function () {
                        $('.jb-menu-scroll-down').on('click', function() {
                            $('html, body').animate({
                                scrollTop: $(".jb-content-container").offset().top - 70
                            }, 1000);
                        });
                    }, 0);
                </script>
            </div><!-- .wrap -->
        </div><!-- .site-branding -->
    </div><!-- .custom-header -->
</article>