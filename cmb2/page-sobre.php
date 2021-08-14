<?php

function rest_cmb2_sobre() {
	$cmb = new_cmb2_box([
		'id' => 'sobre_box',
		'title' => 'Sobre',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-sobre.php'
		]
	]);
	$cmb->add_field([
		'name' => 'Foto Rest',
		'id' => 'foto_rest',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
	]);

	$cmb->add_field([
		'name' => 'Texto Historia 1',
		'id' => 'texto_historia_1',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Texto Historia 2',
		'id' => 'texto_historia_2',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Texto Visão',
		'id' => 'texto_visao',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Texto Valores',
		'id' => 'texto_valores',
		'type' => 'text',
	]);
}
