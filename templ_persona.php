<?php
/*
Template Name: Persona
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
    $themeurl = get_template_directory_uri();
    ?>
    <div class="center_content contenuto">
        <div class="intestazione">
            <div class="divisore_titolo sopra"><span></span></div>
            <div class="titolo"><?php the_title(); ?></div>
            <div class="divisore_titolo sotto"><span></span></div>
        </div>

        <div class="progetti_elenco_item studioluciofontana" id="hsdoidsjo">
            <div class="photocontainer"><img src="<?php echo get_the_post_thumbnail_url();?>" class="imgmobile"/></div>
            <div class="testocontainer"><?php the_content() ?></div>
       </div>
    </div>
<?php endwhile; endif; ?>
<div class="clear"></div>
<?php get_footer(); ?>


