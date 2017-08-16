<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mint_Show
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mint-show' ); ?></a>

	<div id="content" class="site-content"> -->

		<div class="ms-banner-wrapper">

			<!--  below is the mint-show logo -->
			<div class="ms-banner-logo-wrap">
				<img src="<?php bloginfo('template_url'); ?>/img/mint-show-logo.png" class="img-responsive ms-banner-logo">
			</div>
			<!-- ms-banner-logo-wrap -->

		</div>
		<!--  ms-banner-wrapper -->