<?php
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage igc-31w
*/

get_header();

?>
     <main class="site__main">
     <?php get_header(); ?>

          <?php if (have_posts()): while(have_posts()): the_post(); ?>
                    <!-- the_post_thumbnail('medium'); -->
                    <h1><?= get_the_title(); ?></h1>
                    <p>L'événement aura lieu au :  <?php the_field('adresse') ?></p>
                    <p>La date et l'heure de l'énénement :  <?php the_field('date_et_heure_de_levenement') ?></p>
                    <?php the_content(); ?>	
          <?php endwhile ?>	
          <?php  endif;	?>

     </main><!-- #main -->
     
<?php get_footer(); ?>

