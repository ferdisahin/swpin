
                <div class="grid-item post style-2">
                    <!-- Post Thumbnail Start -->
                    <a href="<?php the_permalink() ?>" class="post-thumbnail" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>')"></a>
                    <!-- Post Thumbnail End -->

                    <!-- Post Content Start -->
                    <div class="post-content">
                        <!-- Post Title Start -->
                        <a href="<?php the_permalink() ?>" class="post-title"><?php the_title() ?></a>
                        <!-- Post Title End -->
                    </div>
                    <!-- Post Content End -->

                    <!-- Post Footer Start -->
                    <div class="post-footer">
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

                        <!-- Post Category Start -->
                        <?php echo first_cat() ?>
                        <!-- Post Category End -->
                    </div>
                    <!-- Post Footer End -->
                </div>
