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
            
            query_posts('category_name=bo-hos-oss');
            if(have_posts()){
                ?><section class="houses">
                <h2>Stugorna</h2>
                <div class="flex">
                <?php
                while(have_posts()){
                    the_post();
                    ?>
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
                                    <p class="price"><?php echo get_post_meta($post->ID, 'price', true);?> kr / dygn</p>
                                    <?php the_excerpt();?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                </div>

                            </article>
                        
                        <?php
                        
                }
                ?></div></section><?php
            }
            
        }
    ?>


    <!-- Aktiviteter -->
    <?php
        if(is_page("aktiviteter")){
            query_posts('category_name=aktiviteter');
            if(have_posts()){
                ?><section class="activities"><?php
                while(have_posts()){
                    the_post();
                    ?>

                        <article>
                            <a href="<?php the_permalink();?>">
                                <?php if(has_post_thumbnail()){?>
                                    <picture>
                                        <source media="(max-width: 700px)" srcset="<?php the_post_thumbnail_url('activity-small'); ?>">
                                        <?php the_post_thumbnail('preview'); ?>
                                    </picture>
                                <?php } ?>
                                
                                <div class="veil"></div>
                                <p class="title-overlay"><?php the_title();?></p>
                                <p class="under"><?php the_title();?></p>
                            </a>
                        </article>

                        
                        
                        <?php
                }
                ?></section><?php
            }
        }
    ?>


    <!-- Om oss -->
    <?php
        if(is_page("om-oss")){
            query_posts('category_name=om-oss');
            if(have_posts()){
                ?>
                <section class="profiles">
                    <h2>De anställda</h2>
                    <div class="profile-flex">
                    <?php
                        while(have_posts()){
                            the_post();
                            ?>
                            <div class="profile">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail('profile'); 
                                }?>
                                <p class="name"><?php the_title(); ?></p>
                            </div>
                            <?php
                        }
                    ?>
                    </div>
                </section>
                <?php
            }
        }
    ?>


</main>
<!-- end of pagecontent -->


<?php
get_footer();
?>