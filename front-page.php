<?php
    get_header();
?>
    <main>
        <!-- <div class="wrapper"> -->
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                    <div class="header-anchor">
                        <picture>
                            <source media="(max-width: 700px)" sizes="1px" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w">
                            <img class="header-img" src="<?php header_image(); ?>" alt="header">
                        </picture>
                        <h1 class="slogan"><?php bloginfo('description'); ?></h1>
                    </div>
                    <?php
                }
            }

            ?>
        <!-- </div> -->
    </main>

    <?php
    get_footer();
    ?>