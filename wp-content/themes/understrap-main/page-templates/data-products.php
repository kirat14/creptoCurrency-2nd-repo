<?php

/**
 * Template Name: Data Products Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

define("REQMESSAGE", "Required field!");
?>
<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content">

        <div class="row mb-md-5 pt-5">
            <div class="col-12 col-lg-6">
                <img class="mx-auto d-block" src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/two-robot-analysis.png" alt="">

            </div>
            <div class="col-12 col-lg-6 mt-3 mt-sm-0">
                <h5 class="text-primary mt-lg-5 mb-0">Insights Driven</h5>
                <h1 class="mb-3">Analytics Services</h1>
                <p class=" pe-3">
                    A Lead Management Platform can help integrate with your existing CRM and Leads Management System Technology Stack.
                    We understand, the importance of an integrated sales and marketing system, sales reporting, sales dashboards. We offer integration services to any CRM or inhouse systems that you may use already. Please contact us for more information.
                </p>
            </div>
        </div>


        <div class="row mb-md-5 pt-5">
            <h1 class="mb-5 text-center">Our Data <span class="text-primary">Products</span></h1>
            <div class="col-12 col-lg-6 d-flex align-items-center mt-3 mt-sm-0">
                <div>
                    <h5 class="text-primary mb-0">Easy Access To</h5>
                    <h1 class="mb-3">Quality Leads</h1>
                    <p class=" pe-3">
                        We provide integrated, enriched, and easy to use data and analytics products to Banking, Insurance, CPA and Professional services
                    </p>
                    <div class="mt-5">
                        <button type="button" class="btn btn-primary bg-transparent text-primary"><a href="#">Learn More<i class="fa-solid fa-arrow-right-long ms-3"></i></a></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 order-first order-sm-last">
                <img class="mx-auto d-block" src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/data-analyst.png" alt="">
            </div>
        </div>

        <div class="row mb-md-5 pt-5">
            <div class="col-lg-4">
                <div class="alert alert-dark py-5 px-4">
                    <h6 class="mb-3">SBA 7a Loans</h6>
                    <p class="">
                        They are small-business loans guaranteed by the U.S. government
                        and issued by financial institutions, usually banks.
                    </p>
                    <div class="mt-4">
                        <button type="button" class="btn btn-primary bg-transparent text-primary"><a href="#">Learn More<i class="fa-solid fa-arrow-right-long ms-3"></i></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #content -->

    <section class="py-0 py-md-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- Image -->
                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                    <img src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/hubspot.png" class="d-block mx-auto" alt="">
                </div>
                <!-- Image -->
                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                    <img src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/Salesforce-logo.png" class="d-block mx-auto" alt="">
                </div>
                <!-- Image -->
                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                    <img src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/microsoft-dynamics-crm-logo.png" class="d-block mx-auto" alt="">
                </div>
                <!-- Image -->
                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                    <img src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/download.png" class="d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </section>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
