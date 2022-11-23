<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
echo '<div class="blank-space s"></div>';
echo '<header class="position-relative pt-3 pb-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">';

echo '<div class="nav">';
echo '<div class="container-fluid">';
echo '<div class="row align-items-center">';


// echo '<div class="col-lg-2 col-md-6">';

// echo '<a id="navToggle" class="nav-toggle">';
// echo '<div>';
// echo '<div class="line-1 bg-accent"></div>';
// echo '<div class="line-2 bg-accent"></div>';
// echo '<div class="line-3 bg-accent"></div>';
// echo '</div>';
// echo '</a>';

// echo '</div>';

echo '<div class="col-md-4 col-6 text-center order-1">';
$logoText = get_field('logo_text','options');

echo wp_get_attachment_image($logoText,'full',"",['class'=>'logo-text w-100 h-auto','style'=>'max-width:275px;']);

echo '</div>';

echo '<div class="col-md-4 col-12 order-md-2 order-3">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options');
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'logo position-absolute','style'=>'top:-40px;left:50%;transform:translate(-50%, 0px);height:150px;width:150px;background:white;border-radius:50%;padding:20px;']);
}

echo '</a>';
echo '</div>';

// echo '<div class="col-lg-4 col-md-6">';
// echo '</div>';

echo '<div class="col-md-4 col-6 order-md-3 order-2">';

wp_nav_menu(array(
    'menu' => 'Contact',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
    )); 

echo '</div>';


// echo '<div class="col-lg-4 col-6 desktop-hidden">';

// echo '</div>';


echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h1">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}

echo '</a>';
echo '</div>';
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled justify-content-center mb-0'
)); 
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

echo '<section class="hero position-relative">';
$globalPlaceholderImg = get_field('global_placeholder_image','options');
if(is_page()){
if(has_post_thumbnail()){
the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}


if(is_front_page()) {
echo '<div class="text-white text-center" style="padding:250px 0;">';
// echo '<div class="position-relative">';
echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background:rgba(0,0,0,.15);"></div>';
// echo '<div class="position-relative">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<h1 class="pt-3 pb-3 mb-0 text-shadow bold">' . get_the_title() . '</h1>';

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;

echo '</div>';
echo '</div>';
echo '</div>';
// echo '</div>';
// echo '</div>';
echo '</div>';
}



if(!is_front_page()) {
echo '<div class="container pt-5 pb-5 text-white text-center">';
echo '<div class="row">';
echo '<div class="col-md-12">';
if(is_page() || !is_front_page()){
echo '<h1 class="">' . get_the_title() . '</h1>';
} elseif(is_single()){
echo '<h1 class="">' . get_single_post_title() . '</h1>';
} elseif(is_author()){
echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
} elseif(is_tag()){
echo '<h1 class="">' . get_single_tag_title() . '</h1>';
} elseif(is_category()){
echo '<h1 class="">' . get_single_cat_title() . '</h1>';
} elseif(is_archive()){
echo '<h1 class="">' . get_archive_title() . '</h1>';
}
elseif(!is_front_page() && is_home()){
echo '<h1 class="text-shadow">The Morgan Birgé Blog</h1>';
echo '<h2 class="text-shadow">Welcome to our little corner of the Internet. Kick your feet up and stay a while.</h2>';
}
echo '</div>';
echo '</div>';
echo '</div>';
}

echo '</section>';
?>