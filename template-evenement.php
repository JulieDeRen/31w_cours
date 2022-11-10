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
     <?php the_field('adresse') ?>
     <?php the_field('date_de_levenement') ?>
     <?php endwhile ?>
     <?php endif ?>
</main>
<?php get_footer() ?>