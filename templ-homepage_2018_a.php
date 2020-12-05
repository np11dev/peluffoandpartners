<?php 
/*
Template Name: Homepage 2018 A
*/
get_header(); ?>
<?php $templ_dir = get_template_directory_uri(); ?>
<script>

$('body').addClass('page-template-templ-homepage');
$('#footer').css('position', 'absolute');
</script>
<?php if (have_posts()) : while (have_posts()) : the_post();
	$a = ["/video/GIANREEL1_small.mp4", "/video/GIANREEL2_small.mp4"];
	$p = ["/video/GIANREEL1_small.jpg", "/video/GIANREEL2_small.jpg"];
	$random_index = mt_rand(0, count($a) - 1);
    $random_video = $a[$random_index];
    $random_poster = $p[$random_index];
?>
<?php the_content(); ?> 
	

    <?php // edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
