<?php
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage igc-31w
*/
?>
<main class="site__main">
     <h1>---- template-evenement.php ------</h1>
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
     <?php the_title() ?>
     <?php the_content() ?>
     <p><?php the_field('adresse') ?></p>
     <p><?php the_field('date_et_heure_de_levenement') ?></p>
     <?php endwhile ?>
     <?php endif ?>
</main>
<?php get_footer() ?>