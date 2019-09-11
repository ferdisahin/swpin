<?php get_header() ?>

    <?php if(get_theme_mod('header_ad')): ?>
    <!-- AD AREA START -->
    <div id="aa">
        <div class="container-fluid d-flex justify-content-center">
            <?php echo get_theme_mod('header_ad') ?>
        </div>
    </div>
    <!-- AD AREA END -->
    <?php endif ?>

    <?php while(have_posts()): the_post(); ?>
    <!-- MAIN START -->
    <main id="main">
        <div class="container">
            <!-- Bg Start -->
            <div class="page-bg">
                <?php if(true == get_theme_mod('thumbnail_switch', true)): ?>
                <!-- Post Thumbnail Start -->
                <div class="post-thumbnail" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>')"></div>
                <!-- Post Thumbnail End -->
                <?php endif ?>

                <!-- Post Header Start -->
                <div class="post-header">
                    <!-- Post Title Start -->
                    <div class="post-title" <?php if(!true == get_theme_mod('thumbnail_switch', true)): echo 'style="margin-top:0"'; endif; ?>><?php the_title() ?></div>
                    <!-- Post Title End -->

                    <!-- Post Meta Start -->
                    <div class="post-meta">
                        <?php if ( true == get_theme_mod( 'author_switch', true ) ) : ?>
                        <!-- Post Author Start -->
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="post-author">
                            <!-- Author Avatar Start -->
                            <div class="author-avatar" style="background: url('<?php echo get_avatar_url( get_the_author_email(), '60' ); ?>')"></div>
                            <!-- Author Avatar End -->

                            <!-- Author Name Start -->
                            <div class="author-name"><?php the_author(); ?></div>
                            <!-- Author Name End -->
                        </a>
                        <!-- Post Author End -->
                        <?php endif ?>

                        <!-- Post Category List Start -->
                        <div class="post-category-list">
                            <?php 
                                $categories = get_the_category();
                                foreach( $categories as $category) {
                                    $name = $category->name;
                                    $category_link = get_category_link( $category->term_id );

                                    echo "<a class='category' href='$category_link'>". esc_attr( $name) ."</a>";
                                }                            
                            ?>
                        </div>
                        <!-- Post Category List End -->

                        <!-- Post Date Start -->
                        <div class="post-date"><?php the_time('j F Y') ?></div>
                        <!-- Post Date End -->
                    </div>
                    <!-- Post Meta End -->
                </div>
                <!-- Post Header End -->

                <?php if(get_theme_mod('post_top_ad')): ?>
                <!-- Post Header Ad Start -->
                <div class="post-header-a text-center">
                    <?php echo get_theme_mod('post_top_ad') ?>
                </div>
                <!-- Post Header Ad End -->
                <?php endif ?>

                <!-- Post Content Start -->
                <div class="post-content">
                    <?php the_content() ?>
                </div>
                <!-- Post Content End -->

                <?php if(get_theme_mod('post_bottom_ad')): ?>
                <!-- Post Footer Ad Start -->
                <div class="post-footer-a text-center">
                    <?php echo get_theme_mod('post_bottom_ad') ?>
                </div>
                <!-- Post Footer Ad End -->
                <?php endif ?>

                <?php 
                    $post_tags = get_the_tags();
                    if($post_tags):
                ?>
                <!-- Post Footer Start -->
                <div class="post-footer">
                    <!-- Post Tags Start -->
                    <?php 
                        $post_tags = get_the_tags();
                            echo '<div class="post-tags">';
                            foreach( $post_tags as $tag ) {
                            echo '<a href="'.get_tag_link($tag->term_id).'" class="tag">'.$tag->name.'</a>'; 
                            }
                            echo '</div>';                 
                    ?>
                    <!-- Post Tags End -->
                </div>
                <!-- Footer End -->
                <?php endif ?>
            </div>
            <!-- Bg End -->
        </div>
    </main>
    <!-- MAIN END -->
    <?php endwhile; ?>

    <?php if ( true == get_theme_mod( 'related_switch', true ) ) : ?>
    <!-- POSTS START -->
    <div id="posts" class="mt-5">
        <div class="container-fluid">
            <!-- Grid List Start -->
            <div class="grid-list">
                <?php 
                $related = new WP_Query(
                    array(
                        'category__in'   => wp_get_post_categories( $post->ID ),
                        'posts_per_page' => 12,
                        'post__not_in'   => array( $post->ID )
                    )
                );
                if( $related->have_posts() ) { 
                while( $related->have_posts() ) { 
                $related->the_post();
                ?>
                <!-- Grid Item Start -->
                <?php get_template_part('mvc/template-parts/post/content') ?>
                <!-- Grid Item End -->
                <?php 
                    }
                    wp_reset_postdata();
                    }	
                ?>                                                     
            </div>
            <!-- Grid List End -->
        </div>
    </div>
    <!-- POSTS END --> 
    <?php endif ?>

<?php get_footer() ?>