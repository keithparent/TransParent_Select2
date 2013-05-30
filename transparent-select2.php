<?php
/**
 * Plugin Name: TransParent Select2
 * Plugin URI: http://www.keithparent.com/transparent-select2/
 * Description: TransParent implementation of the Select2 jQuery plug-in.
 * Version: 1.0
 * Author: Keith Parent
 * Author URI: http://www.keithparent.com
 * Author Email: keithparent@me.com
 * Credits:
    Igor Vaynberg [ http://ivaynberg.github.io/select2/ ]
    And the many talented graphic and web designers and developers that spend
	much of their freetime sharing the knowledge of their experience.
 * 
 * License:
 * 
	Copyright 2013 Keith Parent (keithparent@me.com)
 * 
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.
 * 
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
 * 
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 */


function transparent_select2(){

	// Add Select2 stylesheet to the header

	wp_enqueue_style("jquery.select2",WP_PLUGIN_URL."/TransParent_Select2/select2/select2.css",false,"3.4.0");


	// Add Select2 scripts to the footer

	wp_enqueue_script("jquery");
	wp_enqueue_script("jquery.select2", WP_PLUGIN_URL."/TransParent_Select2/select2/select2.js", array("jquery"), "3.4.0",1);	
	wp_enqueue_script("jquery.select2init", WP_PLUGIN_URL."/TransParent_Select2/select2-init.js", array("jquery","jquery.select2"), "",1);
	
		
}

if ( ! is_admin() ) {
	add_action('init', 'transparent_select2');
}



/* EOF */
