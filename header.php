<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <!-- HEADER START -->
    <header id="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url()) ?>"><?php bloginfo('name') ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                        wp_nav_menu([
                            'menu'            => 'header-menu',
                            'theme_location'  => 'header-menu',
                            'container'       => false,
                            'container_id'    => false,
                            'container_class' => false,
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav ml-auto',
                            'depth'           => 2,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                        ]);
                    ?>                    
                    <form class="form-inline search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input class="form-control mr-sm-2" type="search" name="s" id="s" placeholder="<?php echo !empty(get_theme_mod('search_text')) ? get_theme_mod('search_text') : 'Search...' ?>" aria-label="Search">
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <!-- HEADER END -->

    <?php if(!is_404() && true == get_theme_mod( 'featured_switch', true )): ?>
    <!-- FEATURED POSTS START -->
    <div id="featuredposts">
        <div class="container-fluid">
            <div class="swiper-container">
                <!-- FEATURED POSTS TITLE START -->
                <div class="featuredpoststitle"><?php echo !empty(get_theme_mod('featured_text')) ? get_theme_mod('featured_text') : 'Featured <span>Posts</span>' ?></div>
                <!-- FEATURED POSTS TITLE END -->

                <!-- Left Button Start -->
                <div class="left-button"></div>
                <!-- Left Button End -->

                <!-- Left Button Start -->
                <div class="right-button"></div>
                <!-- Left Button End -->

                <div class="swiper-wrapper">
                    <?php 
                        $cat = !empty(get_theme_mod('featured_cat')) ? get_theme_mod('featured_cat') : null; 
                        $args = array(
                            'cat'   => $cat,
                            'posts_per_page' => 10,
                        );
                        $the_query = new WP_Query($args);
                        if($the_query->have_posts()):
                            while($the_query->have_posts()): $the_query->the_post();
                    ?>
                    <!-- Post Start -->
                    <div class="swiper-slide post" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>')">
                        <!-- Post Meta Start -->
                        <div class="post-meta">
                            <!-- Post Category Start -->
                            <?php echo first_cat() ?>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <a href="<?php the_permalink() ?>" class="post-title"><?php the_title() ?></a>
                            <!-- Post Title End -->
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post End -->
                    <?php endwhile; endif; wp_reset_postdata(); ?>                                                                                  
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURED POSTS END -->
    <?php endif ?>