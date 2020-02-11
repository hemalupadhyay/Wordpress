<?php
/**
 * Plugin Name: Card Block Gutenberg
 * Plugin URI:https://hemalupadhyaymca.wordpress.com/
 * Description: Card Block is custom gutenberg block.
 * Author: Hemal Upadhyay
 * Author URI: https://hemalupadhyaymca.wordpress.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
