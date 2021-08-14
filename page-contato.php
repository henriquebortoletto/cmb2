<?php /* Template Name: Página Contato */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			<div class="grid-16">
				<a href="https://www.google.com.br/maps" target="_blank">
					<?php $imagem = wp_get_attachment_image_src( get_field( 'rest_mapa_id' ), 'full' )[0]; ?>
					<img src="<?= $imagem; ?>" alt="Mapa do Rest">
				</a>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Dados</h2>
				<p>21 2422-9999</p>
				<p>contato@rest.com</p>
				<p>facebook.com/rest/</p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Horários</h2>
				<p>Segunda à Sexta: 10 às 23</p>
				<p>Sábado: 14 às 23</p>
				<p>Domingo: 14 às 22</p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Endereço</h2>
				<p>Rua Marechal, 29</p>
				<p>Copacabana - Rio de Janeiro</p>
				<p>Brasil - Terra - Via Láctea</p>
			</div>
		</section>
	<?php endwhile; ?>
<?php else: ?>
	<p><?php esc_html_e( 'Desculpe, nenhum post corresponde ao seu critério' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
