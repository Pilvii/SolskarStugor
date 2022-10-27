<?php
    get_header();
?>
    <main>
        <div class="wrapper">
            <!-- <div class="breadcrumbs">
                <p>Aktiviteter > Vandring på klockefältet</p>
            </div> -->
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
                        <div class="simple-post">
                            <?php the_content(); 
                            
                            if(has_post_thumbnail()){
                                
                                the_post_thumbnail('thumbnail-big');
                                
                            }
                            if (class_exists('MultiPostThumbnails')) {
                                
                                MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'thumbnail-big',);
                                    
                            }
                            ?>
                
                            
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