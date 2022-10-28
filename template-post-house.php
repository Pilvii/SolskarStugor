<?php
/*
Template name: Hus till uthyrning
Template Post Type: post
*/

    get_header();
?>
    <main>
        <div class="wrapper">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                    <h1 class="post-title"><?php the_title();?></h1>
                    <div class="post">
                        <p class="price price-post"><?php echo get_post_meta($post->ID, 'price', true);?> kr / dygn</p>
                        <div class="house">
                            
                            
                                <?php the_content(); ?>
                                <!-- <a class="book" href="#">Boka</a> -->
                            
                        </div>
                    </div>



                    <?php

                    
                }
            }

            ?>
        </div>
    </main>

    <?php
    get_footer();
    ?>