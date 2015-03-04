			<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="footer uwotadblock">
					<div class="wrap cf">
						<h2>We &lt;3 our sponsors</h2>
						<?php
						$images = glob(get_template_directory() . '/library/images/sponsors/*.png');
						foreach ($images as $image) {
							$image = str_replace(get_template_directory(), get_template_directory_uri(), $image);
							if (strstr($image, '@2x') === false) {
								echo '<img src="'. $image . '">';
							}
						}
						?>
					</div>
				</div>

				<div class="footer main">
					<div id="inner-footer" class="wrap cf">
						<h2>Obligatory bottom of website</h2>

						<div class="text">
							&copy; <?php echo date('Y'); ?> AnimeUNSW. Images are copyright their respective owners.
							<div>Design MURAMIDOKI created with &lt;3 by your 2015 Media Director.</div>
						</div>

						<div class="logos">
							<a href="http://animesydney.org/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/animesydney-logo.png">
							</a>
							<a href="http://arc.unsw.edu.au/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/arc-logo.png">
							</a>
						</div>

						<aside class="background-text">
							自分を、世界さえも変えてしまえそうな...
						</aside>
					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
