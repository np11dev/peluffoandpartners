<?php
/*
Template Name: Intro
*/
get_header('intro'); ?>
<?php $templ_dir = get_template_directory_uri(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="item_table">
		<div class="item_cell">
            <?php 
                $homeurl = '';
                if(pll_current_language() == 'en') { 
                    $homeurl='/en/architecture/';
                } else {
                    $homeurl='/architettura/';
                }
            ?>
			<a href="<?php echo $homeurl;?>" class="pollice"><img src="<?php echo $templ_dir ?>/images/impronta_intro.png" /></a>
		</div>
        <div id="footer">
        <img class="certificazione-mini" src="http://www.peluffoandpartners.com/wp-content/uploads/2021/01/loghicert_mini.png" /> Peluffo & Partners Architettura Srl / PIVA 09891730963
        </div>
	</div>
    <?php //edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<?php endwhile; endif; ?>



<?php get_footer('intro'); ?>
