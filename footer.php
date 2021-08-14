		<footer>
			<nav class="nav-footer">
				<ul>
					<li class="current_page_item"><a href="<?php bloginfo( 'url' ); ?>">Menu</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/sobre/">Sobre</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/contato/">Contato</a></li>
				</ul>
			</nav>
			<p><?php bloginfo( 'name' ); ?> &copy; <?= Date( 'Y' ); ?>. Alguns direitos reservados.</p>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
