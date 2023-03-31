<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package devtest
 */

namespace devtest\devtest;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'devtest' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'devtest' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'devtest' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'devtest' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'devtest' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'devtest' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'devtest' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'devtest' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
