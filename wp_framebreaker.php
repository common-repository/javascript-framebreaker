<?php
/*
Plugin Name: JavaScript Framebreaker
Plugin URI: https://www.search-one.de/die-besten-wordpress-plugins-fuer-seo-und-so/
Description: Adds a framebreaker JavaScript function to the header for breakting out of Google Image Search and other framesets
Version: 1.1
Author: Kai Spriestersbach
Author URI: https://www.search-one.de/
License: GPL2
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


function add_framebreaker() {
	echo '<script>';
	echo 'function breakfree() { if ( top.location != self.location ) { top.location = self.location; } }';
	echo 'window.onload = breakfree();';
	echo '</script>';
}

add_action('wp_head', 'add_framebreaker');
//add_action('wp_footer','add_framebreaker');
?>