<?php

function rest_cmb2_contato() {
	$cmb = new_cmb2_box([
		'id' => 'contato_box',
		'title' => 'Contato',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-contato.php'
		]
	]);

	$cmb->add_field([
		'name' => 'Rest Mapa',
		'id' => 'rest_mapa',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
	]);
}
