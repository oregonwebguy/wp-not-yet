<?php

/**
 * Plugin Name:       Not Yet
 * Plugin URI:        https://harnessyourwebsite.com/
 * Description:       Simple coming soon plugin for WordPress.
 * Version:           1.0.1
 * Author:            Harness Media LLC
 * Author URI:        https://harnessyourwebsite.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpnotyet
 * Domain Path:       /languages
 */


add_action( 'template_redirect', 'notyet_coming_soon' );

function notyet_coming_soon() {
	if( !is_user_logged_in() && !is_page('coming-soon') ) {
		wp_redirect( site_url('coming-soon') );
		exit();
	}
}



///////////////
// CHANGELOG //
///////////////

/**
 * 1.0.0	2022-06-12	Initial Release: Simple redirect of all pages to coming-soon page for users that are not logged in.
 * 1.0.1	2022-06-14	Change root folder name and primary PHP file.
 */
