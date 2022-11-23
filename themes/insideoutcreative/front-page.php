<?php get_header();

// start of intro
if(have_rows('intro_content')): while(have_rows('intro_content')): the_row();
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-lg-8 text-center">';

echo get_sub_field('content');

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of intro

// start of content section one
if(have_rows('content_section_one')): while(have_rows('content_section_one')): the_row();
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-between align-items-center">';

echo '<div class="col-lg-6">';
echo get_sub_field('content');
echo '</div>';

echo '<div class="col-lg-6 text-center">';

$img = get_sub_field('image');
echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100']);

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of content section one

// start of content section two
if(have_rows('content_section_two')): while(have_rows('content_section_two')): the_row();
echo '<section class="position-relative" style="padding:250px 0px;">';

$bgImg = get_sub_field('background_image');
echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'object-fit:cover;object-position:left;top:0;left:0;']);

echo '<div class="container">';
echo '<div class="row justify-content-end align-items-center">';
echo '<div class="col-lg-4">';

echo get_sub_field('content');

if(have_rows('list_items')): 
    $listItemsCounter = 0;
    echo '<ul class="list-unstyled" style="color:#ebdfd1;">';
    while(have_rows('list_items')): the_row();
    $listItemsCounter++;
    if($listItemsCounter == 1){
        echo '<li class="pt-2 pb-2 pl-4 pr-4 text-center position-relative list-item bold">'; 
        // echo '</li>';
    } else {
        echo '<li class="pt-2 pb-2 pl-4 pr-4 text-center position-relative mt-4 list-item bold">'; 
    }
        echo '<div class="position-absolute w-100 h-100" style="background:#27c52f;mix-blend-mode:multiply;opacity:.5;top:0;left:0;"></div>';
        echo '<span class="position-relative">' . get_sub_field('list_item') . '</span>';
        echo '</li>';
        endwhile; 
    echo '</ul>';
endif;

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of content section two

// start of content section three
if(have_rows('content_section_three')): while(have_rows('content_section_three')): the_row();
echo '<section class="position-relative" style="padding:250px 0px;">';

$bgImg = get_sub_field('background_image');
echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'object-fit:contain;object-position:right;top:0;left:0;']);

echo '<div class="container">';
echo '<div class="row justify-content-between align-items-center">';

echo '<div class="col-lg-4">';
echo get_sub_field('content');
echo '</div>';

echo '<div class="col-lg-6 text-center">';
$img = get_sub_field('image');
echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100']);
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of content section three

// start of content section four
if(have_rows('content_section_four')): while(have_rows('content_section_four')): the_row();
echo '<section class="position-relative bg-accent-tertiary pt-5 pb-5" style="">';

$img = get_sub_field('image');
echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100','style'=>'']);

echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';

echo '<div class="col-lg-8 text-center pt-5">';
echo get_sub_field('content');
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of content section four

// start of content section partners
if(have_rows('content_section_partners')): while(have_rows('content_section_partners')): the_row();
echo '<section class="position-relative" style="padding:100px 0px;">';

echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';

echo '<div class="col-lg-8 text-center pb-5">';
echo get_sub_field('content');
echo '</div>';

echo '</div>';

$gallery = get_sub_field('gallery');
if( $gallery ): 
    echo '<div class="row justify-content-center align-items-center">';
        foreach( $gallery as $image ):
        echo '<div class="col-lg-3 col-md-6 col-6 col">';
        // echo '<div class="position-relative">';
        // echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
        echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-auto'] );
        // echo '</a>';
        // echo '</div>';
        echo '</div>';
        endforeach;
    echo '</div>';
endif;

echo '</div>';
echo '</section>';
endwhile; endif;
// end of content section partners

// start of content section seven
if(have_rows('content_section_seven')): while(have_rows('content_section_seven')): the_row();
echo '<section class="pt-5 pb-5 position-relative" style="background:#ebebeb;">';
echo '<div class="container">';
echo '<div class="row justify-content-between align-items-center">';

echo '<div class="col-lg-6">';
echo get_sub_field('content');
echo '</div>';

echo '<div class="col-lg-6 text-center">';

$img = get_sub_field('image');
echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100']);

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of content section seven

// start of contact section
if(have_rows('contact_section')): while(have_rows('contact_section')): the_row();
echo '<div class="pt-5 pb-5" id="contact"></div>';

echo '<section class="pt-5 pb-5 bg-accent-quaternary position-relative z-1" style="">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 text-center text-white">';
echo '<span class="text-shadow h1 mb-0">' . get_sub_field('content_top') . '</span>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';

echo '<section class="pt-5 pb-5 position-relative z-1" style="">';
echo '<div class="position-absolute w-100" style="background:#f7f7f7;top:50%;left:0;height:65%;transform:translate(0,-50%);"></div>';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-9 text-center">';
echo '<div class="position-relative pt-5 pr-md-5 pl-md-5 pb-5 pl-3 pr-4 h-100" style="background:#c2c2c2;border:8px solid white;box-shadow:inset 0px 8px 15px #959595;">';
echo get_sub_field('content_bottom');
echo '</div>';
echo '</div>';
// echo '<div class="col-md-6 text-center">';
// echo '<div class="position-relative pt-5 pr-md-5 pl-md-5 pl-3 pr-4 h-100" style="background:#c2c2c2;border:4px solid white;box-shadow:inset 0px 0px 5px rgba(0,0,0,.5);">';
// echo get_sub_field('content_right');
// echo '</div>';
// echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';
endwhile; endif;
// end of contact section


// // how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

// // popup trigger
// echo '<span class="btn bg-white text-accent apply-now open-modal" id="apply-now" style="">Apply Now</span>';

// // popup content
// echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3">';
// echo '<div class="bg-overlay"></div>';
// echo '<div class="bg-content">';
// echo '<div class="bg-content-inner">';
// echo '<div class="close" id="">X</div>';
// echo '<div>';
// echo get_field('popup_content');
// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';

get_footer(); ?>