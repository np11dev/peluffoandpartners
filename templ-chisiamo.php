<?php
/*
Template Name: Chi siamo
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

        <div class="progetti_elenco_item chisiamo" id="hsdoidsjo">
            <div class="videocontainer">
                <div class="child">
                <!--<video class="videodesktop" autoplay>
                    <source src="<?php echo $themeurl ?>/video/peluffo_chisiamo_1.mp4" type="video/mp4" >
                </video>-->
                <img src="<?php echo get_the_post_thumbnail_url();?>" class="imgmobile"/>
                </div><div style="margin-top:20px;"><?php echo get_field('testo_sotto_la_foto'); ?></div></div>
            <div class="elencopersone testogiustificato"><?php the_content() ?></div>

            <div class="clear"></div>
            <div class="videocontainer" style="margin-top:30px; vertical-align:top"><?php //echo get_field('testo_sotto_la_foto'); ?></div>
            <div class="elencopersone" style="margin-top:30px; vertical-align:top;"><?php echo get_field('persone'); ?></div>
       </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>


