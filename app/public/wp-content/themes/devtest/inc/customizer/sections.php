<?php
/**
 * Customizer sections.
 *
 * @package devtest
 */

namespace devtest\devtest;

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'devtest_additional_scripts_section',
		[
			'title'    => esc_html__( 'Additional Scripts', 'devtest' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a social links section.
	$wp_customize->add_section(
		'devtest_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'devtest' ),
			'description' => esc_html__( 'Links here power the print_social_network_links() template tag.', 'devtest' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'devtest_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'devtest' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'devtest_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'devtest' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', __NAMESPACE__ . '\customize_sections' );
