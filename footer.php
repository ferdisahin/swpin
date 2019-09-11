    <!-- FOOTER START -->
    <footer id="footer">
        <div class="container-fluid">          
            <!-- Menu Start -->
            <?php
                wp_nav_menu([
                    'menu'            => 'footer-menu',
                    'theme_location'  => 'footer-menu',
                    'container'       => false,
                    'container_id'    => false,
                    'container_class' => false,
                    'menu_id'         => false,
                    'menu_class'      => 'nav menu',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]);
            ?>                
            <!-- Menu End -->

            <!-- Copyright Start -->
            <p class="copyright"><?php echo !empty(get_theme_mod('copyright_text')) ? get_theme_mod('copyright_text') : '&copy; Copyright 2019 - All Rights Reserved' ?></p>
            <!-- Copyright End -->
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- Scripts Start -->
    <?php wp_footer() ?>
</body>
</html>