<?php /* Template Name: Página CMB2 */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>

		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<?php $page_id = get_page_by_title( 'Menu da Semana' )->ID; ?>
			<?php $pratos1 = get_field('pratos_1', $page_id); ?>

			<?php if ( isset($pratos1) ): ?>
			<div class="menu-item grid-8">
				<h2><?php the_field('especialidade_prato_1', $page_id); ?></h2>
				<ul>
					<?php foreach( $pratos1 as $prato1 ): ?>
						<li>
							<span><sup>R$</sup><?= $prato1['preco']; ?></span>
							<div>
								<h3><?= $prato1['nome']; ?></h3>
								<p><?= $prato1['descricao']; ?></p>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php else: ?>
				<p><?php esc_html_e( 'Desculpe, nenhum post corresponde ao seu critério' )?></p>
			<?php endif; ?>

			<?php $pratos2 = get_field('pratos_2', $page_id); ?>

			<?php if ( isset($pratos2) ): ?>
				<div class="menu-item grid-8">
					<h2><?php the_field('especialidade_prato_2', $page_id); ?></h2>
					<ul>
						<?php foreach( $pratos2 as $prato2 ): ?>
							<li>
								<span><sup>R$</sup><?= $prato2['preco']; ?></span>
								<div>
									<h3><?= $prato2['nome']; ?></h3>
									<p><?= $prato2['descricao']; ?></p>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php else: ?>
				<p><?php esc_html_e( 'Desculpe, nenhum post corresponde ao seu critério' ); ?></p>
			<?php endif; ?>

		</section>

	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde ao seu critério' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
