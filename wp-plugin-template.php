<?php
/**
 * Plugin Name: [Plugin Title Goes Here]
 * Description: [Plugin Description Goes Here]
 * Plugin URI:  https://github.com/rveitch/wp-plugin-template
 * Author:      Ryan Veitch
 * Author URI:  ryanveitch.blog
 * License:     GPL v2 or later
 * Version:     0.YY.MM.DD
 */

/********************************* NOTES ***************************************
Things to replace:
  # Text Domain: Find/Replace 'vdd-plugin-template' with the new text domain
	# Function Prefix: Find/Replace 'vdd-plugin-template' with the new prefix
	# Prefixes: Find/Replace 'vdd_' if not an vdd plugin
	# File Name: vdd-plugin-template.php
	# Folder Name: /vdd-plugin-template/
	# Delete the 'assets', 'templates' and 'includes' folders if not used for plugin.
*******************************************************************************/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/*--------------------------------------------------------------
# PLUGIN ACTIVATION/DEACTIVATION HOOKS
--------------------------------------------------------------*/

/**
 * Plugin Activation Hook
 */
function vdd_plugin_template_plugin_activation() {
	flush_rewrite_rules(); // Flush our rewrite rules on activation.
}
register_activation_hook( __FILE__, 'vdd_plugin_template_plugin_activation' );

/**
 * Plugin Deactivation Hook
 */
function vdd_plugin_template_plugin_deactivation() {
	flush_rewrite_rules(); // Flush our rewrite rules on deactivation.
}
register_deactivation_hook( __FILE__, 'vdd_plugin_template_plugin_deactivation' );

/*--------------------------------------------------------------
# LOAD INCLUDES FILES
--------------------------------------------------------------*/

/**
 * Load "includes" files.
 */
function _vdd_plugin_template_load_includes() {
	//require_once( plugin_dir_path( __FILE__ ) . '/includes/*.php' );
}
add_action( 'init', '_vdd_plugin_template_load_includes', 99 );

/**
 * Load these "includes" only if the user is on the Admin Dashboard
 */
if ( is_admin() ) {
	//require_once( plugin_dir_path( __FILE__ ) . '/includes/*.php' );
}

/*--------------------------------------------------------------
# SECTION NAME
--------------------------------------------------------------*/

/**
* Description
*
* @author Firstname Lastname <firstname.lastname@forumcomm.com>
* @source [add url/link to source for documentation or reference if code was borrowed]
* @since 0.YY.MM.DD
* @version 0.YY.MM.DD
*/
