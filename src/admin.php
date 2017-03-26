<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);

    $wp_customize->add_setting('api_base_url', [
      'default' => ''
    ]);

    $wp_customize->add_section('api_integration', [
      'title' => __('API Integration', 'sage'),
      'priority' => 30
    ]);

    $wp_customize->add_control('api_base_url_ctrl', [
      'label' => 'API Base URL',
      'section' => 'api_integration',
      'settings' => 'api_base_url',
      'type' => 'text'
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
