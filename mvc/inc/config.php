<?php
if ( class_exists( 'Kirki' ) ) {
// Languages Section
Kirki::add_section( 'swpin_languages', array(
    'title'          => esc_html__('SWPIN - Languages', 'swpin'),
    'description'    => esc_html__( 'SWPIN Languages Section.', 'swpin' ),
    'priority'       => 200,
));

Kirki::add_field( 'search_text', [
    'type'     => 'text',
    'settings' => 'search_text',
	'label'    => esc_html__( 'Search', 'swpin' ),
	'section'  => 'swpin_languages',
	'default'  => esc_html__( 'Search', 'swpin' ),
	'priority' => 10,
]);

Kirki::add_field( 'featured_text', [
    'type'     => 'text',
    'settings' => 'featured_text',
	'label'    => esc_html__( 'Featured Posts', 'swpin' ),
	'section'  => 'swpin_languages',
	'default'  => esc_html__( 'Featured Posts', 'swpin' ),
	'priority' => 10,
]);

Kirki::add_field( 'not_found_text', [
    'type'     => 'text',
    'settings' => 'not_found_text',
	'label'    => esc_html__( 'Page Not Found', 'swpin' ),
	'section'  => 'swpin_languages',
	'default'  => esc_html__( 'Page Not Found', 'swpin' ),
	'priority' => 10,
]);

// General Section
Kirki::add_section( 'swpin_general', array(
    'title'          => esc_html__('SWPIN - General', 'swpin'),
    'description'    => esc_html__( 'SWPIN General Section.', 'swpin' ),
    'priority'       => 201,
));

Kirki::add_field( 'featured_switch', [
	'type'        => 'switch',
	'settings'    => 'featured_switch',
	'label'       => esc_html__( 'Featured Posts', 'swpin' ),
	'section'     => 'swpin_general',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'swpin' ),
		'off' => esc_html__( 'Disable', 'swpin' ),
	],
]);

Kirki::add_field( 'featured_cat', [
    'type'        => 'select',
    'label'       => esc_html__( 'Featured Posts Category', 'swpin' ),
	'settings'    => 'featured_cat',
	'section'     => 'swpin_general',
    'default'     => '',
    'placeholder' => esc_attr__( 'Select an option', 'swpin' ), 
    'priority'    => 10,
    'choices'     => Kirki_Helper::get_terms( 'category' ),
] );

Kirki::add_field( 'content_select', [
	'type'        => 'select',
	'settings'    => 'content_select',
	'label'       => esc_html__( 'Post Style', 'kirki' ),
	'section'     => 'swpin_general',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'1' => esc_html__( 'Style 1', 'kirki' ),
		'2' => esc_html__( 'Style 2', 'kirki' ),
	],
] );

// Single Section
Kirki::add_section( 'swpin_single', array(
    'title'          => esc_html__('SWPIN - Single', 'swpin'),
    'description'    => esc_html__( 'SWPIN Single Post Section.', 'swpin' ),
    'priority'       => 202,
));

Kirki::add_field( 'thumbnail_switch', [
	'type'        => 'switch',
	'settings'    => 'thumbnail_switch',
	'label'       => esc_html__( 'Post Thumbnail', 'swpin' ),
	'section'     => 'swpin_single',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'swpin' ),
		'off' => esc_html__( 'Disable', 'swpin' ),
	],
]);

Kirki::add_field( 'author_switch', [
	'type'        => 'switch',
	'settings'    => 'author_switch',
	'label'       => esc_html__( 'Author Box', 'swpin' ),
	'section'     => 'swpin_single',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'swpin' ),
		'off' => esc_html__( 'Disable', 'swpin' ),
	],
]);

Kirki::add_field( 'related_switch', [
	'type'        => 'switch',
	'settings'    => 'related_switch',
	'label'       => esc_html__( 'Related Posts', 'swpin' ),
	'section'     => 'swpin_single',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'swpin' ),
		'off' => esc_html__( 'Disable', 'swpin' ),
	],
]);

// Ad Section
Kirki::add_section( 'swpin_ad', array(
    'title'          => esc_html__('SWPIN - Ad', 'swpin'),
    'description'    => esc_html__( 'SWPIN Ad Section.', 'swpin' ),
    'priority'       => 203,
));

Kirki::add_field( 'header_ad', [
	'type'     => 'textarea',
	'settings' => 'header_ad',
	'label'    => esc_html__( 'Header Ad', 'swpin' ),
	'section'  => 'swpin_ad',
	'priority' => 10,
] );

Kirki::add_field( 'post_top_ad', [
	'type'     => 'textarea',
	'settings' => 'post_top_ad',
	'label'    => esc_html__( 'Post Top Ad', 'swpin' ),
	'section'  => 'swpin_ad',
	'priority' => 10,
] );

Kirki::add_field( 'post_bottom_ad', [
	'type'     => 'textarea',
	'settings' => 'post_bottom_ad',
	'label'    => esc_html__( 'Post Bottom Ad', 'swpin' ),
	'section'  => 'swpin_ad',
	'priority' => 10,
] );

// Footer Section
Kirki::add_section( 'swpin_footer', array(
    'title'          => esc_html__('SWPIN - Footer', 'swpin'),
    'description'    => esc_html__( 'SWPIN Footer Section.', 'swpin' ),
    'priority'       => 203,
));

Kirki::add_field( 'copyright_text', [
    'type'     => 'text',
    'settings' => 'copyright_text',
	'label'    => esc_html__( 'Copyright', 'swpin' ),
	'section'  => 'swpin_footer',
	'priority' => 10,
]);
}