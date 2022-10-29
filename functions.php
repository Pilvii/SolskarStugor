<?php

//registrera menyer
add_action('init', 'register_menus');

function register_menus(){
    register_nav_menus(array(
        'main-nav' => __('Huvudmeny'),
    ));
}

//aktivera custom herobild
$args = array(
    'default-image' => get_template_directory_uri() . '/images/hero.jpg',
    'width' => 1920,
    'height' => 800,
    'uploads' => true
);
add_theme_support('custom-header', $args);



//aktivera featured image
add_theme_support('post-thumbnails');
//egna storlekar
add_image_size('hero', 1291, 417, array('center', 'center'));
add_image_size('activity-small', 322, 109, array('center', 'center'));
add_image_size('house-preview', 400, 400, array('center', 'center'));
add_image_size('house-preview-small', 375, 188, array('center', 'center'));
add_image_size('preview', 322, 322, array('center', 'center'));
add_image_size('thumbnail-big', 653, 434, array('center', 'center'));
add_image_size('side', 235, 1019, array('center', 'center'));
add_image_size('profile', 215, 215, array('center', 'center'));




//Ta bort kommentarer från wp-admin
add_action('admin_menu', 'remove_menus');

function remove_menus(){
    remove_menu_page('edit-comments.php');
}



//Skapa titlar för sidorna
add_action( 'after_setup_theme', 'add_titles' );

function add_titles(){
    add_theme_support( 'title-tag' );
}


//peka om kategori-sidor till page
// (så att breadcrums pekar rätt)
//modifierad från: https://wordpress.stackexchange.com/questions/106042/force-wordpress-to-show-pages-instead-of-category
function wpa_alter_cat_links( $termlink, $term, $taxonomy ){

    if( 'category' != $taxonomy ) return $termlink;

    //händer bara om kategorien är aktiviteter eller bo hos oss
    if(strpos($termlink, "category/aktiviteter")
    || strpos($termlink, "category/bo-hos-oss")){
        return str_replace( '/category', '', $termlink );
    }
    return $termlink;
    

}
add_filter( 'term_link', 'wpa_alter_cat_links', 10, 3 );



//aktivera multiple post thumbnails
if (class_exists('MultiPostThumbnails')) {
 
    new MultiPostThumbnails(array(
    'label' => 'Secondary Image',
    'id' => 'secondary-image',
    'post_type' => 'post'
    ) );
 
 }


 //aktivera widget area
 add_action('widgets_init', 'activate_widgets');
 
 function activate_widgets(){
 
     //info-ruta på starsidan
     register_sidebar(array(
         'name'           => 'start-info',
         'id'             => "start-info",
         'description'    => 'Inforuta på startsidan',
         'before_widget'  => '<div>',
         'after_widget'   => '</div>'
     ));
}

