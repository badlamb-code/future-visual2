<?php
/**
 * Page - visionxr
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<!-- visionxr-hero -->
<section class="visionxr-hero">
	<div class="visionxr-hero__bg"></div>
	<div class="visionxr-hero__container">
		<h1 class="color-white text-center">
			Work together using VR & AR anywhere and on any platform
		</h1>
		<div class="visionxr-hero__links">
			<a href="#offer" class="visionxr-hero__arrow">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/arrow_white.svg'; ?>" alt="White arrow">
			</a>
			<a href="#visionxr-offer">What we offer</a>
			<a href="#offer">About VISIONxR<sup>TM</sup></a>
			<a href="#offer">How it works</a>
			<a href="#offer">Why VISIONxR<sup>TM</sup></a>
			<a href="#visionxr-form">Get in touch</a>
		</div>
	</div>
</section>
<!-- /visionxr-hero -->
<!-- visionxr-two-column -->
<section class="visionxr-two-column" id="offer">
	<div class="container">
		<div class="visionxr-two-column__intro text-center">
			<h2>What we offer</h2>
			<p>
				A paragraph summarising the two offerings of VISIONxR, about three lines in length. Lorem
				ipsum
				dolor sit amet,
				consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
				aliqua.
				Ut
				enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip.
			</p>
		</div>
		<div class="visionxr-two-column__inner">
			<div class="visionxr-two-column__box">
				<div class="visionxr-two-column__info font-size-16">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/platform.svg' ?>" alt="Platform">
					<p class="visionxr-two-column__heading text-center">
						VISIONxR<sup>TM</sup> <span class="gradient">PLATFORM</span>
					</p>
					<p>
						"VISIONxR™ Plus" enables your company to licence the VISIONxR™ platform and
						customise it for your needs. We will work
						with you to create bespoke content that can be accessed via the platform on any
						device VR, AR, desktop or mobile.
					</p>
					<p>
						Users can review and improve the designs of the products and services they are
						working on, removing the barrier of
						distance and enabling faster iteration in the development and design cycle.
					</p>
				</div>
				<div class="visionxr-two-column__list">
					<p class="bold">
						What you get:
					</p>
					<ul class="reset-list font-size-16">
						<li>Lorem ipsum dolor sit amet</li>
						<li>Consectetur adipiscing elit</li>
						<li>Morbi sagittis magna vel libero commodo</li>
					</ul>
					<a href="" class="btn">Make an enquiry</a>
				</div>
			</div>
			<div class="visionxr-two-column__box">
				<div class="visionxr-two-column__info font-size-16">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/core.svg' ?>" alt="Platform">
					<p class="visionxr-two-column__heading text-center">
						VISIONx<sup>TM</sup> <span class="gradient">PLUS</span>
					</p>
					<p>
						"VISIONxR™ Platform" enables users to upload their own content and invite colleagues
						to work collaboratively regardless
						of their location on any device VR,AR, desktop or mobile.
					</p>
					<p>
						You will be able to bring your teams closer together to learn, train or sell with
						unprecedented speed and efficiency.
						Enabling your organisation to have access to resources that are prohibitively
						expensive or physically impossible to
						build in real life.
					</p>
				</div>
				<div class="visionxr-two-column__list">
					<p class="bold">
						What you get:
					</p>
					<ul class="reset-list font-size-16">
						<li>Lorem ipsum dolor sit amet</li>
						<li>Consectetur adipiscing elit</li>
						<li>Morbi sagittis magna vel libero commodo</li>
						<li>Quis sollicitudin nisi interdum. Cras feugiat erat arcu, vel varius enim mollis
							ut</li>
					</ul>
					<a href="#" class="btn">Make an enquiry</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /visionxr-two-column -->
<!-- visionxr-form -->
<section class="visionxr-form color-white">
	<!-- <div class="visionxr-form__triangle"></div> -->
	<div class="container">
		<div class="visionxr-form__info text-center">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/squares.svg' ?>" alt="Platform">
			<h2 class="color-white">Like to know more?</h2>
			<p class="lead color-white text-left">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis magna vel libero
				commodo,
				quis sollicitudin nisi interdum.
			</p>
		</div>
		<form action="#" method="POST">
			<div>
				<label for="firstname">First name*</label>
				<input type="text" id="firstname" required>
			</div>
			<div>
				<label for="secondname">Second name*</label>
				<input type="text" id="secondname" required>
			</div>
			<div>
				<label for="email">Email Address*</label>
				<input type="email" id="email" required>
			</div>
			<div>
				<label for="subject">Subject*</label>
				<input type="text" id="subject" required>
			</div>
			<div>
				<label for="message">Message*</label>
				<textarea name="" id="message" cols="30" rows="10" required></textarea>
			</div>
			<div>
				<input type="submit" value="Submit enquiry" class="btn">
			</div>
		</form>
	</div>
</section>
<!-- /visionxr-form -->