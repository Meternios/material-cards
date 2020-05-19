<?php
/**
 * Plugin Name: Materialcards
 * Plugin URI: https://github.com/Meternios/material-cards
 * Description: Is a Gutenberg Plugin to display Google Materialcards as Posttype
 * Author: Florian Hitz
 * Author URI: https://github.com/Meternios
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package FH
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
