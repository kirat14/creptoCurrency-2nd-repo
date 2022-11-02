<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



<footer class="bg-primary position-relative" style="z-index: 1;">
        <section class="container pt-4">
            <div class="pt-4">
				<div class="pt-4">
					<div class="row">
						<div class="col  d-flex flex-column align-items-center">
							<a href="#">
								<img src=<?php echo get_template_directory_uri() . '/img/footer-logo.png' ?> alt="" class="mb-3" style="margin-top: -1rem;">
							</a>
							<div>
								<ul class="navbar-nav d-flex flex-row mt-1">
									<li class="px-2"><a href="#"><i class="fa-brands fa-square-instagram  text-secondary h2 "></i></a></li>
									<li class="px-2"><a href="#"><i class="fa-brands fa-facebook text-secondary h2"></i></a></li>
									<li class="px-2"><a href="#"><i class="fa-brands fa-square-twitter text-secondary h2"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col">
							<h4 class="">Contact Us</h4>
							<div>
								<ul class="p-0">
									<li class="list-unstyled p-0 mb-3 ps-3 ms-3 position-relative"><i class="fa-solid fa-phone text-secondary position-absolute end-100"></i>+1 832.913.5276</li>
									<li class="list-unstyled p-0 mb-3 ps-3 ms-3 position-relative mt-1"><i class="fa-solid fa-envelope position-absolute end-100"></i>contact@fsileads.com</li>
									<li class="list-unstyled p-0 mb-3 ps-3 ms-3 position-relative mt-1"><i class="fa-sharp fa-solid fa-location-dot position-absolute end-100"></i>2717 Commercial Center Blvd. <br>
										Suite E200 <br>
										Katy, TX 77494</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<h4 class="">Our Company</h4>
							<div>
								<ul class="p-0">
									<li class="list-unstyled p-0 border-0 mb-3"><a class="text-secondary" href="#">Home</a></li>
									<li class="list-unstyled p-0 border-0 mb-3 mt-1"><a class="text-secondary" href="#">Our Services</a></li>
									<li class="list-unstyled p-0 border-0 mb-3 mt-1"><a class="text-secondary" href="#">About Us</a></li>
									<li class="list-unstyled p-0 border-0 mb-3 mt-1"><a class="text-secondary" href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col">
							<h4 class="">Subscribe to our newsletter</h4>
							<div class="mb-5">
								<form action="">
									<div class="input-group mb-3">
										<input type="text" class="form-control border-secondary h-auto" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button type="submit" class="input-group-text text-uppercase " id="basic-addon2">ok</button>
										</div>
									</div>
								</form>
							</div>
							<div>
								<ul class="p-0">
									<li class="list-unstyled p-0 mb-3">Privacy Policy</li>
									<li class="list-unstyled p-0 mb-3 mt-1">Terms and Conditions</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="position-absolute top-0 w-75" style="z-index: -1;">
				<img style="opacity: 0.18;" src=<?php  echo get_template_directory_uri() . '/img/footer-background-texture.png' ?> alt="">
			</div>
        </section>
        <section class="container med-copy-right-text mt-5 ms-n5 pt-4">
            <p class=""><i class="fa-regular fa-copyright"></i>2022 FSI Leads. All Rights Reserved</p>
        </section>
    </footer>


<?php wp_footer(); ?>

</body>

</html>

