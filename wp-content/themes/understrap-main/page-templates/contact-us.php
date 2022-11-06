<?php

/**
 * Template Name: Contact Us Page
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
        <h1 class="text-center mb-n3 mb-md-n4">Contact <span class="text-primary">Us</span></h1>
        <div class="mb-4">
            <img class="mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/contact-us.png" alt="">
        </div>
    </div>

        <div class="row pt-5">
            <div class="col-md-8 mx-auto content-area pb-3" id="primary">

                <main class="site-main pb-md-5" id="main" role="main">
                    <div class="alert alert-dark p-5 mb-5">
                        
                        <div class="text-md-center">
                            <h5 class="text-primary mt-5 mb-0">Request Your</h5>
                            <h1 class="mb-3">Sample Data</h1>
                        </div>
                        <form class="row needs-validation p-md-5" novalidate>
                            <div class="col-lg-6 mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" required class="form-control" id="firstname" name="firstname" placeholder="Your first name goes here">

                                <div class="invalid-feedback">
                                    <?php echo REQMESSAGE; ?>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" required class="form-control" id="lastname" name="lastname" placeholder="Your Last Name Goes Here">
                                <div class="invalid-feedback">
                                    <?php echo REQMESSAGE; ?>
                                </div>
                            </div>



                            <div class="col-lg-6 mb-3">
                                <label for="company-website" class="form-label">Company Website</label>
                                <input type="text" required class="form-control" id="company-website" name="company-website" placeholder="www.example.com">
                                <div class="invalid-feedback">
                                    <?php echo REQMESSAGE; ?>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="company-email" class="form-label">Company Email</label>
                                <input type="email" required class="form-control" id="company-email" name="company-email" placeholder="name@example.com">
                                <div class="invalid-feedback">
                                    <?php echo REQMESSAGE; ?>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" required class="form-control" id="phone" name="phone" placeholder="123-456-7890">
                                <div class="invalid-feedback">
                                    <?php echo REQMESSAGE; ?>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="data-products" class="form-label">Data Products</label>
                                <input type="text" required class="form-control" id="data-products" name="data-products" placeholder="sba 504 loans, analytics services...">
                                <div class="invalid-feedback">
                                    <?php echo REQMESSAGE; ?>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="form-message" class="form-label">How can we help? </label>
                                <textarea class="form-control" id="form-message" name="form-message" rows="3" placeholder="We'd Love To Hear From You"></textarea>
                            </div>

                            <div class="col-12 my-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I have read and agree to Privacy Statement and the Agreement
                                    </label>
                                </div>
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-primary rounded-pill">Request Sample</button>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </form>
                    </div>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {

                    event.preventDefault();
                    event.stopPropagation();
                    var company_email_obj = jQuery('#company-email');
                    var indexOfAt = company_email_obj.val().indexOf("@");
                    var emailDomain = company_email_obj.val().substring(indexOfAt + 1);
                    var websiteObj = jQuery('#company-website');
                    var phoneObj = jQuery('#phone');
                    var domain_name = websiteObj.val();
                    company_email_obj.get(0).setCustomValidity('');
                    websiteObj.get(0).setCustomValidity('');
                    phoneObj.get(0).setCustomValidity('');

                    /* Email validation */
                    domain_name = domain_name.replace('www.', '');

                    if (domain_name.indexOf(emailDomain) == -1 || domain_name.length !== emailDomain
                        .length) {
                        company_email_obj.get(0).setCustomValidity('Invalid');
                        company_email_obj.siblings(".invalid-feedback").text(
                            "Email must have same domain as the website!");
                    }

                    /* Website validation */
                    var pattern =
                        /^((?!-))(xn--)?[a-z0-9][a-z0-9-_]{0,61}[a-z0-9]{0,1}\.(xn--)?([a-z0-9\-]{1,61}|[a-z0-9-]{1,30}\.[a-z]{2,})$/i;
                    if (!pattern.test(websiteObj.val())) {
                        websiteObj.get(0).setCustomValidity('Invalid');
                        websiteObj.siblings(".invalid-feedback").text("Please enter a valid Website!");
                    }

                    /* Phone validation */
                    /* 123-456-7890
                    (123) 456-7890
                    123 456 7890
                    123.456.7890
                    +91 (123) 456-7890 */
                    var pattern = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/i;
                    if (!pattern.test(phoneObj.val())) {
                        phoneObj.get(0).setCustomValidity('Invalid');
                        phoneObj.siblings(".invalid-feedback").text("Please enter a valid Phone number!");
                    }

                    if (form.checkValidity()) {
                        console.log('validity checked');
                        var datastring = jQuery(form).serialize() +
                            "&action=yso_data_products_form_submit";
                        jQuery.ajax({
                            method: "POST",
                            url: "<?php echo admin_url('admin-ajax.php') ?>",
                            data: datastring,
                            dataType: "json"
                        }).done(function(data) {
                            console.log(data);
                        });
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<?php
get_footer();
