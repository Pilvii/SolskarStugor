<?php
    get_header();
?>

<main>
    <?php
    if (function_exists('z_taxonomy_image')){
        ?>
            <div class="anchor">
                <picture>
                    <source media="(max-width: 700px)" sizes="1px" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w">
                    <?php z_taxonomy_image(NULL, 'hero', array('class' => 'hero')); ?>
                </picture>
                <h1>Nyheter</h1>
            </div>
        <?php
    }
    else{
        ?>
            <h1 class="post-title">Nyheter</h1>
        <?php
    }
    ?>
    <section class="news">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                        <article>
                            <?php
                            if(has_post_thumbnail()){
                                ?>
                                    <picture>
                                        <source media="(max-width: 700px)" sizes="1px" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w">
                                        <?php the_post_thumbnail('preview'); ?>
                                    </picture>
                                <?php
                            }
                            ?>
                            <div class="text">
                                <h2><?php the_title();?></h2>
                                <p class="date"><?php the_date();?></p>
                                <?php the_excerpt();?>
                                <a href="<?php the_permalink(); ?>">Läs mer<span class="sr-only"> om "<?php the_title();?>"</span></a>
                            </div>
                        </article>
                    <?php
                }
            }
        ?>
        <div class="pagination">
            <?php the_posts_pagination( array(
                'mid_size'  => 1,
                'prev_text' => __( '<i class="fa-solid fa-chevron-left"></i> Föregående sida', 'textdomain' ),
                'next_text' => __( 'Nästa sida <i class="fa-solid fa-chevron-right"></i>', 'textdomain' ),
            ) ); ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>