<?php
/**
 * bekey Theme Customizer
 *
 * @package bekey
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bekey_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bekey_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bekey_customize_partial_blogdescription',
			)
		);
	}
    //Theme Custom Customizer
    $wp_customize->add_section('bekey_theme_options', array(
        'title' => __('Count posts '),
        'priority' => 10,
    ));
    $wp_customize->add_setting('bekey_count_posts', array(
        'default' => '',
        // 'transport'=>'postMessage',
    ));
    $wp_customize->add_setting('bekey_count_load_posts', array(
        'default' => '',
        // 'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'bekey_count_posts',
        array(
            'label' => __('Count posts on Home page'),
            'section' => 'bekey_theme_options',
            'type' => 'number',
        )
    );
    $wp_customize->add_control(
        'bekey_count_load_posts',
        array(
            'label' => __('Count Load Posts on Home Page'),
            'section' => 'bekey_theme_options',
            'type' => 'number',
        )
    );

}
add_action( 'customize_register', 'bekey_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bekey_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bekey_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bekey_customize_preview_js() {
	wp_enqueue_script( 'bekey-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'bekey_customize_preview_js' );
