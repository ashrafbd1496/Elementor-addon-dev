<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 */

function team_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
	require_once( __DIR__ . '/widgets/test-widget.php' );
	require_once( __DIR__ . '/widgets/team-members.php' );

	$widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	$widgets_manager->register( new \Test_Widget() );
	$widgets_manager->register( new \Team_Member_Widget() );

}
add_action( 'elementor/widgets/register', 'team_widget');



// Function to enqueue custom styles
function team_widget_enqueue_styles() {
    // Register your custom style
    wp_register_style( 'team-widget-custom-style', plugins_url( '/widgets/style.css', __FILE__ ), array(), '1.0.0', 'all' );

    // Enqueue the style
    wp_enqueue_style( 'team-widget-custom-style' );
}
add_action( 'elementor/frontend/after_enqueue_styles', 'team_widget_enqueue_styles' );

function team_widget_enqueue_scripts() {
	wp_register_script(
		'team-widget-custom-script',
		plugin_dir_url(__FILE__) . '/widgets/team-widget.js', // Change the path if needed
		array('jquery'),
		'1.0.0',
		true
	);
	wp_enqueue_script('team-widget-custom-script');
}
add_action('elementor/frontend/after_register_scripts', 'team_widget_enqueue_scripts');


// function _register_controls_scripts() {
//     wp_register_script(
//         'team-widget-script',
//         plugin_dir_url(__FILE__) . '/widgets/team-widget.js',
//         array('jquery'),
//         '1.0.0',
//         true
//     );
// }

// function render() {
//     $settings = $this->get_settings_for_display();
//     wp_enqueue_script('team-widget-script');
//     // Rest of your render function
// }
