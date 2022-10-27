<?php
/*
Template name: Post med sidobild
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

                <h1 class="post-title"><?php the_title(); ?></h1>

                <div class="side-grid">
                    <?php
                    if (class_exists('MultiPostThumbnails')) {
                        ?>
                        <picture>
                            <source media="(max-width: 1200px)" sizes="1px" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w">
                            <?php 
                            MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'side',  array("class"=>"side"));
                            ?>
                        </picture>
                        <?php
                    }
                    ?>
                    
                    <div class="post">
                        
                        <?php 
                            the_content();
                            the_post_thumbnail('thumbnail-big');
                        ?>
                        
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