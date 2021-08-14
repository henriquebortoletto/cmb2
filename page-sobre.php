<?php /* Template Name: Página Sobre */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			<div class="grid-8">
				<img src="<?php the_field( 'foto_rest' ); ?>" alt="Fachada do Rest">
			</div>
			<div class="grid-8">
				<h2>História</h2>
				<p><?php the_field( 'texto_historia_1' ); ?></p>
				<p><?php the_field( 'texto_historia_2' ); ?></p>
				<h2>Visão</h2>
				<p><?php the_field( 'texto_visao' ); ?></p>
				<h2>Valores</h2>
				<p><?php the_field( 'texto_valores' ); ?></p>
			</div>
		</section>
	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde ao seu critério '); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
