<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    
    <?php wp_head();?>
</head>
<body>
    <!-- Header -->
    <header <?php  if(is_page("startsida")): echo 'class="start-header"'; endif;?>>
        <a class="logo" href="<?= get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
        <button aria-label="meny" id="menu-btn" aria-expanded="false" aria-controls="navmenu" onclick="togglemenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
        <nav id="navmenu" style="display: none;">
            <div class="centermenu">
                <?php
                    wp_nav_menu(array('theme_location' => 'main-nav'));
                ?>
            </div>
        </nav>
        <div class="spacer"></div>
    </header>
    <!-- End of header -->
