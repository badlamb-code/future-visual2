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
			<a href="#visionxr-about">About VISIONxR<sup>TM</sup></a>
			<a href="#visionxr-how">How it works</a>
			<a href="#visionxr-why">Why VISIONxR<sup>TM</sup></a>
			<a href="#visionxr-form">Get in touch</a>
		</div>
		<a href="#visionxr-offer" class="visionxr-hero__mobile-arrow align-center">
			<p class="color-white bold">More</p>
			<img src="<?php echo get_template_directory_uri() . '/assets/images/arrow_red.svg'; ?>" alt="Red arrow">
		</a>
	</div>
</section>
<!-- /visionxr-hero -->
<!-- visionxr-two-column -->
<section class="visionxr-two-column" id="visionxr-offer">
	<div class="container">
		<div class="visionxr-two-column__intro text-center">
			<img class="visionxr-two-column__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo_alt.svg'; ?>" alt="VISIONXR">
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
						VISIONxR<sup>TM</sup> <span class="gradient">PLUS</span>
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
<!-- visionxr-about -->
<section class="visionxr-about" id="visionxr-about">
	<div class="visionxr-about__bg bg-cover"></div>
	<div class="container">
		<div class="visionxr-about__container">
			<h2 class="color-white text-center ma0">About VISIONxR<sup>TM<sup></h2>
			<div class="visionxr-about__box display-flex align-center">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/about.svg'; ?>" alt="About">
				<p class="color-white">
					A paragraph summarising VISIONxR’s absolute top-level proposition, about three lines in length. Lorem ipsum dolor sit amet consectetur adipiscing elit. Morbi sagittis magna vel libero commodo, quis sollicitudin nisi interdum. 
				</p>
			</div>
			<div class="visionxr-about__box display-flex align-center justify-between">
				<p class="color-white bold">
					Collaborate, communicate, solve problems, train, and learn together.
				</p>
				<img src="<?php echo get_template_directory_uri() . '/assets/images/collaboration.svg'; ?>" alt="Collaboration">
			</div>
		</div>
	</div>
</section>
<!-- /visionxr-about -->
<!-- visionxr-how -->
<section class="visionxr-how color-white bg-cover" id="visionxr-how">
	<div class="container">
		<div class="visionxr-how__container">
			<h2 class="ma0 color-white text-center">How it works</h2>
			<div class="visionxr-how__inner display-flex justify-between">
				<img class="visionxr-how__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo_alt.svg'; ?>" alt="XR">
				<figure class="visionxr-how__box">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/vr_headset.svg'; ?>" alt="VR Headset">
					<figcaption>VR</figcaption>
				</figure>
				<figure class="visionxr-how__box">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/headset.svg'; ?>" alt="AR Headset">
					<figcaption>AR</figcaption>
				</figure>
				<figure class="visionxr-how__box">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/desktop.svg'; ?>" alt="Desktop">
					<figcaption>DESKTOP</figcaption>
				</figure>
				<figure class="visionxr-how__box">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/mobile.svg'; ?>" alt="Mobile">
					<figcaption>MOBILE</figcaption>
				</figure> 
			</div>
			<div class="visionxr-how__inner-alt">
				<h3 class="color-white ma0">All platforms</h3>
				<p>
					VISIONxR™ supports VR, AR, mobile and desktop. If you’re in a remote office, just use your laptop. On the move? Use the phone in your pocket. Or for full immersion, use any VR headset.
				</p>
			</div>
			<div class="visionxr-how__inner-alt">
				<h3 class="color-white ma0">Across verticals</h3>
				<p>
					The VISIONxR™ framework can be used across many markets:
				</p>
				<div class="visionxr-how__icons">
					<div class="visionxr-how__icon">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/enterprise.svg'; ?>" alt="Enterprise">
						<p>Enterprise</p>
					</div>
					<div class="visionxr-how__icon">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/aec.svg'; ?>" alt="AEC">
						<p>AEC</p>
					</div>
					<div class="visionxr-how__icon">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/education.svg'; ?>" alt="Education">
						<p>Education</p>
					</div>
					<div class="visionxr-how__icon">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/training.svg'; ?>" alt="Training">
						<p>Training</p>
					</div>
					<div class="visionxr-how__icon">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/retail.svg'; ?>" alt="Retail">
						<p>Retail</p>
					</div>
					<div class="visionxr-how__icon">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/gaming.svg'; ?>" alt="Gaming">
						<p>Gaming</p>
					</div>
					<div class="visionxr-how__icon">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/entertainment.svg'; ?>" alt="Entertainment">
						<p>Entertainment</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /visionxr-how -->
<!-- visionxr-why -->
<section class="visionxr-why" id="visionxr-why">
	<div class="visionxr-why__bg bg-cover bg-cover"></div>
	<div class="container">
		<h2 class="ma0 color-white text-center">Why VISIONxR?</h2>
		<div class="visionxr-why__inner">
			<div class="visionxr-why__box">
				<div>
					<p>94%</p>
				</div>
				<div>
					<p>of trainees want <span>more VR</span></p>
				</div>
			</div>
			<div class="visionxr-why__box">
				<div>
					<p>75%</p>
				</div>
				<div>
					<p>retention rate with VR</p>
				</div>
			</div>
			<div class="visionxr-why__box">
				<div>
					<p>80%</p>
				</div>
				<div>
					<p>
						of employees believe they are better prepared for their job after VR training
					</p>
				</div>
			</div>
			<div class="visionxr-why__box">
				<div>
					<p>82%</p>
				</div>
				<div>
					<p>
						of trainees say VR is better than any other training
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /visionxr-why -->
<!-- visionxr-slider -->
<div class="visionxr-slider text-center" >
	<div class="visionxr-slider__slides">
		<button class="visionxr-slider__arrow visionxr-slider__arrow--previous"></button>
		<div class="color-white">
			<p class="bold">
				“VISIONxR™ can fulfil an important role enabling collaboration in the world of advanced manufacturing.”
			</p>
			<p class="bold font-size-16 ma0">
				Christopher Freeman
			</p>
			<p class="font-size-16 ma0">
				Advanced Manufacturing Research Centre
			</p>
		</div>
		<button class="visionxr-slider__arrow"></button>
	</div>
	<div class="visionxr-slider__buttons">
		<button class="active"></button>
		<button></button>
		<button></button>
	</div>
</div>
<!-- /visionxr-slider -->
<!-- visionxr-form -->
<section class="visionxr-form color-white bg-cover" id="visionxr-form">
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