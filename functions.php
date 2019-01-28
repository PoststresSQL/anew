<?php

    function anew_files() {
        wp_enqueue_style('global_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'anew_files');

?>