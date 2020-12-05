<?php
/*
Template Name: Studio Lucio Fontana
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
    $themeurl = get_template_directory_uri();
    $foto = get_field('gallery_foto');

    ?>
    <div class="center_content contenuto">
        <div class="intestazione">
            <div class="divisore_titolo sopra"><span></span></div>
            <div class="titolo"><?php the_title(); ?></div>
            <div class="divisore_titolo sotto"><span></span></div>
        </div>

        <div class="progetti_elenco_item studioluciofontana" id="hsdoidsjo">
        <?php if( has_post_thumbnail() ): ?>
            <div class="photocontainer"><img src="<?php echo get_the_post_thumbnail_url();?>" class="imgmobile"/></div>
        <?php endif; ?>
         <div class="testocontainer"><?php the_content() ?></div>
      

       </div>
    <div class="clear"></div>
    </div>
    <script>
<?php
if($foto):?>
    jQuery( '.photocontainer' ).click( function( e ) {
    e.preventDefault();
    jQuery.swipebox( [
        <?php
            $first = true;
            foreach ($foto as $f) {
                if(!$first){
                    echo ', ';
                }
                echo '{ href:"'.$f['url'].'", title:"'.$f['title'].'" }';
                $first = false;
            }
        ?>
    ] );
    jQuery( '.photocontainer' ).css('cursor', 'pointer');
} );
<?php
endif;
?>
</script>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
