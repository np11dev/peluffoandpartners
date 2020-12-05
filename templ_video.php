<?php
/*
Template Name: Video
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
    $themeurl = get_template_directory_uri();
    $videourls = get_field('video');
    ?>

    <div class="center_content contenuto">
        <div class="intestazione">
            <div class="divisore_titolo sopra"><span></span></div>
            <div class="titolo"><?php the_title(); ?></div>
            <div class="divisore_titolo sotto"><span></span></div>
        </div>
       <div class="videogallery">

    <?php 

    while ( have_rows('video') ) : the_row();
    ?>
        <div class="video_div">
            <iframe src="https://player.vimeo.com/video/<?php echo get_sub_field('id_video');?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>

     <?php endwhile;?>

     </div>

 </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>


