<?php

function rest_disabled_scripts_header() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}

function rest_cmb2_css() {
	wp_register_style( 'rest-style', get_template_directory_uri() . '/css/style.css', [], "1.0.0", false );
	wp_enqueue_style( 'rest-style' );
}

function get_field( $chave, $page_id = 0, $unique = true ) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta( $id, $chave, $unique );
}

function the_field( $chave, $page_id = 0, $unique = true ) {
	echo get_field( $chave, $page_id, $unique );
}
