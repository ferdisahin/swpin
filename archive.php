<?php get_header() ?>

    <!-- POSTS START -->
    <div id="posts">
        <div class="container-fluid">
            <!-- Grid List Start -->
            <div class="grid-list">
                <?php while(have_posts()): the_post(); ?>
                <!-- Grid Item Start -->
                <?php 
                    $content_select = get_theme_mod('content_select');
                    switch($content_select){
                        case 2:
                            get_template_part('mvc/template-parts/post/content-2');
                        break;
                        default:
                            get_template_part('mvc/template-parts/post/content');
                    }
                ?>
                <!-- Grid Item End -->
                <?php endwhile ?>                                       
            </div>
            <!-- Grid List End -->
        </div>
    </div>
    <!-- POSTS END -->

<?php get_footer() ?>