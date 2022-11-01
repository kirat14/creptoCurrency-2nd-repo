<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
   <?php
    wp_head();
    ?>
</head>
<body class="bg-secondary">
	
    <header class="">
		<nav class="navbar navbar-main navbar-expand-lg navbar-dark" id="navbar-main">
			<div class="container p-0">
				<a class="navbar-brand" href="index.html">
				<?php if(function_exists('the_custom_logo')){
				// the_custom_logo();
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_logo_id);
				// then replace the source with $logo[0] in the code
			} ?>
            <img src=<?php echo get_template_directory_uri() . '/img/website-logo.png' ?> alt="" > 
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse navbar-collapse-overlay collapse" id="navbar-main-collapse" style="">
					<div class="position-relative">
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
						</button>
					</div>
					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item nav-item-spaced" data-toggle="hover">
							<a class="nav-link text-nowrap" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Home</a>
						</li>
						<li class="nav-item nav-item-spaced" data-toggle="hover">
							<a class="nav-link text-nowrap" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Data Products</a>
						</li>
						<li class="nav-item nav-item-spaced" data-toggle="hover">
							<a class="nav-link text-nowrap" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
						</li>
						<li class="nav-item nav-item-spaced" data-toggle="hover">
							<a class="nav-link text-nowrap" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
						</li>
					</ul>
					<ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
						<li class="nav-item">
							<a class="btn btn-secondary bg-transparent" href="pages/authentication/login-basic.html">Sign in</a>
						</li>
						<li class="nav-item">
							<a href="#" class="btn btn-sm" target="_blank">
								<button type="button px-3" class="btn bg-white rounded-pill">Sign up</button>
							</a>
						</li>
					</ul>
					<div class="d-lg-none text-center">
						<a href="#" class="btn btn-block btn-sm btn-secondary" target="_blank">Sign in</a>
						<a href="#" class="btn btn-block btn-sm btn-primary" target="_blank">Sign up</a>
					</div>
				</div>
			</div>
		</nav>
    </header>