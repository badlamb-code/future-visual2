<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );

?>
	<main id="primary" class="site-main">
		<?php get_template_part('template-parts/front-page/hero'); ?>
		<?php get_template_part('template-parts/front-page/banner'); ?>
		<?php get_template_part('template-parts/front-page/banner-alt'); ?>
		<?php get_template_part('template-parts/front-page/slider'); ?>
		<?php get_template_part('template-parts/front-page/posts'); ?>
	</main>
<?php
get_footer();
