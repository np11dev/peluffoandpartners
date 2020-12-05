<?php get_header(); ?>
<?php $templ_dir = get_template_directory_uri(); ?>

<?php


if (have_posts()) :
    $imgurl = "";
    $terms = get_the_terms( get_the_ID(), 'category');
    if( !empty($terms) ) {
        $term = array_pop($terms);
        $custom_field = get_field('immagine_category', $term );
        $imgurl = wp_get_attachment_image_src( $custom_field, 'main_img')[0];
    }

            ?>
        <div class="main-image-articolo" style="background-image:url(<?php echo $imgurl; ?>);">
            <div class="ingriggio"></div>
            <div class="titolo_principale">
                <div class="titolo_principale_table">
                    <div class="titolo_principale_cell">
                        <h1>
                        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                        <?php /* If this is a category archive */ if (is_category()) { ?>
                           <?php single_cat_title(); ?>
                        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                            Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;
                        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                            Archive for <?php the_time('F jS, Y'); ?>
                        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                            Archive for <?php the_time('F, Y'); ?>
                        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                            Archive for <?php the_time('Y'); ?>
                        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                            Author Archive
                        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                            Blog Archives
                        <?php } ?>
                        </h1>
                        <div class="barra"></div>
                    </div>
                </div>
            </div>
        </div>   

 			<?php


?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
            
            <div class="articles">
                <div class="category_description"><?php echo category_description(); ?> </div>
                
			<?php 
                $classleftright = 'left';
                while (have_posts()) : the_post(); ?>
			    <?php 
				$categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    $category_name = esc_html( $categories[0]->name );   
                    $category_class = esc_html( $categories[0]->slug );   
                } ?>
                
                <div class="article <?php echo $classleftright?>">
                    <a class="linkurl" href="<?php echo get_permalink(); ?>"><img src="<?php echo $templ_dir.'/images/trasp.png'; ?>" /></a>
                    <?php 
                    $imgurl = '';
                    if(has_post_thumbnail()){
                        $imgurl = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'anteprima_notizie')[0];
                    } else { 
                       $imgurl = $templ_dir.'/images/thrash_article_600x450.jpg';
                    }  ?>
                    <div class="immagine_articolo_home"><img src="<?php echo $imgurl ?>"/><div class="categoriaarticolo <?php echo $category_class; ?>"><?php echo $category_name; ?></div></div>
                    <div class="description">
                        <div class="title"><?php echo get_the_title(); ?></div>
                        <div class="date"><?php the_time('d m Y') ?></div>
                        <div class="testo"><p><?php echo TagliaStringa(get_the_content(), 220); ?></p></div>
                    </div><div class="clear"></div>
                </div>
                <?php
                if ( $classleftright == 'left' ) {
                    $classleftright = 'right';
                } else {
                    $classleftright = 'left';
                };
                ?>
			<?php endwhile; ?>
            </div>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
