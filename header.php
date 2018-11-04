<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Penscratch 2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'penscratch-2' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="nav-title">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						shane<span class="bold">oneill</span>.io
					</a>
				</h1>
			<?php else : ?>
			<p class="site-title">
				<a href="<?php echo esc_url(  home_url( '/' ) ); ?>" rel="home">
						shane<span style="font-weight:bold">oneill</span>.io
				</a>
			</p>
			<?php
			endif;
			?>
		</div>
		<div class="site-branding">
			<div class="container">
				<div class="row">
					<div class="col-xs-5">
						<span class="my-pull-right">
						<?php
						the_custom_logo();
						?>
						</span>
					</div>
					<div class="col-xs-7">
						<div class="col-xs-12">
							<span class="pull-left">
								<span class="synopsis">NAME:</span>
								<span class="synopsis-key"> Shane</span>
							</span>
						</div>
						<div class="col-xs-12">
							<span class="pull-left">
								<span class="synopsis">HANDLE:</span>
								<span class="synopsis-key"> zeevo</span>
							</span>
						</div>
						<div class="col-xs-12">
							<span class="pull-left">
								<span class="synopsis">OCCUPATION:</span>
								<span class="synopsis-key"> Coder</span>
							</span>
						</div>
						<div class="col-xs-12">
							<span class="pull-left">
								<span class="synopsis">MOTTO:</span>
								<span class="synopsis-key"> Hack the planet.</span>
							</span>
						</div>
					</div>
				</div>
			</div>

		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><rect x="0" fill="none" width="16" height="16"/><g><path id="menu-icon" d="M0 14h16v-2H0v2zM0 2v2h16V2H0zm0 7h16V7H0v2z"/></g></svg>
				<?php esc_html_e( 'Menu', 'penscratch-2' ); ?>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="custom-header" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
			</a>
		<?php endif;  // End header image check. ?>
