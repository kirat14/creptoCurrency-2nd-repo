<?php

/**
 * Template Name: About Us Page
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
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <div>
                    <h5 class="text-primary mt-lg-5 mb-0">Secure More</h5>
                    <h1 class="mb-3">Qualified Leads</h1>
                    <p class=" pe-3">
                    Financial Services Industry (FSI) Leads is a AI/ML driven Intelligent LeadGen Platform helping Commercial Banks, 
                    Insurance Agents and Professional Service Providers to secure more qualified leads and make right party contacts for your products and services.
                    </p>
                    <div class="mt-5">
                        <button type="button" class="btn btn-primary bg-transparent text-primary"><a href="#">Learn More<i class="fa-solid fa-arrow-right-long ms-3"></i></a></button>
                    </div>
                    
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-3 mt-sm-0">
                <img class="mx-auto d-block" src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/leads.png" alt="">

            </div>
        </div>


        <div class="row mb-md-5 pt-5">
        <div class="col-12 col-lg-6 mt-3 mt-sm-0">
                <img class="mx-auto d-block" src="http://localhost/creptoCurrency-2nd-repo/wp-content/themes/understrap-main/img/data-analyst.png" alt="">
            </div>

            <div class="col-12 col-lg-6 d-flex align-items-center order-first order-sm-last ">
                <div>
                    <h5 class="text-primary mb-0">Help Grow</h5>
                    <h1 class="mb-3">Your Business</h1>
                    <p class=" pe-3">
                        Our proprietary algorithm identifies opportunities leveraging our proprietary algorithms which 
                        uses various data points to help with refined leads to help grow your business.
                        Our clients include Banks, Insurance Agents and CPA firms.</p>
                    <div class="mt-5">
                        <button type="button" class="btn btn-primary bg-transparent text-primary"><a href="#">Learn More<i class="fa-solid fa-arrow-right-long ms-3"></i></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
