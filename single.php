<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-single' );

?>
	<main id="primary" class="site-main">
		<?php get_template_part('template-parts/single/hero'); ?>
		<?php get_template_part('template-parts/single/content'); ?>
		<?php get_template_part('template-parts/single/banner'); ?>
	</main><!-- #primary -->
<?php
get_footer();
