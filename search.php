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
            $i++; ?>
            <h3> Nous avons trouvé <?= $i ?> résultat(s) de recherche </h3>

            <?php
            if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>

            <div class= "widget-rechercher">
                <?php the_post_thumbnail('medium'); ?>
                <div class="widget-rechercher-texte">
                    <h1><?= get_the_title(); ?></h1>
                    <p>L'événement aura lieu au :  <?php the_field('adresse') ?></p>
                    <p>La date et l'heure de l'énénement :  <?php the_field('date_et_heure_de_levenement') ?></p>
                    <?php the_content();?>
                </div>
            </div>

            <?php endif; ?>	
            <?php
                endwhile;
            ?>

	</main><!-- #main -->
<?php
get_footer();





