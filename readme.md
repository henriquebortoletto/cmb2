## :rocket: About

Project designed to better understand how native WordPress fields work, with the addition of the plugin [cmb2](https://github.com/CMB2/CMB2/wiki/Field-Types).

Examples:

```php
echo get_post_meta( get_the_ID(), 'chave', true );
```

Examples the samples fields with cmb2.

```php
function cmb2_home() {
		$cmb = new_cmb2_box([
			'id' => 'home',
			'title' => 'Titulo',
			'object_types' => ['page'],
			'show_on' => [
				'key' => 'page-template',
				'value' => 'page-home.php'
			]
		]);

		$cmb->add_field([
			'name' => 'Campo 1',
			'id' => 'campo_1',
			'type' => 'text'
		]);

		$cmb->add_field([
			'name' => 'Campo 2',
			'id' => 'campo_2',
			'type' => 'textarea'
		]);
	}

add_action( 'cmb2_admin_init', 'cmb2_home' );
```

Example the loops fields with cmb2.

```php
function cmb2_home() {
	$cmb = new_cmb2_box([
		'id' => 'home',
		'title' => 'Menu da Semana',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-principal.php'
		]
	]);

	$pratos2 = $cmb->add_field([
		'name' => 'Repetidor',
		'id' => 'repetidor',
		'type' => 'group',
		'repeteable' => 'true',
		'options' => [
			'group_title' => 'Titulo {#}',
			'add_button' => 'Adicionar',
			'remove_button' => 'Remover',
			'sortable' => true
		],
	]);

	$cmb->add_group_field($pratos2, [
		'name' => 'Campo 1',
		'id' => 'campo_1',
		'type' => 'text'
	]);

	$cmb->add_group_field($pratos2, [
		'name' => 'Campo 2',
		'id' => 'campo_2',
		'type' => 'text'
	]);
}
```

Example the loops fields with cmb2.

```php
<?php $campos = get_field( 'campo' ); ?>

<?php if ( isset( $campos ) ): ?>
	<?php foreach( $campos as $campo ): ?>
		<h3><?= $campo['name']; ?></h3>
		<p><?= $campo['description']; ?></p>
	<?php endforeach; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde ao seu critério' )?></p>
<?php endif; ?>
```

---
