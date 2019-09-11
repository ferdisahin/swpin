<?php
require_once get_template_directory() . '/mvc/plugins/tgm/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'swpin_register_required_plugins' );
function swpin_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Kirki',
			'slug'      => 'kirki',
			'required'  => true,
		),
    );
    
	$config = array(
		'id'           => 'swpin',
		'default_path' => '', 
		'menu'         => 'swpin-plugins', 
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options', 
		'has_notices'  => true,
		'dismissable'  => false,
		'dismiss_msg'  => '', 
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}