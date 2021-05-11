<?php

/**
 * Plugin Name: CoderDojo Grading
 * Plugin URI:
 * Description: Display belts and badges on your site
 * Version: 0.9.0
 * Author: Anthony Nolan
 * Author URI: 
 * License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Requires at least: 5.7
 * Tested up to: 5.7
 * Requires PHP: 7.0
 * Text Domain: coderdojo-grading
 * Domain path: /languages/
 */

/**
 * Copyright 2013-2020 Automattic
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Custom Fuctions */
require_once dirname( __FILE__ ) . '/includes/coderdojo-grading-functions.php';

/** Custom Admin Menu */
require_once dirname( __FILE__ ) . '/includes/coderdojo-grading-admin-menu.php';

/** Custom Post Types */
require_once dirname( __FILE__ ) . '/includes/coderdojo-grading-custom-post-types.php';

/** Custom Taxonomies */
require_once dirname( __FILE__ ) . '/includes/coderdojo-grading-taxonomies.php';

/** Custom Terms */
require_once dirname( __FILE__ ) . '/includes/coderdojo-grading-terms.php';

/** Custom Meta Boxes */
require_once dirname( __FILE__ ) . '/includes/coderdojo-grading-meta-boxes.php';

/** Custom Templates */
//require_once dirname( __FILE__ ) . '/includes/custom-templates.php';

/** Custom User Details */
require_once dirname( __FILE__ ) . '/includes/custom-user-details.php';

function coderdojo_grading_enqueue_block_editor_assets() {   
    wp_enqueue_script( 'coderdojo_grading_editor__script', plugin_dir_url( __FILE__ ) . 'assets/js/editor-index.js' );
	wp_localize_script( 'coderdojo_grading_editor__script', 'coderdojoajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action('enqueue_block_editor_assets', 'coderdojo_grading_enqueue_block_editor_assets');
