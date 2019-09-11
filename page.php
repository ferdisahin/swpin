<?php get_header() ?>

    <?php while(have_posts()): the_post(); ?>
    <!-- MAIN START -->
    <main id="main">
        <div class="container">
            <!-- Bg Start -->
            <div class="page-bg">
                <!-- Post Header Start -->
                <div class="post-header">
                    <!-- Post Title Start -->
                    <div class="post-title"><?php the_title() ?></div>
                    <!-- Post Title End -->
                </div>
                <!-- Post Header End -->

                <!-- Post Content Start -->
                <div class="post-content">
                    <?php the_content() ?>
                </div>
                <!-- Post Content End -->

            </div>
            <!-- Bg End -->
        </div>
    </main>
    <!-- MAIN END -->
    <?php endwhile; ?>

<?php get_footer() ?>