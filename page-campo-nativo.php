<?php /* Template Name: Página Campo Nativo */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			<div class="grid-8">
				<img src="<?= get_template_directory_uri(); ?>/img/rest-fachada.jpg" alt="Fachada do Rest">
			</div>
			<div class="grid-8">
				<h2>História</h2>
				<p><?= get_post_meta( get_the_ID(), 'historia-p-1', true ); ?></p>
				<p><?= get_post_meta( get_the_ID(), 'historia-p-2', true ); ?></p>
				<h2>Visão</h2>
				<p><?= get_post_meta( get_the_ID(), 'valores-p-1', true ); ?></p>
				<h2>Valores</h2>
				<p><?= get_post_meta( get_the_ID(), 'visao-p-1', true ); ?></p>
			</div>
		</section>
	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde ao seu critério '); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
