<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 * Template Name: Accueil
 */

get_header();
?>
<div class="contentPage container">
	<div class="row text-center">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
							the_post();
							the_content();
						};
						wp_reset_query();
			?>
		</div>
	</div>
<?php get_footer();?>
