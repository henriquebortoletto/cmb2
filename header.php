<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '-' ); ?></title>
		<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<header>
			<nav>
				<ul>
					<li class="current_page_item"><a href="<?php bloginfo( 'url' ); ?>">Menu</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/sobre/">Sobre</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/contato/">Contato</a></li>
				</ul>
			</nav>

			<h1><img src="<?= get_template_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

			<?php $header = get_page_by_title( 'Menu da Semana' )->ID; ?>
			<?php $cmb2 = get_page_by_title( 'CMB2' )->ID; ?>

			<p><?php the_field( 'endereco', $header ); ?></p>
			<p class="telefone"><?php the_field( 'telefone_rest', $header ); ?></p>
			<p><?php the_field( 'campo_cmb2', $cmb2 ); ?></p>
		</header>
