<?php
/**
 * @package Felinos de Burdeos
 * @since Felinos de Burdeos 1.0
 */
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
				<p>© Felinos de Burdeos -Tous droits réservés -<a href="/mentions-legales"> Mentions légales - </a><a href="http://creationsitespau.fr">Site developpé par M. Jimmy Chagnaud</a></p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div>
<?php if(is_page("accueil")){
			echo '
						<script src="'. get_template_directory_uri() .'/js/jquery-3.2.1.min.js"></script>
						<script src="'. get_template_directory_uri() .'/js/modernizr.js"></script>
						<script src="'. get_template_directory_uri() .'/js/lodash.min.js"></script>
						<script src="'. get_template_directory_uri() .'/js/jquery.ba-throttle-debounce.js"></script>
						<script src="'. get_template_directory_uri() .'/js/app.js"></script>
						<script src="'. get_template_directory_uri() .'/js/bootstrap.min.js"></script>'
						;
			} else {
				echo '
						<script src="'. get_template_directory_uri() .'/js/jquery-3.2.1.min.js"></script>
						<script src="'. get_template_directory_uri() .'/js/src/viewer.js"></script>
						<script src="'. get_template_directory_uri() .'/js/bootstrap.min.js"></script>'
						;
			}
?>
</body>
</html>
