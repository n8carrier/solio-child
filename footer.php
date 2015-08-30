<?php
$g_settings = get_option('g_settings');
?>

		<footer>
				<div class="wrapper">
				<p>&copy; Copyright <?= date('Y'); ?> <?php bloginfo('name'); ?>&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;&nbsp;Built on Wordpress with a theme adapted from <a style="footer-link" href="http://medialoot.com/item/solio-free-single-page-portfolio-wp-theme/">Solio</a></p>
				
			<?php wp_footer(); ?>
			
		</footer>
				
		<?php echo $g_settings['footercode']; ?>

	</body>
</html>