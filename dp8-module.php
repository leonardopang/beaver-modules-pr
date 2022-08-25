<?php

/**
 * Plugin Name: DP8 Modules
 * Description: Custom modules criados para clientes da DP8 Estúdio.
 * Version: 0.1
 * Author: DP8 Estúdio
 * Author URI: http://dp8.studio
 */


define( 'DP8_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'DP8_MODULE_URL', plugins_url( '/', __FILE__ ) );

require_once DP8_MODULE_DIR . 'classes/class-dp8-modules-loader.php';