<?php
/*
Template Name: News
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
            <div class="photoinstagram"><?php the_content() ?></div>
       </div>
    <div class="clear"></div>
    </div>
    <script>

</script>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
