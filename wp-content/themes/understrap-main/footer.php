<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<section class="bottom-section">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center mt-5 mb-5 pt-5 text-center text-lg-start">
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">15M+</h3>
                                <p class="text-primary display-4">Businesses</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">200M+</h3>
                                <p class="text-primary display-4">Business Contacts</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">400+</h3>
                                <p class="text-primary display-4">Business Attributes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center mt-5 mb-5 pt-5 text-center text-lg-start">
                        <div class="col-lg-3 ">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">15M+</h3>
                                <p class="text-primary display-4">Businesses</p>
                            </div>
                        </div>
                        <div class="col-lg-3 ">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">200M+</h3>
                                <p class="text-primary display-4">Business Contacts</p>
                            </div>
                        </div>
                        <div class="col-lg-3 ">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">400+</h3>
                                <p class="text-primary display-4">Business Attributes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center mt-5 mb-5 pt-5 text-center text-lg-start">
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">15M+</h3>
                                <p class="text-primary display-4">Businesses</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">200M+</h3>
                                <p class="text-primary display-4">Business Contacts</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-3">
                                <h3 class="text-white mb-0 me-lg-5">400+</h3>
                                <p class="text-primary display-4">Business Attributes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="med-custom-carousel position-relative pb-5">
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="0" class=""></li>
                    <li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="1" class=""></li>
                    <li data-app-prevent-settings="" data-target="#slider-1" class="active" data-slide-to="2"></li>
                </ol>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- =======================
Footer START -->
<footer class="pt-5 dark-mode bg-primary">
    <div class="container col-xxl-8 mx-auto"> <!-- col-xxl-8: to shirnk more the margins on larger screens -->
        <!-- Row START -->
        <div class="row">

            <!-- Widget 1 START -->
            <div class="col-lg-3">
                <!-- logo -->
                <a class="mb-3" href="index.html">
                    <img class="mb-1" src="<?php echo get_template_directory_uri() . '/img/footer-logo.png' ?>" alt="logo">
                </a>

                <!-- Social media icon -->

                <ul class="list-inline mb-0 mt-2">
					<li class="list-inline-item ms-1 ps-3"> 
                        <a class="me-2" href="#"><i class="fa-brands fa-square-instagram h2"></i></a>    
                    </li>
					<li class="list-inline-item"> 
                        <a class="me-2" href="#"><i class="fa-brands fa-facebook h2"></i></a>
                    </li>
					<li class="list-inline-item"> 
                    <a class="" href="#"><i class="fa-brands fa-square-twitter h2"></i></a>    
                    </li>
				</ul>
            </div>
            <!-- Widget 1 END -->

            <div class="col-lg-3">
                <h4 class="">Contact Us</h4>
                <div>
                    <ul class="p-0">
                        <li class="list-unstyled p-0 mb-3 ps-3 ms-3 position-relative"><i class="fa-solid fa-phone text-secondary position-absolute end-100 h4"></i>+1 832.913.5276</li>
                        <li class="list-unstyled p-0 mb-3 ps-3 ms-3 position-relative mt-1"><i class="fa-solid fa-envelope position-absolute end-100 h4"></i>contact@fsileads.com</li>
                        <li class="list-unstyled p-0 mb-3 ps-3 ms-3 position-relative mt-1"><i class="fa-sharp fa-solid fa-location-dot position-absolute end-100 h4"></i>2717 Commercial Center Blvd. <br>
                            Suite E200 <br>
                            Katy, TX 77494</li>
                    </ul>
                </div>
            </div>

            <!-- Link block -->
            <div class="col-lg-3">
                <h4 class="">Our Company</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Data Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
            </div>



            <!-- Link block -->
            <div class="col-lg-3">
                <h4 class="">Community</h4>
                <div class="mb-4">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary h-auto" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text text-uppercase " id="basic-addon2">ok</button>
                            </div>
                        </div>
                    </form>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Terms and Conditions</a></li>
                </ul>
            </div>
            <!-- Widget 3 END -->
        </div><!-- Row END -->

        <!-- Divider -->
        <hr class="mt-4 mb-0">

        <!-- Bottom footer -->
        <div class="py-3">
            <div class="container px-0">
                <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                    <!-- copyright text --> 
                    <div class="text-secondary med-copy-right-text"> Copyrights ©2022 FSI Leads. All rights reserved. </div>
                    <!-- copyright links-->
                    <div class="justify-content-center mt-3 mt-lg-0">
                        <ul class="nav list-inline justify-content-center mb-0 d-none">
                            <li class="list-inline-item">
                                <!-- Language selector -->
                                <div class="dropup mt-0 text-center text-sm-end">
                                    <a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-globe me-2"></i>Language
                                    </a>
                                    <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                        <!-- <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
                                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German </a></li>
                                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li> -->
                                    </ul>
                                </div>
                            </li>
                            <li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a></li>
                            <li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =======================
Footer END -->
<!-- Back to top -->
<div class="back-top back-top-show">
    <i class="fa-solid fa-arrow-up position-absolute top-50 start-50 translate-middle"></i>
</div>

<?php wp_footer(); ?>

</body>

</html>