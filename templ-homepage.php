<?php 
/*
Template Name: Homepage 2018 B
*/
get_header(); ?>
<?php $templ_dir = get_template_directory_uri(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	$a = ["/video/GIANREEL1_small.mp4", "/video/GIANREEL2_small.mp4"];
	$p = ["/video/GIANREEL1_small.jpg", "/video/GIANREEL2_small.jpg"];
	$random_index = mt_rand(0, count($a) - 1);
    $random_video = $a[$random_index];
    $random_poster = $p[$random_index];
?>
	<script>
	$('body').on('click', function(){
			$('video')[0].muted = false; 
			$('video')[0].play();
	});
	var canUnmute = true;
	$('body').on('mousemove', function(){
			if(canUnmute){
				$('video')[0].muted = false;
				if($('video')[0].paused){
					canUnmute = false;
					$('video')[0].muted = true;
					$('video')[0].play();
				}
			}

	});
	$('body').on('touchstart', function(){
		$('video')[0].muted = false; 
	});

$('body').addClass('page-template-templ-homepage');
$('#footer').css('position', 'absolute');
	
	</script>
	<video style="display: block;" muted playsinline autoplay loop id="bgvid" poster="<?php echo $templ_dir,$random_poster ?>">
		<!-- MP4 must be first for iPad! -->
		<source src="<?php echo $templ_dir,$random_video ?>" type="video/mp4" /><!-- Safari / iOS video    -->
		<!--<source src="loop-hd.webm" type="video/webm" />--><!-- Firefox / Opera / Chrome10 -->
	</video>

<!-- 	<div class="item_table video">
		<div class="item_cell">
			<div class="playvideo" >
				<div id="playvideo_btn">PLAY</div>
			</div>
		</div>
	</div> -->
	
	<!--
	poster="<?php echo $templ_dir ?>/video/anteprima.jpg"
	<video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
	        <source src="<?php echo $templ_dir ?>/video/753299098MEDIA.mp4" type="video/mp4" />
	    </video>-->

    <?php // edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
