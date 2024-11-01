<?php

/**
* Plugin Name: VG All Font Upload
* Description: Remove html comments from the source of your wordpress page only activate the plugin
* Version: 1.0.0
* Author: Vishal Gupta
* License: GPLv2
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

//Exit if accessed directly
add_filter('upload_mimes', 'vgafu_upload_mimes');
function vgafu_upload_mimes($existing_mimes) {
  	$existing_mimes['otf'] = 'application/x-font-otf';
  	$existing_mimes['woff'] = 'application/x-font-woff';
  	$existing_mimes['ttf'] = 'application/x-font-ttf';
  	$existing_mimes['svg'] = 'image/svg+xml';
  	$existing_mimes['eot'] = 'application/vnd.ms-fontobject';
  	return $existing_mimes;
  }

?>