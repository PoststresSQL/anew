<?php

    function anew_files() {
        // js loading
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js');
        wp_enqueue_script('foundation_scripts', get_template_directory_uri() . '/js/vendor/foundation.min.js');
        wp_enqueue_script('what-input_scripts', get_template_directory_uri() . '/js/vendor/what-input.js');

        // stylesheet loading
        wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600,700,800');
        wp_enqueue_style('foundation_styles', get_template_directory_uri() . '/styles/foundation.css');
        wp_enqueue_style('navigation_styles', get_template_directory_uri() . '/styles/navigation.css');
        wp_enqueue_style('home_styles', get_template_directory_uri() . '/styles/home.css');
        wp_enqueue_style('footer_styles', get_template_directory_uri() . '/styles/footer.css');
        wp_enqueue_style('fontawesome_icons', '//use.fontawesome.com/releases/v5.7.0/css/all.css');
        wp_enqueue_style('motion_ui', '//cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css');
        wp_enqueue_style('global_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'anew_files');

?>