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