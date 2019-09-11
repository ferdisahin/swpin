<?php get_header() ?>

<div id="main">
    <div class="container">
        <!-- Error Start -->
        <div class="error">
            <h1>404</h1>
            <h3><?php echo !empty(get_theme_mod('not_found_text')) ? get_theme_mod('not_found_text') : 'Page Not Found!' ?></h3>
        </div>
        <!-- Error End -->
    </div>
</div>

<?php get_footer() ?>