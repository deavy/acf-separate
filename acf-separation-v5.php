<?php

class acf_field_separation extends acf_field {

	/**
	 * This function will setup the field type data
	 *
	 * @date    5/03/2014
	 * @since    5.0.0
	 */
	function __construct() {
		// vars
		$this->name     = 'separation';
		$this->label    = __( 'Separation', 'acf-separation' );
		$this->category = 'layout';

		/**
		 * defaults (array) Array of default settings which are merged into the field object. These are used later in settings
		 */
		$this->defaults = array(
			'value' => false, // prevents acf_render_fields() from attempting to load value
		);

		/**
		 * l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		 * var message = acf._e('separation', 'error');
		 */
		$this->l10n = array(//'error'	=> __('Error! Please enter a higher value', 'acf-separation'),
		);

		parent::__construct();
	}


	/**
	 * Create extra settings for your field. These are visible when editing a field
	 *
	 * @since    3.6
	 * @date    23/01/13
	 *
	 * @param    $field (array) the $field being edited
	 *
	 */
	function render_field_settings( $field ) {
		/*
		 * This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
		 * The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
		 *
		 * More than one setting can be added by copy/paste the above code.
		 * Please note that you must also have a matching $defaults value for the field name (font_size).
		 */
		acf_render_field_setting( $field, array(
			'label'        => __( 'Instructions', 'acf' ),
			'instructions' => '',
			'type'         => 'message',
			'message'      => __( 'Use "Separation" to better organize your edit screen by separating fields visually by a horizontal rule.', 'acf' ),
		) );
	}


	/**
	 *  Create the HTML interface for your field
	 *
	 * @param    $field (array) the $field being rendered
	 *
	 * @since    3.6
	 * @date    23/01/13
	 *
	 */
	function render_field( $field ) {
		echo '<hr />';
	}


	/**
	 *  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	 *  Use this action to add CSS + JavaScript to assist your render_field() action.
	 *
	 * @since    3.6
	 * @date    23/01/13
	 *
	 */
	function input_admin_enqueue_scripts() {
		wp_register_style( 'acf-input-separation', plugin_dir_url( __FILE__ ) . 'css/input.css' );
		wp_enqueue_style( 'acf-input-separation' );
	}

	function field_group_admin_enqueue_scripts() {
		// register & include CSS
		wp_register_style( 'acf-input-separation', plugin_dir_url( __FILE__ ) . 'css/input.css' );
		wp_enqueue_style( 'acf-input-separation' );
	}

}

new acf_field_separation();
