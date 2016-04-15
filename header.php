<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DapItUp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dapitup' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dapitup' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            <!-- Shopping Bag -->
            <div class="shopping-bag">
                <a href="localhost:3000/dapitup-wp/shopping-bag"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <g id="Layer_1">
                </g>
                <g id="Layer_2">
                    <path fill="#58595B" d="M43.214,26.492c0,0-5.741-0.936-3.827-10.96C41.3,5.508,47.296,2.203,52.91,2.864
                        c5.613,0.661,8.675,5.067,8.037,19.938c0,0-0.383,3.467,2.807,4.212c0,0-5.23,3.719-5.485-4.763
                        c-0.256-8.482-2.042-21.37-11.865-14.32c0,0-7.271,7.05-1.403,18.561H43.214z"/>
                    <polygon fill="#FFFFFF" stroke="#58595B" stroke-width="3" stroke-miterlimit="10" points="17.75,22.125 69.375,22.125
                        71.417,79.251 63.875,89.125 13.625,84   "/>
                    <ellipse fill="#58595B" cx="33.5" cy="29.812" rx="2.75" ry="2.938"/>
                    <ellipse fill="#58595B" cx="50" cy="30.405" rx="2.75" ry="2.938"/>
                    <polygon fill="#58595B" stroke="#58595B" stroke-miterlimit="10" points="78.196,23.075 72.334,21.312 74.209,79.251
                        82.625,84.125   "/>
                    <polygon fill="#58595B" points="73.666,80.458 65.747,90.959 82.916,86.042   "/>
                    <path fill="#58595B" d="M31.25,29.812c0,0-5.625-1.062-3.75-12.438S35.25,2.25,40.75,3s8.5,5.75,7.875,22.625
                        c0,0-0.375,3.935,2.75,4.78c0,0-5.125,4.22-5.375-5.405S44,0.75,34.375,8.75c0,0-7.125,8-1.375,21.062H31.25z"/>
                    <polygon fill="#58595B" points="65.747,90.959 60.25,90.219 72.884,79.742    "/>
                    <polygon fill="#58595B" points="73.75,79.547 82.916,85.964 83.188,84.672 82.625,79.422  "/>
                </g>
                </svg>
                </a>
            </div>
            <!-- End Shopping Bag -->
		</nav><!-- #site-navigation -->
        <!-- Mobile Navigation -->
        <div class="mobile-menu-wrapper">
        <div class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"fill="white" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve"><g><g id="menu">
                <path d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z"/></g></path></g></g>
            </svg>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_class' => 'mobile-menu' ) ); ?>
        </div>
        <!-- End Mobile Navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
