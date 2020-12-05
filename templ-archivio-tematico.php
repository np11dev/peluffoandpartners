<?php
/*
Template Name: Archivio Tematico
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
    $themeurl = get_template_directory_uri();
    ?>
    <div class="center_content contenuto archiviot_elenco">
        <div class="intestazione">
            <div class="divisore_titolo sopra"><span></span></div>
            <div class="titolo"><?php the_title() ?></div>
            <div class="divisore_titolo sotto"><span></span></div>
            <div class="archiviot_elenco_item">
                <?php
                    while ( have_rows('repeater') ) : the_row();
                ?>
                    <div class="archiviot_item">
                        <a target="_blank" href="<?php echo get_sub_field('pdf');?>"><?php echo wp_get_attachment_image(get_sub_field('immagine'), 'full')?></a>
                    </div>
                <?php endwhile;?>
            </div>
        </div>

    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
