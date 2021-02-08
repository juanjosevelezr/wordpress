<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.typekit.net/nda5cvo.css"> 
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
		
		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>
					
					<div class="header-titles">
					<?php // CSS inline adicional, separación de logo y descripcion por Juan José Vélez.
					?>
						<div style="float:left;padding-right:20px;">
							<?php
							// Site title or logo.
							twentytwenty_site_logo();
						?>
						</div>
						<div style="float:right;padding-left:20px;border-left-style:solid;border-left-color: #827264;border-left-width:2px;">
						<?php
							// Site description.
							// twentytwenty_site_description();
						?>	
							<span style="font-family:mrs-eaves-xl-serif;font-weight:800;font-style:normal;font-size:large;">migrantes</span>
						</div>
												
					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<svg width="30" height="13" viewBox="0 0 30 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="50" height="3.07692" rx="1.53846" fill="#827264"/>
<rect y="9" width="50" height="3.07692" rx="1.53846" fill="#827264"/>
</svg><?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php // _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->



			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
