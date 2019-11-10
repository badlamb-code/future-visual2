<?php
    $url   = urlencode( get_permalink() );
    $title = htmlspecialchars( urlencode( html_entity_decode( get_the_title(), ENT_COMPAT, 'UTF-8' ) ), ENT_COMPAT, 'UTF-8' );

    $twitterURL  = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $url . '&amp;via=Crunchify';
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
    $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&amp;title=' . $title;
?>

<section class="single-content">
    <div class="container">
        <div class="display-flex">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row row--alt">
                <div class="col col-2">
                    <img class="single-content__image" src="<?php echo get_template_directory_uri() . '/assets/images/staff.png' ?>" alt="Staff">
                    <p class="bold ma0"><?php the_author(); ?></p>
                    <p class="font-size-14 ma0">Business Development</p>
                    <p class="font-size-14 ma0">Manager</p>
                </div>
                <div class="single-content__inner col col-8">
                    <?php the_content(); ?>
                </div>
                <div class="col col-2">
                    <div class="single-content__social display-flex flex-column align-center">
                        <p class="ma0 font-size-14">Share</p>
                        <ul class="reset-list">
                            <li class="single-content__facebook">
                                <a href="<?php echo $facebookURL; ?>" target="_blank">
                                    <svg width="42" height="43" xmlns="http://www.w3.org/2000/svg"><g fill="none"><path d="M42 21C42 9.402 32.598 0 21 0S0 9.402 0 21c0 10.481 7.679 19.17 17.719 20.745V27.07h-5.332V21h5.332v-4.627c0-5.263 3.135-8.17 7.932-8.17 2.297 0 4.701.41 4.701.41v5.168h-2.648c-2.609 0-3.423 1.619-3.423 3.28V21h5.824l-.931 6.07h-4.893v14.675C34.321 40.17 42 31.481 42 21" fill="#1877F2"/><path d="M29.174 27.07l.931-6.07h-5.824v-3.94c0-1.66.813-3.279 3.422-3.279h2.648V8.613s-2.403-.41-4.7-.41c-4.797 0-7.933 2.907-7.933 8.17V21h-5.332v6.07h5.332v14.675a21.261 21.261 0 0 0 6.563 0V27.07h4.893z" fill="#FFF"/></g></svg>
                                </a>
                            </li>
                            <li class="single-content__twitter">
                                <a href="<?php echo $twitterURL; ?>" target="_blank">
                                <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M42 21c0 11.598-9.402 21-21 21S0 32.598 0 21 9.402 0 21 0s21 9.402 21 21" fill="#1DA1F2"/><path d="M16.13 31.667c9.906 0 15.323-8.207 15.323-15.323 0-.234-.005-.466-.015-.697a10.98 10.98 0 0 0 2.687-2.789c-.965.429-2.004.718-3.093.849a5.408 5.408 0 0 0 2.368-2.979 10.8 10.8 0 0 1-3.42 1.307 5.387 5.387 0 0 0-9.178 4.911 15.285 15.285 0 0 1-11.1-5.627 5.37 5.37 0 0 0-.73 2.707 5.38 5.38 0 0 0 2.397 4.483 5.347 5.347 0 0 1-2.439-.673c-.002.022-.002.045-.002.068a5.39 5.39 0 0 0 4.321 5.281 5.398 5.398 0 0 1-2.432.091 5.392 5.392 0 0 0 5.031 3.741 10.801 10.801 0 0 1-6.689 2.305c-.434 0-.863-.024-1.284-.074a15.248 15.248 0 0 0 8.255 2.419" fill="#FFF"/></g></svg>
                                </a>
                            </li>
                            <li class="single-content__linkedin">
                                <a href="<?php echo $linkedinURL; ?>" target="_blank">
                                    <svg version="1.1" id="linkedin-logo" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 42 42" xml:space="preserve"><style>.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#fefefe}</style><path id="circle" d="M21 42C9.4 42 0 32.6 0 21S9.4 0 21 0s21 9.4 21 21-9.4 21-21 21z" fill-rule="evenodd" clip-rule="evenodd" fill="#0065a1"/><g id="logo" transform="translate(11.74 9.731)"><path id="Fill-4" class="st1" d="M2-.5C3.4-.5 4.5.6 4.5 2S3.4 4.5 2 4.5-.5 3.4-.5 2 .6-.5 2-.5zM-.2 20.2h4.3V6.4H-.2v13.8z"/><path id="Fill-6" class="st1" d="M6.8 6.4H11v1.9c.6-1.1 2-2.3 4.1-2.3 4.4 0 5.2 2.9 5.2 6.6v7.6H16v-6.7c0-1.6 0-3.7-2.2-3.7s-2.6 1.7-2.6 3.6v6.8H6.8V6.4z"/></g></svg>
                                </a>
                            </li>
                            <li class="single-content__email">
                                <a href="mailto:studio@futurevisual.com" target="_blank">
                                <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M42 21c0 11.598-9.402 21-21 21S0 32.598 0 21 9.402 0 21 0s21 9.402 21 21" fill="#2A486D"/><path fill="#FFF" d="M32 26.86V14.513l-7.192 6.174zm-10.477-5.384l9.137-7.849H11.31l9.196 7.85zM10 14.513V26.86l7.123-6.173zm13.627 7.225l-1.739 1.313h-1.807l-1.71-1.313-7.754 6.635h20.804z"/></g></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <div class="row row--alt justify-center">
            <div class="col col-8">
                <div class="single-content__pagination display-flex justify-between">
                    <div class="display-flex align-center">
                        <?php if(get_previous_post_link()): ?>
                            <img class="single-content__arrow" src="<?php echo get_template_directory_uri() . '/assets/images/arrow_red.svg'; ?>" alt="Red arrow">
                            <?php echo previous_post_link('%link', 'Previous Post'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="display-flex align-center">
                        <?php if(get_next_post_link()): ?>
                            <?php echo next_post_link('%link', 'Next Post'); ?>
                            <img class="single-content__arrow" src="<?php echo get_template_directory_uri() . '/assets/images/arrow_red.svg' ?>" alt="Red arrow">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>