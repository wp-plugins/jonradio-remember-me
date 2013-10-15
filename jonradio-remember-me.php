<?php
/*
Plugin Name: jonradio Remember Me
Plugin URI: http://jonradio.com/plugins/jonradio-remember-me/
Description: Set default to Remember Me on WordPress Login Form to avoid re-login after browser close. Without using JavaScript.
Version: 1.0
Author: jonradio, adiant
Author URI: http://jonradio.com/plugins
License: GPLv2
*/

/*  Copyright 2013  jonradio  (email : info@jonradio.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'login_form_login', 'jr_rm_post' );

function jr_rm_post() {
	if ( empty( $_POST['rememberme'] ) ) {
		$_POST['rememberme'] = 'forever';
	}
}

?>