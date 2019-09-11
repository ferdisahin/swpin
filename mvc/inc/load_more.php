<?php

function swpin_loadmore_ajax_handler(){
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
	query_posts( $args );
 
	if( have_posts() ) :
		while( have_posts() ): the_post();
			$content_select = get_theme_mod('content_select');
			switch($content_select){
				case 2:
					get_template_part('mvc/template-parts/post/content-2');
				break;
				default:
					get_template_part('mvc/template-parts/post/content');
			}
		endwhile;
 
	endif;
	die;
}
add_action('wp_ajax_loadmore', 'swpin_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'swpin_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function swpin_my_load_more_scripts() {
 
	global $wp_query; 
	if(!is_single()){
		wp_enqueue_script('jquery');
		wp_register_script( 'swpin_loadmore', get_stylesheet_directory_uri() . '/mvc/public/loadmore.js', array('jquery') );
	};
	wp_localize_script( 'swpin_loadmore', 'swpin_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
		'posts' => json_encode( $wp_query->query_vars ),
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'swpin_loadmore' );
}
add_action( 'wp_enqueue_scripts', 'swpin_my_load_more_scripts' );