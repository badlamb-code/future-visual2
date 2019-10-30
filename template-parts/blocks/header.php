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
				<svg viewBox="0 0 178 70" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<defs>
						<path id="d" d="M0 70h177.943V0H0z" />
					</defs>
					<g fill-rule="evenodd">
						<path
							d="M0 17.5v35L30.311 70l30.31-17.5v-35L30.311 0 0 17.5zm5.189 32.005v-29.01L30.311 5.993l25.122 14.504v29.009L30.311 64.009 5.189 49.505z"
							fill="#EB0F0F" />
						<path
							d="M42.377 23.687L38.67 36.44l-3.707-12.753H14.31v22.715h6.38v-7.431h8.881l-1.998-5.906h-6.884v-2.888h9.328l5.546 16.387h6.106l7.742-22.877z"
							fill="#EB0F0F" />
						<path
							d="M87.946 15.305H76.579v6.702h10.16v1.931h-10.16v8.177H74.46V13.348h13.485zM106.535 24.1c0 5.468-3.137 8.31-7.828 8.31-4.64 0-7.802-2.842-7.802-8.15V13.347h2.118v10.777c0 4.048 2.145 6.328 5.738 6.328 3.458 0 5.656-2.09 5.656-6.194V13.35h2.118v10.75zM117.87 32.115h-2.144v-16.81h-6.3v-1.957h14.745v1.957h-6.3zM142.692 24.1c0 5.468-3.137 8.31-7.828 8.31-4.64 0-7.802-2.842-7.802-8.15V13.347h2.118v10.777c0 4.048 2.145 6.328 5.738 6.328 3.458 0 5.656-2.09 5.656-6.194V13.35h2.118v10.75zM153.763 15.305h-5.79v7.614h5.763c2.815 0 4.826-1.448 4.826-3.887 0-2.333-1.77-3.727-4.799-3.727zm5.013 16.81l-5.443-7.292h-5.36v7.292h-2.119V13.348h8.07c4.128 0 6.782 2.225 6.782 5.603 0 3.137-2.144 4.96-5.093 5.496l5.763 7.668h-2.6zM177.46 15.278h-11.447v6.408h10.241v1.93h-10.24v6.568h11.58v1.93h-13.699V13.349h13.565zM75.2 36.68h5.817l4.263 11.876 4.263-11.877h5.71l-7.614 18.9h-4.826z"
							fill="#FFF" />
						<mask id="c" fill="#fff">
							<use xlink:href="#d" />
						</mask>
						<path
							d="M97.13 55.446h5.228V36.679H97.13zM104.575 52.658l2.896-3.46c1.849 1.476 3.914 2.253 6.085 2.253 1.394 0 2.145-.482 2.145-1.286v-.054c0-.777-.616-1.207-3.163-1.797-3.995-.911-7.078-2.037-7.078-5.897v-.054c0-3.485 2.76-6.006 7.265-6.006 3.19 0 5.684.859 7.72 2.494l-2.6 3.673c-1.715-1.207-3.591-1.85-5.253-1.85-1.261 0-1.877.536-1.877 1.207v.053c0 .858.643 1.233 3.244 1.823 4.316.938 6.997 2.333 6.997 5.844v.054c0 3.834-3.03 6.112-7.587 6.112-3.324 0-6.488-1.045-8.794-3.11M123.356 47.215V36.68h5.281v10.43c0 2.707 1.367 3.994 3.459 3.994 2.091 0 3.458-1.234 3.458-3.862V36.68h5.281v10.402c0 6.06-3.458 8.713-8.792 8.713-5.335 0-8.687-2.708-8.687-8.579M153.381 48.046l-2.092-5.335-2.117 5.335h4.21zm-4.558-11.5h5.013l7.99 18.9h-5.577l-1.367-3.352h-7.238l-1.34 3.351h-5.47l7.99-18.9zM163.653 36.68h5.2v14.208h9.09v4.558h-14.29z"
							fill="#FFF" mask="url(#c)" />
					</g>
				</svg>
				<!-- xr logo goes here -->
			</a>
			<nav class="header__nav">
				<?php wp_rig()->display_primary_nav_menu( [ 'menu_id' => 'primary-menu' ] ); ?>
			</nav>
			<div class="header__box justify-between align-center">
				<a href="#" class="btn header__btn">Make an enquiry</a>
				<div class="burger">
					<div class="burger__line"></div>
					<div class="burger__line"></div>
					<div class="burger__line"></div>
				</div>
			</div>	
		</div>
	</div>
</header>