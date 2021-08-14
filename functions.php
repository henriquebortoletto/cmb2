<?php

require get_template_directory() . '/cmb2/global.php';
require get_template_directory() . '/cmb2/page-principal.php';
require get_template_directory() . '/cmb2/page-sobre.php';
require get_template_directory() . '/cmb2/page-contato.php';

add_action( 'init', 'rest_disabled_scripts_header' );
add_action( 'wp_enqueue_scripts', 'rest_cmb2_css'  );
add_action( 'cmb2_admin_init', 'rest_cmb2_home'    );
add_action( 'cmb2_admin_init', 'rest_cmb2_home1'   );
add_action( 'cmb2_admin_init', 'rest_cmb2_home2'   );
add_action( 'cmb2_admin_init', 'rest_cmb2_sobre'   );
add_action( 'cmb2_admin_init', 'rest_cmb2_contato' );
