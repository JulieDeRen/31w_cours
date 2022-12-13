<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package igc31w
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
		.site__header{
			background-color:<?= get_theme_mod("site__title__background"); ?>;
		}

	</style>
	<?php
	if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 65;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
			
		</div><!-- .panel-image -->

	<?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'igc31w' ); ?></a>
 
	<header id="masthead" class="site__header">

		<div class="site__branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$igc31w_description = get_bloginfo( 'description', 'display' );

			?>
		</div><!-- .site-branding -->
		<?php

					// nav
					wp_nav_menu(array(
						"menu" => "primaire",
						"container"=> "nav",
						"container_class"=> "menu__primaire",
					));
		?>
		<?php get_sidebar( 'header-1' );?>
		<?php get_sidebar( 'header-2' ); ?>
	</header><!-- #masthead -->
	<aside class="site__menu">
	<input type="checkbox" id="chkBurger" class="chkBurger">
	<label for="chkBurger" class="burger">
		<code>&#10148;</code>
	</label>
	<?php 
		wp_nav_menu(array(
			"menu" => "aside",
			"container"=> "nav",
			"container_class"=> "menu__aside",
		))
	?>
	</aside>
	<aside class="site__sidebar__header">
			<h6>Calendrier</h6>
			<?php get_sidebar( 'aside-1' ); ?>
			<?php get_sidebar( 'aside-2' ); ?>
	</aside>
