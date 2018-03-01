<?php
/**
 * @package Le royaume des licornes
 * @since Le royaume des licornes 1.0
 */
  $args = ['post_type' => 'block'];
  $loop = new WP_Query($args);

  if ($loop->have_posts()) {
      while($loop->have_posts()) : $loop->the_post();
      $footerHoraires = get_field('horaires');
      $footerPaiement = get_field('paiement');
      endwhile;
  }
?>
	<div class="viewer">
		<div class="viewer-content">
			<img src="" alt="">
		</div>
	</div>
	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container text-center">
				<p>© Le royaume des licornes -Tous droits réservés -<a href="/mentions-legales"> Mentions légales - </a><a href="http://creationsitespau.fr">Site developpé par M. Jimmy Chagnaud</a></p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
</body>
</html>
