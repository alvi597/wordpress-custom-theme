<?php
/**
 * Immigrant Knowhow Theme Customizer
 */

function immigrant_knowhow_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'immigrant-knowhow'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default' => 'A Community Platform for New Immigrants',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'immigrant-knowhow'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Join forums, access expert support, and marketplace services designed to help immigrants settle in new country.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'immigrant-knowhow'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    // Hero Button Text
    $wp_customize->add_setting('hero_button_text', array(
        'default' => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_button_text', array(
        'label' => __('Hero Button Text', 'immigrant-knowhow'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Hero Button Link
    $wp_customize->add_setting('hero_button_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_button_link', array(
        'label' => __('Hero Button Link', 'immigrant-knowhow'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    // Social Media Links
    $wp_customize->add_section('social_links', array(
        'title' => __('Social Media Links', 'immigrant-knowhow'),
        'priority' => 40,
    ));

    $social_platforms = array(
        'twitter' => 'Twitter',
        'facebook' => 'Facebook',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn'
    );

    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('social_' . $platform, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('social_' . $platform, array(
            'label' => $label,
            'section' => 'social_links',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'immigrant_knowhow_customize_register'); 