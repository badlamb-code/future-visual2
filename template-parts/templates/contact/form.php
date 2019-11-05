<section class="contact-form bg-cover">
    <div class="container">
        <div class="row row--alt justify-between">
            <div class="col col-66">
                <p class="ma0 bold">Contact</p>
                <h1 class="ma0">Get in touch to discuss your next VR project.</h1>
            </div>
            <div class="col col-33">
                <img class="contact-form__image" src="<?php echo get_template_directory_uri() . '/assets/images/contact.svg'; ?>" alt="Icons">
            </div>
        </div>
        <div class="row row--alt justify-between">
            <div class="col col-25">
                <p class="bold">Visit:</p>
                <address>
                    <p class="ma0">29-30 Castle Street,</p>
                    <p class="ma0">Brighton,</p> 
                    <p class="ma0">BN1 2HD</p>
                </address>
                <p class="bold ma0">Email:</p>
                <a href="mailto:studio@futurevisual.com">studio@futurevisual.com</a>
                <p class="bold ma0 mt4">Follow</p>
                <ul class="reset-list">
                    <li>
                        <a href="#">Twitter</a>
                    </li>
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <a href="#">Linkedin</a>
                    </li>
                </ul>
            </div>
            <div class="col col-75">
                <p class="bold">Leave a message</p>
                <div class="form--alt">
                    <?php get_template_part('template-parts/blocks/form'); ?>
                </div>
            </div>
        </div>
    </div>
</section>