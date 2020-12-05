<?php
/*
Template Name: Educazione Sentimentale
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
                        <li><a href="/educazione-sentimentale/ostia-1/">Un giorno Ostia 2015</a></li>
                        <li><a href="/educazione-sentimentale/taranto-1/">VISIBILE INVISIBILE TARANTO 2017</a></li>
                        <li><a href="/educazione-sentimentale/zabut-selinunte-2017/">ZABUT O DEL LUOGO REMOTO SELINUNTE 2017</a></li>
                        <li><a href="/educazione-sentimentale/edipo-re-felice-taranto-2018/">EDIPO RE FELICE TARANTO 2018</a></li>
                        <li><a href="/educazione-sentimentale/maggiore-futuro-ostia-2017/">MAGGIORE FUTURO OSTIA 2017</a></li>
                        <li><a href="/educazione-sentimentale/cosi-vedi-come-sembri-ostia-2018/">COSÌ VEDI COME SEMBRI OSTIA 2018</a></li>
                        <li><a href="/educazione-sentimentale/la-leggenda-del-mostro-decembrico-ostia-2016/">LA LEGGENDA DEL MOSTRO DECEMBRICO OSTIA 2016</a></li>
                        <li><a href="/educazione-sentimentale/la-citta-come-macchina-musicale-selinunte-2017/">LA CITTÀ COME MACCHINA MUSICALE SELINUNTE 2017</a></li>
                        <li><a href="/educazione-sentimentale/attraversare-i-luoghi-dellanima-ostia-2017/">ATTRAVERSARE I LUOGHI DELL’ANIMA OSTIA 2018</a></li>
                        <li><a href="/educazione-sentimentale/il-lagoporto-di-traiano-ostia-2016/">IL LAGOPORTO DI TRAIANO OSTIA 2016</a></li>
                        <li><a href="/educazione-sentimentale/copione-taranto-2017/">COPIONE TARANTO 2017</a></li>
                        <li><a href="/educazione-sentimentale/edipo-re-sofocle-taranto-2018/">EDIPO RE SOFOCLE TARANTO 2018</a></li>
                    <?php } else {?>
                        <li><a href="/en/sentimental-education/one-day-ostia-2015/">ONE DAY OSTIA 2015</a></li>
                        <li><a href="/en/sentimental-education/visible-invisible-taranto-2017/">VISIBLE INVISIBLE TARANTO 2017</a></li>
                        <li><a href="/en/sentimental-education/zabut_or-of-the-far-away-place-selinunte-2017/">ZABUT_OR OF THE FAR AWAY PLACE SELINUNTE 2017</a></li>
                        <li><a href="/en/sentimental-education/sophocles-oedipus-the-king-taranto-2018/">SOPHOCLE’S OEDIPUS THE KING TARANTO 2018</a></li>
                        <li><a href="/en/sentimental-education/greater-future-ostia-2017/">GREATER FUTURE OSTIA 2017</a></li>
                        <li><a href="/en/sentimental-education/so-that-you-see-how-you-seem/">SO THAT YOU SEE HOW YOU SEEM OSTIA 2018</a></li>
                        <li><a href="/en/sentimental-education/the-tale-of-the-decebalus-monster-ostia-2016/">THE TALE OF THE DECEBALUS MONSTER OSTIA 2016</a></li>
                        <li><a href="/en/sentimental-education/city-as-a-musical-machine-selinunte-2017/">CITY AS A MUSICAL MACHINE SELINUNTE 2017</a></li>
                        <li><a href="/en/sentimental-education/to-cross-soul-places-ostia-2018/">TO CROSS SOUL PLACES OSTIA 2018</a></li>
                        <li><a href="/en/sentimental-education/trajan-lake-harbour-ostia-2016/">TRAJAN LAKE-HARBOUR OSTIA 2016</a></li>
                        <li><a href="/en/sentimental-education/script-taranto-2017/">SCRIPT TARANTO 2017</a></li>
                        <li><a href="/en/sentimental-education/oedipus-the-king-happy-taranto-2018/">OEDIPUS THE KING HAPPY TARANTO 2018</a></li>
                    <?php }?>
                </ul>
            </div>


            <div class="parole_main_img">
                <?php if(pll_current_language() == 'ita'){ ?>
                <img src="/wp-content/uploads/2019/03/educazione-sentimentale.jpg" />
                <div class="parola edu01"><a href="/educazione-sentimentale/ostia-1/"></a></div>
                <div class="parola edu02"><a href="/educazione-sentimentale/taranto-1/"></a></div>
                <div class="parola edu03"><a href="/educazione-sentimentale/zabut-selinunte-2017/"></a></div>
                <div class="parola edu04"><a href="/educazione-sentimentale/edipo-re-felice-taranto-2018/"></a></div>
                <div class="parola edu05"><a href="/educazione-sentimentale/maggiore-futuro-ostia-2017/"></a></div>
                <div class="parola edu06"><a href="/educazione-sentimentale/cosi-vedi-come-sembri-ostia-2018/"></a></div>
                <div class="parola edu07"><a href="/educazione-sentimentale/la-leggenda-del-mostro-decembrico-ostia-2016/"></a></div>
                <div class="parola edu08"><a href="/educazione-sentimentale/la-citta-come-macchina-musicale-selinunte-2017/"></a></div>
                <div class="parola edu09"><a href="/educazione-sentimentale/attraversare-i-luoghi-dellanima-ostia-2017/"></a></div>
                <div class="parola edu10"><a href="/educazione-sentimentale/il-lagoporto-di-traiano-ostia-2016/"></a></div>
                <div class="parola edu11"><a href="/educazione-sentimentale/copione-taranto-2017/"></a></div>
                <div class="parola edu12"><a href="/educazione-sentimentale/edipo-re-sofocle-taranto-2018/"></a></div>
            <?php } else {?>
                <img src="/wp-content/uploads/2019/03/educazione-sentimentale-eng.jpg" />
                <div class="parola edu01 eng"><a href="/en/sentimental-education/one-day-ostia-2015/"></a></div>
                <div class="parola edu02 eng"><a href="/en/sentimental-education/visible-invisible-taranto-2017/"></a></div>
                <div class="parola edu03 eng"><a href="/en/sentimental-education/zabut_or-of-the-far-away-place-selinunte-2017/"></a></div>
                <div class="parola edu04 eng"><a href="/en/sentimental-education/sophocles-oedipus-the-king-taranto-2018/"></a></div>
                <div class="parola edu05 eng"><a href="/en/sentimental-education/greater-future-ostia-2017/"></a></div>
                <div class="parola edu06 eng"><a href="/en/sentimental-education/so-that-you-see-how-you-seem/"></a></div>
                <div class="parola edu07 eng"><a href="/en/sentimental-education/the-tale-of-the-decebalus-monster-ostia-2016/"></a></div>
                <div class="parola edu08 eng"><a href="/en/sentimental-education/city-as-a-musical-machine-selinunte-2017/"></a></div>
                <div class="parola edu09 eng"><a href="/en/sentimental-education/to-cross-soul-places-ostia-2018/"></a></div>
                <div class="parola edu10 eng"><a href="/en/sentimental-education/trajan-lake-harbour-ostia-2016/"></a></div>
                <div class="parola edu11 eng"><a href="/en/sentimental-education/script-taranto-2017/"></a></div>
                <div class="parola edu12 eng"><a href="/en/sentimental-education/oedipus-the-king-happy-taranto-2018/"></a></div>
            <?php }?>
            </div>
       </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
