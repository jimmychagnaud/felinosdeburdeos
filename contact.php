<?php
/**
 * @package Felinos de Burdeos
 * @since Felinos de Burdeos 1.0
 * Template Name: Contact
 */

get_header();?>
<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg3 Vd.jpg');"></div>
<div class="container" id="content">
	<div class="row text-center textContact">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
				    the_post();
				    the_content();
				  ?>
		</div>
	</div>
	<div class="container contactForm">
		<div class="row">
			<div class="col-md-6">
				<div class="row text-center">
					<div class="col-md-12">
						<h2>Contactez moi !</h2>
						<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
							<?php echo do_shortcode(get_field('shortcodeContact')); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row text-center">
					<div class="col-md-12">
						<h2>Ou me trouver ?</h2>
						<p>Gimenez Florence - 33440 Ambares</p>
						<p>
							<span class="glyphicon glyphicon-phone"></span> 06 70 21 35 18
							<span class="glyphicon glyphicon-envelope"></span> contact@felinosdeburdeos.fr
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.4590779856735!2d-0.4905849845766073!3d44.934334676662885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd552c32b1a55ead%3A0x317460a09a8e026d!2s63+Rue+des+Blandats%2C+33440+Ambar%C3%A8s-et-Lagrave!5e0!3m2!1sfr!2sfr!4v1520007885196" width="100%" height="450" style="border:0; padding: 10px;" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }; wp_reset_query(); get_footer();?>