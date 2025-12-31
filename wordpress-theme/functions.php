<?php
/**
 * MadXventure Theme Functions
 *
 * @package MadXventure
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function madxventure_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'madxventure'),
        'footer'  => esc_html__('Footer Menu', 'madxventure'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for wide alignment
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'madxventure_setup');

/**
 * Enqueue Styles and Scripts
 */
function madxventure_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'madxventure-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'madxventure-style',
        get_stylesheet_uri(),
        array('madxventure-google-fonts'),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'madxventure-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script for AJAX
    wp_localize_script('madxventure-main', 'madxventureAjax', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('madxventure_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'madxventure_scripts');

/**
 * Register Sidebars/Widget Areas
 */
function madxventure_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'madxventure'),
        'id'            => 'footer-widget',
        'description'   => esc_html__('Add widgets here for footer area.', 'madxventure'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'madxventure_widgets_init');

/**
 * Custom Logo Output
 */
function madxventure_custom_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<a href="' . esc_url(home_url('/')) . '" class="site-logo-text">';
        echo '<span class="logo-text">' . esc_html(get_bloginfo('name')) . '</span>';
        echo '</a>';
    }
}

/**
 * Custom Walker for Navigation Menu
 */
class MadXventure_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<li class="nav-item">';
        
        $attributes = '';
        if (!empty($item->url)) {
            $attributes .= ' href="' . esc_attr($item->url) . '"';
        }
        
        $output .= '<a' . $attributes . ' class="nav-link">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
    
    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= '</li>';
    }
}

/**
 * Handle Contact Form Submission via AJAX
 */
function madxventure_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'madxventure_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed.'));
    }

    // Sanitize form data
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
    }

    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }

    // Prepare email
    $to = get_option('admin_email');
    $subject = sprintf('[MadXventure] New Contact Form Submission from %s', $name);
    
    $body = "New contact form submission:\n\n";
    $body .= "Name: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Company: {$company}\n";
    $body .= "Phone: {$phone}\n\n";
    $body .= "Message:\n{$message}";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email,
    );

    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! Your message has been sent successfully.'));
    } else {
        wp_send_json_error(array('message' => 'Failed to send message. Please try again.'));
    }
}
add_action('wp_ajax_madxventure_contact', 'madxventure_handle_contact_form');
add_action('wp_ajax_nopriv_madxventure_contact', 'madxventure_handle_contact_form');

/**
 * Customizer Settings
 */
function madxventure_customize_register($wp_customize) {
    
    // Hero Section
    $wp_customize->add_section('madxventure_hero', array(
        'title'    => __('Hero Section', 'madxventure'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Transform Your Leads Into Revenue',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'madxventure'),
        'section' => 'madxventure_hero',
        'type'    => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'We specialize in high-converting cold calls, appointment setting, and lead generation that accelerate your business growth.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'madxventure'),
        'section' => 'madxventure_hero',
        'type'    => 'textarea',
    ));

    // Contact Section
    $wp_customize->add_section('madxventure_contact', array(
        'title'    => __('Contact Information', 'madxventure'),
        'priority' => 40,
    ));

    // Phone Number
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Phone Number', 'madxventure'),
        'section' => 'madxventure_contact',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'hello@madxventure.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contact_email', array(
        'label'   => __('Email Address', 'madxventure'),
        'section' => 'madxventure_contact',
        'type'    => 'email',
    ));

    // Location
    $wp_customize->add_setting('contact_location', array(
        'default'           => 'New York, NY',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_location', array(
        'label'   => __('Location', 'madxventure'),
        'section' => 'madxventure_contact',
        'type'    => 'text',
    ));

    // Social Links Section
    $wp_customize->add_section('madxventure_social', array(
        'title'    => __('Social Media Links', 'madxventure'),
        'priority' => 50,
    ));

    // LinkedIn
    $wp_customize->add_setting('social_linkedin', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_linkedin', array(
        'label'   => __('LinkedIn URL', 'madxventure'),
        'section' => 'madxventure_social',
        'type'    => 'url',
    ));

    // Twitter
    $wp_customize->add_setting('social_twitter', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_twitter', array(
        'label'   => __('Twitter URL', 'madxventure'),
        'section' => 'madxventure_social',
        'type'    => 'url',
    ));

    // Facebook
    $wp_customize->add_setting('social_facebook', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_facebook', array(
        'label'   => __('Facebook URL', 'madxventure'),
        'section' => 'madxventure_social',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'madxventure_customize_register');

/**
 * Add Preconnect for Google Fonts
 */
function madxventure_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'madxventure_resource_hints', 10, 2);

/**
 * Disable Emoji Scripts
 */
function madxventure_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'madxventure_disable_emojis');

/**
 * Add Theme Support for Block Editor
 */
function madxventure_block_editor_setup() {
    // Add custom colors to Gutenberg
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Navy', 'madxventure'),
            'slug'  => 'navy',
            'color' => '#0a1628',
        ),
        array(
            'name'  => __('Sky', 'madxventure'),
            'slug'  => 'sky',
            'color' => '#0ea5e9',
        ),
        array(
            'name'  => __('Flame', 'madxventure'),
            'slug'  => 'flame',
            'color' => '#f97316',
        ),
        array(
            'name'  => __('White', 'madxventure'),
            'slug'  => 'white',
            'color' => '#ffffff',
        ),
    ));
}
add_action('after_setup_theme', 'madxventure_block_editor_setup');
