<?php
/**
 * Template Name: Scaffolding
 *
 * Template Post Type: page, scaffolding, devtest_scaffolding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package devtest
 */

use function devtest\devtest\main_classes;

get_header(); ?>

	<main id="main" class="<?php echo esc_attr( main_classes( [ 'relative' ] ) ); ?>">

		<?php do_action( 'devtest_scaffolding_content' ); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
