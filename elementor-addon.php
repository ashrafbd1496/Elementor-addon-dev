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

}
add_action( 'elementor/widgets/register', 'team_widget');