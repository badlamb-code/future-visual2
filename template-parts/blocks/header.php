<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<header class="header">
	<div class="container">
		<div class="row justify-between align-center header__inner">
			<a href="#" class="header__logo align-center">
				<?php get_template_part( 'template-parts/partials/logo' ); ?>
				<!-- xr logo goes here -->
			</a>
			<div class="header__box justify-between align-center">
				<nav class="header__nav">
					<?php wp_rig()->display_primary_nav_menu( [ 'menu_id' => 'primary-menu' ] ); ?>
				</nav>
				<a href="#" class="btn btn--small header__btn">Make an enquiry</a>
				<div class="burger">
					<div class="burger__line"></div>
					<div class="burger__line"></div>
					<div class="burger__line"></div>
				</div>
			</div>	
		</div>
	</div>
</header>