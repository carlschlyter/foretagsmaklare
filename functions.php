<?php

//Register css
function load_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('hero_image_section', get_template_directory_uri() . '/template-parts/blocks/hero_image_section.css', array(), false, 'all');
    wp_enqueue_style('hero_image_section');

    wp_register_style('navbar', get_template_directory_uri() . '/css/navbar.css', array(), false, 'all');
    wp_enqueue_style('navbar');

    wp_register_style('footer', get_template_directory_uri() . '/css/footer.css', array(), false, 'all');
    wp_enqueue_style('footer');

}
add_action('wp_enqueue_scripts', 'load_css');


//Register JavaScript
function load_js() {

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', false, true);
    wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'load_js');


//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');


//Add custom image sizes
add_image_size('logo', 102, 45, true);
add_image_size('logo-larger', 153, 67.5, true);
add_image_size('hero-image-max', 2560, 1200, true);
add_image_size('hero-image-narrow', 2560, 600, true);
add_image_size('icon-image', 60, 60, true);
add_image_size('icon-image-smaller', 30, 30, true);
add_image_size('icon-image-large', 150, 150, true);
add_image_size('offers-image', 300, 150, true);
add_image_size('offers-image-square', 300, 300, true);
add_image_size('offers-image-square-actual', 820, 820, true);
add_image_size('offers-image-square-large', 1400, 1400, true);
add_image_size('offer-page-image', 400, 600, true);
add_image_size('offer-page-image-2', 200, 300, true);
add_image_size('article-image', 600, 450, true);
add_image_size('miniature-image', 180, 120, true);
add_image_size('imgtxt-section-image', 375, 250, true);
add_image_size('imgtxt-section-image-2', 450, 300, true);
add_image_size('services-pages-main-section-image', 450, 250, true);
add_image_size('contact-image', 200, 250, true);
add_image_size('network-image', 300, 200, true);
add_image_size('exitpartner-logo', 120, 40, true);




//Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )

);

// Custom Gutenberg Blocks

if( function_exists('acf_register_block_type')){
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

    acf_register_block_type(
        array(
            'name'              => 'hero-image-section',
            'title'             => __('Hero Image Section'),
            'description'       => __('Settings Frontpage Hero and Welcome Messages'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/hero_image_section/hero_image_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/hero_image_section/hero_image_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'icon-bar-section',
            'title'             => __('Icon Bar Section'),
            'description'       => __('Settings Icon Bar'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/icon_bar_section/icon_bar_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/icon_bar_section/icon_bar_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'offers-section',
            'title'             => __('Offers Section'),
            'description'       => __('Settings Offers Section'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/offers_section/offers_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/offers_section/offers_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'text-and-image-section',
            'title'             => __('Text and Image Section'),
            'description'       => __('Settings for section with a header and text part on one side and an image part on the other'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/text_and_image_section/text_and_image_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/text_and_image_section/text_and_image_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'alternative-text-and-image-section',
            'title'             => __('Alternative Text and Image Section'),
            'description'       => __('Settings for section with a header and a text part on one side and an image part on the other'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/alternative_text_and_image_section/alternative_text_and_image_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/alternative_text_and_image_section/alternative_text_and_image_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'quote-section',
            'title'             => __('Quote Section'),
            'description'       => __('Settings for section with a quote and an image'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/quote_section/quote_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/quote_section/quote_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'podcast-section',
            'title'             => __('Exit Podden'),
            'description'       => __('Settings for section promoting the pod cast'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/podcast_section/podcast_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/podcast_section/podcast_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'faq-section',
            'title'             => __('FAQ Section'),
            'description'       => __('Settings for section with some faq and an image'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/faq_section/faq_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/faq_section/faq_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'contact-section',
            'title'             => __('Contact Section'),
            'description'       => __('Settings for section with a contact form'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/contact_section/contact_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/contact_section/contact_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'offers-page-offers-section',
            'title'             => __('Offers Page Offers Section'),
            'description'       => __('Settings for section with offers on offers page'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/offers_page_offers_section/offers_page_offers_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/offers_page_offers_section/offers_page_offers_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'services-pages-main-section',
            'title'             => __('Services Pages Main Section'),
            'description'       => __('Settings for main section on services pages'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/services_pages_main_section/services_pages_main_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/services_pages_main_section/services_pages_main_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'tabs-section',
            'title'             => __('Tabs Section'),
            'description'       => __('Settings for a tabs section with different info under each tab'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/tabs_section/tabs_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/tabs_section/tabs_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'sales-pages-stepbystep-section',
            'title'             => __('Sales Pages Step By Step Section'),
            'description'       => __('Settings for step by step section within the sales pages'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/sales_pages_stepbystep_section/sales_pages_stepbystep_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/sales_pages_stepbystep_section/sales_pages_stepbystep_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'header-and-text-section',
            'title'             => __('Header and Text Section'),
            'description'       => __('Settings for a header and text section for sales pages'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/header_and_text_section/header_and_text_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/header_and_text_section/header_and_text_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'reference-section',
            'title'             => __('Reference Section'),
            'description'       => __('Settings for the reference page'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/reference_section/reference_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/reference_section/reference_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'about-us-page-main-section',
            'title'             => __('About Us Page Main Section'),
            'description'       => __('Settings for the main section of the About Us page'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/about_us_page_main_section/about_us_page_main_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/about_us_page_main_section/about_us_page_main_section.css',
            'category'          => 'design',
        )
    );    
    
    acf_register_block_type(
        array(
            'name'              => 'offer-page-section',
            'title'             => __('Offer Page Section'),
            'description'       => __('Settings for the page with each offer'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/offer_page_section/offer_page_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/offer_page_section/offer_page_section.css',
            'category'          => 'design',
        )
    );    

}



//Contact form
add_action('wp_ajax_contact', 'contact_form');
add_action('wp_ajax_nopriv_contact', 'contact_form');

function contact_form(){

    $formdata = [];

    wp_parse_str($_POST['contact'], $formdata);

    //The sender of the email i.e. the admin email
    $admin_email = get_option('admin_email');

    //Email headers
    $headers[] = 'Content-Type: text/html; charset=utf-8';
    $headers[] = 'Från' . $admin_email;
    $headers[] = 'Svara till' . $formdata['E-post'];

    //The recipient of the email
    $send_to = $admin_email;

    //Subject
    $subject = 'Meddelande från ' . $formdata['Förnamn'] . ' ' . $formdata['Efternamn'];

    //Message
    $message = '';

    foreach($formdata as $index => $field){

        $message .= '<strong>' . $index . '</strong>: ' . $field . '<br/>';
    }

    try {

        if(wp_mail($send_to, $subject, $message, $headers)){

            wp_send_json_success('E-post skickat');

        }
        else {

            wp_send_json_error('E-post fel');

        }

    } catch (Exception $e){

            wp_send_json_error($e-> getMessage());
    }


}


