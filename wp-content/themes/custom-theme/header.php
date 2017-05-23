<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.theme.default.min.css"/>
	<?php //wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
<section class="logo">
	<div class="col-md-12" style="padding-top: 20px;margin-bottom: 20px;padding-right: 0px;padding-left: 0px;">
		<div class="container">
			<div class="col-md-6 left header-logo">
				<a href="<?php echo get_option('home'); ?>">
					<?php the_custom_logo(); ?>
				</a>
			</div>
			<div class="col-md-6 right header-logo local-contractor">
				<a href="#" class="uppercase violet-button vertical-center">find a local contractor</a>
			</div>
		</div>
	</div>
</section>
<section class="menu" style="background-color: #1d2f5d;height:60px;clear: both;">
	<div class="col-md-12 no-space">
		<div class="container">
			<nav id="nav" role="navigation">
				<a href="#nav" title="Show navigation"></a>
				<a href="#" title="Hide navigation"></a>
				<?php 
					$menuargs = array(
						"theme_location" => "primary",
						"menu_class" => "s-menu",
						"menu_id" => "main-menu",
					);
					$items = wp_get_nav_menu_items( 'main-menu', $menuargs); 
				?> 
				<ul class="clearfix menu-header" style="margin-bottom: 1px !important;z-index: 34 !important;width: 100%;margin-top: 0px; padding-left: 20px;padding-right: 20px;">
					<?php foreach( $items as $item ){ ?>
						<li class="smaller-li"><a href="<?php echo $item->url; ?>" class="left"><?php echo $item->title; ?></a></li>	
					<?php } ?>				
					
					<li class="smaller-li-17 contact-menu"></li>
				</ul>
			</nav>
		</div>
	</div>
</section>
