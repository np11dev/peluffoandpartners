<?php
/*
Template Name: Modelli Elenco
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
    $themeurl = get_template_directory_uri();
    ?>
    <div class="center_content contenuto progetti_elenco">
        <div class="intestazione">
            <div class="divisore_titolo sopra"><span></span></div>
            <div class="titolo"><?php the_title() ?></div>
            <div class="divisore_titolo sotto"><span></span></div>
        </div>
    <div class="contenuto_pagina">
        <div class="progetti_elenco_item">
            <?php
            global $post;
            $paged = ( get_query_var( 'paged' ) ) ? absint(get_query_var( 'paged' )) : 1;
            $args = array( 'post_type' => 'modello', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page'   => 12, 'paged' => $paged);

            /*$myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); */
            $the_query = new WP_Query( $args ); 

                while ($the_query->have_posts()) : $the_query->the_post();?>
                <div class="progetto_item">
                     <a href="<?php echo get_permalink();?>" class="link"></a>
                    <div class="progetto_foto"><?php echo wp_get_attachment_image(get_field('immagine'), 'full')?></div>
                    <div class="progetto_testo">
                        <div class="meta"><?php echo get_field('dove')?> / <?php echo get_field('anno')?></div>
                        <div class="progetto_titolo"><h1><?php echo get_the_title();?></h1></div>
                    </div>
                </div>
                <?php /*endforeach;*/ endwhile;?>
                <?php
                $big = 999999999; // need an unlikely integer
                $paginate_arrlink = paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, $paged ),
                    'total' => $the_query->max_num_pages,
                    'prev_text'          => __('«'),
                    'next_text'          => __('»'),
                    'mid_size'           => 2

                ) );
                if ($paginate_arrlink) {
                    echo '<div class="paginazione">';
                    echo $paginate_arrlink;
                    echo '</div>';
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
