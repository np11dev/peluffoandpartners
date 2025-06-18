<?php
/*
Template Name: Progetti Elenco
*/
session_start();
get_header();
?>

<?php
$seed = false;
if (isset($_SESSION['seed'])) {
    $seed = $_SESSION['seed'];
}
if (!$seed) {
    $seed = rand();
    $_SESSION['seed'] = $seed;
}
$orderby = 'RAND(' . $seed . ')';

// Recupera la tipologia corrente se presente (es. da URL /tipologia/competitions)
$term = get_queried_object();
$tipologia_slug = '';
if ($term && isset($term->taxonomy) && $term->taxonomy === 'tipologia') {
    $tipologia_slug = $term->slug;
}
?>


    <div class="center_content contenuto progetti_elenco">
        <div class="intestazione">
            <div class="divisore_titolo sopra"><span></span></div>
            <div class="titolo"><?php the_title(); ?></div>
            <div class="divisore_titolo sotto"><span></span></div>

            <!-- Filtro -->
            <div id="filter-projects">
                <a href="#" class="filter-toggle">Filtra</a>
                <nav>
                    <ul>
                        <?php
                        $tipologie = get_terms([
                            'taxonomy' => 'tipologia',
                            'hide_empty' => true,
                        ]);

                        if (!empty($tipologie) && !is_wp_error($tipologie)) {
                            foreach ($tipologie as $tipologia) {
                                $link = get_term_link($tipologia);
                                $active_class = ($tipologia->slug === $tipologia_slug) ? ' class="active"' : '';
                                echo '<li><a href="' . esc_url($link) . '"' . $active_class . '>' . esc_html($tipologia->name) . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="contenuto_pagina">
            <div class="progetti_elenco_item">
                <?php
                global $post;
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = [
                    'post_type' => 'progetto',
                    'orderby' => $orderby,
                    'order' => 'ASC',
                    'posts_per_page' => 12,
                    'paged' => $paged,
                ];

                // Aggiungi filtro per tassonomia se presente
                if (!empty($tipologia_slug)) {
                    $args['tax_query'] = [[
                        'taxonomy' => 'tipologia',
                        'field' => 'slug',
                        'terms' => $tipologia_slug,
                    ]];
                }

                $the_query = new WP_Query($args);

                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="progetto_item">
                        <a href="<?php echo get_permalink(); ?>" class="link"></a>
                        <div class="progetto_foto"><?php echo wp_get_attachment_image(get_field('immagine'), 'full'); ?></div>
                        <div class="progetto_testo">
                            <div class="meta"><?php echo get_field('dove'); ?> / <?php echo get_field('anno'); ?></div>
                            <div class="progetto_titolo"><h1><?php echo get_the_title(); ?></h1></div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php
                $big = 999999999;
                $paginate_arrlink = paginate_links([
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, $paged),
                    'total' => $the_query->max_num_pages,
                    'prev_text' => __('«'),
                    'next_text' => __('»'),
                    'mid_size' => 2
                ]);

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

<?php get_footer(); ?>
