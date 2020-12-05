<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();

    $themeurl = get_template_directory_uri();

    $foto = get_field('gallery_foto');
    $disegni = get_field('gallery_disegni');
    $video = get_field('video');
    $libro_url = get_field('libro_url');
    ?>
    <div class="center_content contenuto progetto">
        <div class="intestazione">
            <div class="progetto_categoria"><?php echo get_field('dove')?> / <?php echo get_field('anno')?></div>
            <h1 class="progetto_titolo"><?php the_title(); ?></h1>
        </div>

        <div class="progetto_blocco01">
            <div class="progetto_main_image <?php if($foto){ echo 'clickfoto';}?>"><?php echo wp_get_attachment_image(get_field('immagine'), 'full')?></div>
            <div class="progetto_icone">
                <?php
                if($foto):?>
                    <div class="progetto_icona01" id="foto"><img src="<?php echo $themeurl ?>/images/progetto_ico01.png" /> <span>Foto</span></div>
                    <div class="clear"></div>
                <?php
                endif;
                if($disegni):?>
                    <div class="progetto_icona01" id="disegni"><img src="<?php echo $themeurl ?>/images/progetto_ico01.png" /> <span>Disegni</span></div>
                    <div class="clear"></div>

                <?php
                endif;
                if($video):
                ?>
                    <div class="progetto_icona02" id="video"><a class="swipebox-video" rel="vimeo" href="<?php echo $video;?>"><img src="<?php echo $themeurl ?>/images/progetto_ico02.png" /> <span>Video</span></a></div>
                <?php
                endif;
                if($libro_url):
                ?>
                    <div class="progetto_icona02" id="libro"><a href="<?php echo $libro_url;?>" target="_blank"><img src="<?php echo $themeurl ?>/images/progetto_ico01.png" /> <span>Libro</span></a></div>
                <?php
                endif;
                ?>
            </div>
            <div class="progetto_disegno <?php if($disegni){ echo 'clickdisegni';}?>"><?php echo wp_get_attachment_image(get_field('disegno'), 'full')?></div>
            <div class="progetto_testo">
                <?php the_content();?>
            </div>
        </div>


        <?php if(get_field('specifiche') || get_field('immagine_secondaria')){?>
            <div class="progetto_blocco02">
                <?php if(get_field('immagine_secondaria')){ ?>
                    <div class="progetto_main_image <?php if($video){ echo 'clickvideo';}?>"><?php echo wp_get_attachment_image(get_field('immagine_secondaria'), 'full')?></div>
                <?php }
                    if(get_field('specifiche')){ ?>
                    <div class="progetto_testo"><?php echo get_field('specifiche');?></div>
                <?php }?>
            </div>
        <?php } ?>

    </div>




<!--<div id="page-wrap">
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			</div>
			<div style="padding:50px; text-align: center"><?php edit_post_link('Edit this entry','','.'); ?></div>
		</div>
	<?php // comments_template(); ?>
    <?php //get_sidebar('footerpagine'); ?>
    <div class="clear"></div>
</div>



<?php

$images = get_field('gallery_foto');
echo '<pre>';
print_r($images);
echo '</pre>';
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>-->



<script>
jQuery( '.progetto_icona02#video').click( function( e ) {
    e.preventDefault();
    jQuery( 'a.swipebox-video' ).swipebox();
});
jQuery('.progetto_blocco02 .progetto_main_image.clickvideo' ).click( function( e ) {
    jQuery( '.progetto_icona02#video a.swipebox-video').trigger('click');
});
jQuery( '.progetto_icona01#foto, .progetto_main_image.clickfoto' ).click( function( e ) {
	e.preventDefault();
	jQuery.swipebox( [
        <?php
            $first = true;
            if($foto){
                foreach ($foto as $f) {
                    if(!$first){
                        echo ', ';
                    }
                    //echo '{ href:"'.$f['sizes']['gallery_progetti'].'", title:"'.$f['title'].'" }';
                       if(pll_current_language() == 'en' && $f['alt']!='') { 
                        echo '{ href:"'.$f['sizes']['gallery_progetti'].'", title:"'.$f['alt'].'" }';
                    } else {
                        echo '{ href:"'.$f['sizes']['gallery_progetti'].'", title:"'.$f['title'].'" }';
                    }
                    $first = false;
                }
            }
        ?>
	] );
} );
jQuery( '.progetto_icona01#disegni, .progetto_disegno.clickdisegni' ).click( function( e ) {
    e.preventDefault();
    jQuery.swipebox( [
        <?php
            $first = true;
            if($disegni){
                foreach ($disegni as $f) {
                    if(!$first){
                        echo ', ';
                    }
                    //echo '{ href:"'.$f['sizes']['gallery_progetti'].'", title:"'.$f['title'].'" }';
                    if(pll_current_language() == 'en' && $f['alt']!='') { 
                        echo '{ href:"'.$f['sizes']['gallery_progetti'].'", title:"'.$f['alt'].'" }';
                    } else {
                        echo '{ href:"'.$f['sizes']['gallery_progetti'].'", title:"'.$f['title'].'" }';
                    }
                    $first = false;
                }
            }
        ?>
    ] );
} );
</script>



<?php endwhile; endif; ?>
<?php get_footer(); ?>
