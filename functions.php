<?php
// Add theme support and enqueue scripts/styles after theme setup
add_action('after_setup_theme', 'cms2_project_setup');

// Setup basic theme supports and functionalities
function cms2_project_setup() {
    add_theme_support('wp-block-styles'); // Enable block styles for Gutenberg blocks
}

// Enqueue Google fonts in the theme
function add_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap', false);
}

// Hook to add Google fonts
add_action('wp_enqueue_scripts', 'add_google_fonts');

// Enqueue Font Awesome icons
function my_theme_enqueue_styles() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
}

// Enqueue Bootstrap's CSS and JS files
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('css/bootstrap.min.css'));
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('js/bootstrap.min.js'), array('jquery'), '', true);
}

// Register navigation menus in the theme
function my_custom_theme_register_nav_menus() {
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'text-domain'),
        'footer_menu' => __('Footer Menu', 'text-domain'),
    ));
}

// Register widget areas for the theme
function mytheme_register_widget_areas() {
    register_sidebar(array(
        'name' => __('Header', 'mytheme'),
        'id' => 'header-widgets',
        'description' => __('Widgets in the header.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

// Add a theme options page to the admin menu
function cms2_add_admin_settings() {
    add_menu_page('Theme Options', 'Theme Options', 'manage_options', 'theme-options', 'cms2_theme_options_page', null, 99);
    register_setting('cms2_theme_options', 'cms2_phone_number');
    add_settings_section('cms2_settings_section', 'Header Settings', null, 'theme-options');
    add_settings_field('cms2_phone_number', 'Phone Number', 'cms2_phone_field_render', 'theme-options', 'cms2_settings_section');
}

// Render input for phone number in theme options
function cms2_phone_field_render() {
    $phone_number = get_option('cms2_phone_number', '');
    echo "<input type='text' name='cms2_phone_number' value='" . esc_attr($phone_number) . "' />";
}

// Layout for the theme options page
function cms2_theme_options_page() {
    ?>
    <div class="wrap">
        <h1>Theme Options</h1>
        <form method="post" action="options.php">
            <?php settings_fields('cms2_theme_options');
            do_settings_sections('theme-options');
            submit_button('Save Changes'); ?>
        </form>
    </div>
    <?php
}

// Display stored phone number on the site
function cms2_display_phone_number() {
    $phone_number = get_option('cms2_phone_number');
    if (!empty($phone_number)) {
        echo '<div class="header-phone-number">Call Us: ' . esc_html($phone_number) . '</div>';
    }
}

// Register footer widget area
function mytheme_register_footer_widget_area() {
    register_sidebar(array(
        'name' => __('Footer', 'mytheme'),
        'id' => 'footer-widgets',
        'description' => __('Widgets above the footer content.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

// Shortcode for a Bootstrap button
function cms2_bootstrap_button_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'label' => 'Click me', // Default button label
            'url' => '#' // Default URL if none provided
        ),
        $atts,
        'bootstrap_button'
    );

    return '<div class="d-flex justify-content-center"><a href="' . esc_url($atts['url']) . '" class="btn btn-light">' . esc_html($atts['label']) . '</a></div>';
}

// Register shortcode for Bootstrap button
add_shortcode('bootstrap_button', 'cms2_bootstrap_button_shortcode');

// Initialize widget area registration for footer widgets
add_action('widgets_init', 'mytheme_register_footer_widget_area');

// Repeat action hook for theme setup to ensure all configurations are loaded
add_action('after_setup_theme', 'cms2_project_setup');
// Register additional widget areas
add_action('widgets_init', 'mytheme_register_widget_areas');
// Add more enqueue actions for stylesheets and scripts
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'add_google_fonts');
// Add nav menus after theme setup
add_action('after_setup_theme', 'my_custom_theme_register_nav_menus');
// Ensure Bootstrap scripts and styles are loaded
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
