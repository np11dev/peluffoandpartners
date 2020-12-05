<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 

    if(has_post_thumbnail()){
        $imgurl = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'main_img')[0];
    } else { 
       $imgurl = "";
    }  
    //Show the First Category Name Only                    
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        $category_name = esc_html( $categories[0]->name );   
        $category_class = esc_html( $categories[0]->slug );   
    } ?>
    <div class="main-image-articolo" style="background-image:url(<?php echo $imgurl; ?>);">
        <div class="ingriggio"></div>
        <div class="titolo_principale">
            <div class="titolo_principale_table">
                <div class="titolo_principale_cell">
                    <div class="categoriaarticolo <?php echo $category_class; ?>"><?php echo $category_name; ?></div>
                    <h1><?php the_title(); ?></h1>
                    <div class="barra"></div>
                    <div class="dataarticolo"><?php the_time('d m Y') ?></div>
                </div>
            </div>
        </div>
    </div>    


<div id="page-wrap">
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry">	
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			</div>
			<?php edit_post_link('Edit this entry','','.'); ?>
		</div>
	<?php comments_template(); ?>
    <?php //get_sidebar('footerpagine'); ?>
    <div class="clear"></div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>