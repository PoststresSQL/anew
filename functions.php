<?php

    function anew_files() {
        wp_enqueue_style('foundation_styles', get_template_directory_uri() . '/styles/foundation.min.css');
        wp_enqueue_style('global_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'anew_files');

?>