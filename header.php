<?php
/**
 * @package Felinos de Burdeos
 * @since Felinos de Burdeos 1.0
 */
$args = ['post_type' => 'actu'];
  $loop = new WP_Query($args);

  if ($loop->have_posts()) :
		while($loop->have_posts()) : $loop->the_post();
		$text = get_the_title();
		endwhile;
	endif;
	wp_reset_query();
?>

<!DOCTYPE html>
<html <?php language_attributes();?> style="margin-top: 0 !important;">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<?php wp_head();?>
</head>
<body class="bg" <?php echo is_page('accueil') ? 'style="overflow: hidden;"' : 'style="overflow: auto"'; ?>>
<div id="barre">
    Actualité: <?php echo $text; ?>
    <div id="fermer"></div>
</div>
<div class="se-pre-con"></div>
	<div class="headerDiv" <?php echo is_page('accueil') ? 'style="background-color: rgba(0, 0, 0, .3);"' : 'style="background-color: #2c3030;"'; ?>>
		<div class="container" id="headerPage">
	    <header>
				<nav class="navbar navbar-default">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top" aria-expanded="false">
			        <span class="sr-only">Afficher le menu</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="/">
			        <img alt="Brand" src="<?php echo get_template_directory_uri() ?>/img/logoTemp.png">
			      </a>
			    </div>
			    <div class="collapse navbar-collapse" id="navbar-collapse-top">
		       	<?php wp_nav_menu([
									  'theme_location' => 'Top',
									  'menu_id'        => 'top-menu',
									  'menu_class'     => 'nav navbar-nav navbar-right',
									]);?>
			    </div>
				</nav>
			</header>
		</div>
	</div>
<div class="site-content" <?php echo is_page('accueil') ? 'id="homepage"' : ''; ?>>
