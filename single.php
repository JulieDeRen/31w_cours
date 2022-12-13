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
<h1>single.php</h1>
	<main class="site__main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
			<!-- the_post_thumbnail('medium'); -->
			<h1><?= get_the_title(); ?></h1>
			<p>L'événement aura lieu au :  <?php the_field('adresse') ?></p>
     		<p>La date et l'heure de l'énénement :  <?php the_field('date_et_heure_de_levenement') ?></p>
			<?php the_content();		
			endif;	
		?>

	</main><!-- #main -->
<?php
get_footer();