<?php
    /*
    Template name: Page
    */
    get_header();
?>

<!-- Main content -->
<main>

    <!-- Landing page header and hero -->
    <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();

                    if(has_post_thumbnail()){
                        ?>
                            <div class="anchor">
                                <picture>
                                    <source media="(max-width: 700px)" sizes="1px" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w">
                                    <?php the_post_thumbnail('hero', array('class' => 'hero')); ?>
                                </picture>
                                <h1><?php the_title();?></h1>
                            </div>
                        <?php
                    }
                    else{
                        ?>
                            <h1 class="post-title"><?php the_title();?></h1>
                        <?php
                    }

                }
            }
        ?>
    <!-- end of landing page header and hero -->


    <!-- page content -->
    <div class="content">
        <?php the_content();?>
    </div>



    <!-- display related post previews -->


    <!-- Bo hos oss -->
    <?php
        if(is_page("bo-hos-oss")){
            
            query_posts('category_name=stuga');
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                    <section class="houses">
                        <h2>Stugorna</h2>
                        <div class="flex">
                            <article>
                                <?php
                                    if(has_post_thumbnail()){
                                        
                                        ?>
                                            <picture>
                                                <source media="(max-width: 700px)" srcset="<?php the_post_thumbnail_url('house-preview-small'); ?>"> 
                                                <?php the_post_thumbnail('house-preview'); ?>
                                            </picture>
                                        <?php
                                    }
                                ?>
                                <div class="text">
                                    <h3><?php the_title();?></h3>
                                    <p class="price"><?php echo get_post_meta($post->ID, 'price', true);?> / dygn</p>
                                    <?php the_excerpt();?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                </div>

                            </article>
                        </div>
                    </section>
                    <?php

                }
            }
            
        }
    ?>


    <!-- Aktiviteter -->
    <?php
        if(is_page("aktiviteter")){
            
        }
    ?>

    <!-- Nyheter -->




</main>
<!-- end of pagecontent -->


<?php
get_footer();
?>