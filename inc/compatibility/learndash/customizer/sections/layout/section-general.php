<?php
/**
 * LifterLMS General Options for our theme.
 *
 * @package     Astra
 * @author      Brainstorm Force
 * @copyright   Copyright (c) 2015, Brainstorm Force
 * @link        http://www.brainstormforce.com
 * @since       1.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	/**
	 * Option: Divider
	 */
	$wp_customize->add_control(
		new Astra_Control_Divider(
			$wp_customize, ASTRA_THEME_SETTINGS . '[learndash-lesson-content]', array(
				'label'    => __( 'Course Content Table', 'astra-addon' ),
				'section'  => 'section-learndash',
				'type'     => 'ast-divider',
				'priority' => 5,
				'settings' => array(),
			)
		)
	);
	/**
	 * Option: Display Serial Number
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[learndash-lesson-serial-number]', array(
			'default'           => astra_get_option( 'learndash-lesson-serial-number' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[learndash-lesson-serial-number]', array(
			'section'  => 'section-learndash',
			'label'    => __( 'Display Serial Number', 'astra' ),
			'priority' => 5,
			'type'     => 'checkbox',
		)
	);

	/**
	 * Option: Differentiate Rows
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[learndash-differentiate-rows]', array(
			'default'           => astra_get_option( 'learndash-differentiate-rows' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[learndash-differentiate-rows]', array(
			'section'  => 'section-learndash',
			'label'    => __( 'Differentiate Rows', 'astra' ),
			'priority' => 10,
			'type'     => 'checkbox',
		)
	);
