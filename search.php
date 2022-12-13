<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */

get_header();

?>
<h1>search.php</h1>
	<main class="site__main">

    <?php 


            while ( have_posts() ) : the_post();

            $i=0; /*compteur */   
             ?>



            <?php
            if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
            
            <?php $i++; /*compteur */?>
            <?php $message = "Nous avons trouvé " . $i . " résultat(s) de recherche"; ?>
            <h3> <?= $message ?> </h3>


            <div class= "widget-rechercher">
                <?php the_post_thumbnail('medium'); ?>
                <div class="widget-rechercher-texte">
                    <h1><?= get_the_title(); ?></h1>
                    <p>L'événement aura lieu au :  <?php the_field('adresse');  ?></p>
                    <p>La date et l'heure de l'énénement :  <?php the_field('date_et_heure_de_levenement'); ?></p>
                    <p><?= wp_trim_words(get_the_excerpt(), 20,$le_permalien) ; ?></p>
                </div>
            </div>

            <?php endif; ?>	
            <?php


                endwhile;
            ?>

	</main><!-- #main -->
<?php
get_footer();





