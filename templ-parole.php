<?php
/*
Template Name: Parole
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
    $themeurl = get_template_directory_uri();
    ?>
    <div class="center_content contenuto">
        <div class="intestazione">
            <div class="divisore_titolo sopra"><span></span></div>
           
            <div class="titolo"><?php the_title(); ?></div>
            <div class="divisore_titolo sotto"><span></span></div>
        </div>

        <div class="progetti_elenco_item">
            <div class="parole_main_mobile">
                <ul class="parole_lista">
                    <?php if(pll_current_language() == 'ita'){?>
                        <li><a href="/parole/bellezza/">Bellezza</a></li>
                        <li><a href="/parole/stralinguaggio/">Stralinguaggio</a></li>
                        <li><a href="/parole/bibliografia/">Bibliografia</a></li>
                        <li><a href="/parole/condivisione-e-generosita/">Condivisione e generosità</a></li>
                        <li><a href="/parole/ombra-rinascimento-come-rivoluzione/">Ombra. Rinascinemto come rivoluzione</a></li>
                        <li><a href="/parole/citta/">Città</a></li>
                        <li><a href="/parole/materia-e-corpo/">Materia e corpo</a></li>
                        <li><a href="/parole/conformismo/">Conformismo</a></li>
                        <li><a href="/parole/eresia/">Eresia</a></li>
                        <li><a href="/parole/mito/">Mito</a></li>
                        <li><a href="/parole/tempo/">Tempo</a></li>
                        <li><a href="/parole/genealogia/">Genealogia</a></li>
                    <?php } else {?>
                        <li><a href="/en/words/beauty/">Beauty</a></li>
                        <li><a href="/en/words/language/">Language</a></li>
                        <li><a href="/en/words/bibliography/">Bibliography</a></li>
                        <li><a href="/en/words/right-and-duty-to-generosity/">Right and Duty to Generosity</a></li>
                        <li><a href="/en/words/ombra-rinascimento-come-rivoluzione-eng/">Ombra. Rinascinemto come rivoluzione ENG</a></li>
                        <li><a href="/en/words/city/">City</a></li>
                        <li><a href="/en/words/matter-and-body/">Matter and Body</a></li>
                        <li><a href="/en/words/conformity/">Conformity</a></li>
                        <li><a href="/en/words/heresy/">Heresy</a></li>
                        <li><a href="/en/words/myth/">Myth</a></li>
                        <li><a href="/en/words/time/">Time</a></li>
                        <li><a href="/en/words/genealogy/">Genealogy</a></li>
                    <?php }?>
                </ul>
            </div>


            <div class="parole_main_img">
                <?php if(pll_current_language() == 'ita'){ ?>
                <img src="/wp-content/uploads/2017/08/parole_2.jpg" />
                <div class="parola parola01"><a href="/parole/bellezza/"></a></div>
                <div class="parola parola02"><a href="/parole/stralinguaggio/"></a></div>
                <div class="parola parola03"><a href="/parole/bibliografia/"></a></div>
                <div class="parola parola04"><a href="/parole/condivisione-e-generosita/"></a></div>
                <div class="parola parola05"><a href="/parole/ombra-rinascimento-come-rivoluzione/"></a></div>
                <div class="parola parola06"><a href="/parole/citta/"></a></div>
                <div class="parola parola07"><a href="/parole/materia-e-corpo/"></a></div>
                <div class="parola parola08"><a href="/parole/conformismo/"></a></div>
                <div class="parola parola09"><a href="/parole/eresia/"></a></div>
                <div class="parola parola10"><a href="/parole/mito/"></a></div>
                <div class="parola parola11"><a href="/parole/tempo/"></a></div>
                <div class="parola parola12"><a href="/parole/genealogia/"></a></div>
            <?php } else {?>
                <img src="/wp-content/uploads/2017/09/parole_2_eng.jpg" />
                <div class="parola parola01"><a href="/en/words/beauty/"></a></div>
                <div class="parola parola02"><a href="/en/words/language/"></a></div>
                <div class="parola parola03"><a href="/en/words/bibliography/"></a></div>
                <div class="parola parola04"><a href="/en/words/right-and-duty-to-generosity/"></a></a></div>
                <div class="parola parola05"><a href="/en/words/shadow-renaissance-as-revolution/"></a></div>
                <div class="parola parola06"><a href="/en/words/city/"></a></div>
                <div class="parola parola07"><a href="/en/words/matter-and-body/"></a></div>
                <div class="parola parola08"><a href="/en/words/conformity/"></a></div>
                <div class="parola parola09"><a href="/en/words/heresy/"></a></div>
                <div class="parola parola10"><a href="/en/words/myth/"></a></div>
                <div class="parola parola11"><a href="/en/words/time/"></a></div>
                <div class="parola parola12"><a href="/en/words/genealogy/"></a></div>
            <?php }?>
            </div>
       </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
