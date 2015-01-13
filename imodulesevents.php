<?php
/*
 * Plugin Name:       iModules Events RSS Shortcode
 * Plugin URI:        http://www.github.com/bengreeley/imodulesevents
 * Description:       Displays an RSS feed of iModules events in order on a WordPress website. Will also sort any RSS feeds that have descriptions starting with the date and text, which can be specified through this plugin. 
 * Version:           1.0.0
 * Author:            Ben Greeley
 * Author URI:        http://www.bengreeley.com
 */
 
 /*  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
require plugin_dir_path( __FILE__) . 'inc/class-imodulesevents.php';

$iModulesEvents = new iModulesEvents();