<?php

/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class DP8_modules_loader
{

	/**
	 * Initializes the class once all plugins have loaded.
	 */
	static public function init()
	{
		add_action('plugins_loaded', __CLASS__ . '::setup_hooks');
	}

	/**
	 * Setup hooks if the builder is installed and activated.
	 */
	static public function setup_hooks()
	{
		if (!class_exists('FLBuilder')) {
			return;
		}

		// Load custom modules.
		add_action('init', __CLASS__ . '::load_modules');

		// Register custom fields.
		add_filter('fl_builder_custom_fields', __CLASS__ . '::register_fields');

		// Enqueue custom field assets.
		add_action('init', __CLASS__ . '::enqueue_field_assets');
	}

	/**
	 * Loads our custom modules.
	 */
	static public function load_modules()
	{
		require_once DP8_MODULE_DIR . 'modules/hero-banner/hero-banner.php';
		require_once DP8_MODULE_DIR . 'modules/features/features.php';
		require_once DP8_MODULE_DIR . 'modules/service-works/service-works.php';
		require_once DP8_MODULE_DIR . 'modules/calling/calling.php';
		require_once DP8_MODULE_DIR . 'modules/feedback/feedback.php';
		require_once DP8_MODULE_DIR . 'modules/about/about.php';
		require_once DP8_MODULE_DIR . 'modules/content-text/content-text.php';
		require_once DP8_MODULE_DIR . 'modules/hero-banner-single/hero-banner-single.php';
		require_once DP8_MODULE_DIR . 'modules/slider/slider.php';
		require_once DP8_MODULE_DIR . 'modules/title-text/title-text.php';
	}

	/**
	 * Registers our custom fields.
	 */
	static public function register_fields($fields)
	{
		$fields['my-custom-field'] = DP8_MODULE_DIR . 'fields/my-custom-field.php';
		return $fields;
	}

	/**
	 * Enqueues our custom field assets only if the builder UI is active.
	 */
	static public function enqueue_field_assets()
	{
		if (!FLBuilderModel::is_builder_active()) {
			return;
		}

		wp_enqueue_style('my-custom-fields', DP8_MODULE_URL . 'assets/css/fields.css', array(), '');
		wp_enqueue_script('my-custom-fields', DP8_MODULE_URL . 'assets/js/fields.js', array(), '', true);
	}
}

DP8_modules_loader::init();