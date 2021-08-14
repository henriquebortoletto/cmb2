<?php

function rest_cmb2_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'Endereco Header',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-principal.php'
		]
	]);

	$cmb->add_field([
		'name' => 'Endereco',
		'id' => 'endereco',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Telefone Rest',
		'id' => 'telefone_rest',
		'type' => 'text',
	]);
}

function rest_cmb2_home1() {
	$cmb = new_cmb2_box([
		'id' => 'home_box_1',
		'title' => 'Menu da Semana',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-principal.php'
		]
	]);

	$pratos1 = $cmb->add_field([
		'name' => 'Pratos 1',
		'id' => 'pratos_1',
		'type' => 'group',
		'repeteable' => 'true',
		'options' => [
			'group_title' => 'Prato {#}',
			'add_button' => 'Adicionar Prato',
			'remove_button' => 'Remover Prato',
			'sortable' => true
		],
	]);

	$cmb->add_field([
		'name' => 'Especialidade Prato 1',
		'id' => 'especialidade_prato_1',
		'type' => 'text'
	]);

	$cmb->add_group_field($pratos1, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text'
	]);

	$cmb->add_group_field($pratos1, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text'
	]);

	$cmb->add_group_field($pratos1, [
		'name' => 'Preço',
		'id' => 'preco',
		'type' => 'text'
	]);
}

function rest_cmb2_home2() {
	$cmb = new_cmb2_box([
		'id' => 'home_box_2',
		'title' => 'Menu da Semana',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-principal.php'
		]
	]);

	$pratos2 = $cmb->add_field([
		'name' => 'Pratos 2',
		'id' => 'pratos_2',
		'type' => 'group',
		'repeteable' => 'true',
		'options' => [
			'group_title' => 'Prato {#}',
			'add_button' => 'Adicionar Prato',
			'remove_button' => 'Remover Prato',
			'sortable' => true
		],
	]);

	$cmb->add_field([
		'name' => 'Especialidade Prato 2',
		'id' => 'especialidade_prato_2',
		'type' => 'text'
	]);

	$cmb->add_group_field($pratos2, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text'
	]);

	$cmb->add_group_field($pratos2, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text'
	]);

	$cmb->add_group_field($pratos2, [
		'name' => 'Preço',
		'id' => 'preco',
		'type' => 'text'
	]);
}
