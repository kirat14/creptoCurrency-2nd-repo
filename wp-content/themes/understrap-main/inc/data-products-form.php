<?php

add_action('wp_ajax_nopriv_yso_data_products_form_submit', 'yso_data_products_form_submit_callback', 11, 1);
add_action('wp_ajax_yso_data_products_form_submit', 'yso_data_products_form_submit_callback', 11, 1);

function log_it($message)
{
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }
}

function yso_data_products_form_submit_callback()
{
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $company_website = $_POST["company-website"];
    $company_email = $_POST["company-email"];
    $phone = $_POST["phone"];
    $data_products = $_POST["data-products"];
    $form_message = $_POST["form-message"];

    $email_content = '';

    foreach ($_POST as $key => $value) {
        if (!in_array($key, array('form-message', 'action'))) {
            if (empty($value)) {
                $json['type'] = 'error';
                $json['msg'] = 'Some fields are empty';
                echo json_encode($json);
                exit();
            }
            else{
                $email_content .= "<li><b>" . $key . "</b>: " . $value . "</li>";
            }
        }
    }

    ob_start();
    include get_theme_file_path('email-templates/contact-us-email.php');
    $content = ob_get_clean();

    $headers = array('Content-Type: text/html; charset=UTF-8');
    $to = "moumini.tarik@gmail.com";
    $subject = "My Email Subject";
    $mail = wp_mail($to, $subject, $content, $headers);
    $json['type'] = 'success';
    $json['msg'] = $content;
    echo json_encode($json);
    exit();
}
