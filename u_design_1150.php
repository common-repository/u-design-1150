<?php

/**
 * @package U-Design-1150
 */
/*
Plugin Name: U-Design-1150
Plugin URI: http://gtmanagement.com
Description: Changes U-Design Theme to the 1152 grid layout.
Version: 1.02
Author: Glenn Tate
Author URI: http://www.gtmanagement.com
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.


*/


//U-Design 960 Style Change

add_action( 'wp_print_styles', 'gtmsud_deregister_styles', 100 );

function gtmsud_deregister_styles() {
	wp_deregister_style( 'u-design-grid-960' );
} 

function gtmsStyle(){
wp_enqueue_style('u-design-grid-1150', plugins_url( 'grid.css' , __FILE__ ), false, '1.0', 'screen');
};

add_action( 'wp_enqueue_scripts', 'gtmsStyle' );


?>