<?php
/**
 * The footer for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>


<div class="container">
	<div class="row justify-between">
		<div class="row align-start flex-grow justify-between">
			<a href="#" class="footer__logo">
				<?php get_template_part( 'template-parts/partials/logo' ); ?>
			</a>
			<div class="footer__social">
				<p class="color-white font-size-16">Follow us</p>
				<ul class="reset-list">
					<li>
						<a href="#">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/facebook-logo-purple.svg' ) ); ?>" alt="Facebook">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/twitter-logo-purple.svg' ) ); ?>" alt="Twitter">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/linkedin-logo-purple.svg' ) ); ?>" alt="LinkedIn">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<form action="" method="POST" class="footer__form">
			<label for="subscribe" class="color-white font-size-16">Sign up with your email address to receive news
				and updates.</label>
			<div>
				<input type="email" id="subscribe" required class="color-white"
					placeholder="Email Address">
				<input type="submit" value="Subscribe" class="btn">
			</div>
		</form>
	</div>
	<ul class="footer__nav reset-list">
		<li>
			<a href="#">Privacy Policy</a>
		</li>
		<li>
			<a href="">Terms and conditions</a>
		</li>
		<li>
			<a href="">Cookies</a>
		</li>
		<li>All content copyright FutureVisual 2019</li>
	</ul>
</div>
