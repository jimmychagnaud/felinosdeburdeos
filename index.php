<?php
/**
 * @package Felinos de Burdeos
 * @since Felinos de Burdeos 1.0
 * Template Name: Model
 */

get_header();
?>
<div class="container" id="content">
	<div class="row text-center">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
				    the_post();
				    the_content();
      }?>
		</div>
	</div>
</div>
<?php get_footer();?>
