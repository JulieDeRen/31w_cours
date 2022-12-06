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

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

	// Calculate aspect ratio: h / w * 100%.
	$ratio = $thumbnail[2] / $thumbnail[1] * 100;
	?>

	<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?> ) width: 100% image-fit: cover;">
		<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
	</div><!-- .panel-image -->



	<main class="site__main">
		<!--<code>front-page.php</code>-->

		<?php

		wp_nav_menu(array(
			'menu'=> 'evenement',
			'container' => 'nav',
			'container_class' => 'menu_evenement'
		));
		
?>
	<!-- Voir fichier grille_accueil.scss -->
	<section class="grille">

<?php
	if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) : the_post(); ?>
		<?php if (in_category('galerie')): ?>
			<?php get_template_part( 'template-parts/accueil-galerie', '' ); ?>
			<?php else: ?>
			<?php get_template_part( 'template-parts/accueil-cours', '' ); ?>

		<?php endif; ?>
		<?php
		endwhile;
	endif;	
	?>
	</section>
	</main>
<?php
get_footer();
