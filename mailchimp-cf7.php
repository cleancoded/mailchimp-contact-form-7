<?php
/*
Plugin Name: MailChimp Integration for Contact Form 7
Plugin URI: https://github.com/cleancoded/mailchimp-contact-form-7
Description: Easily integrate Mailchimp with Contact Form 7. Automatically add form submissions to predetermined lists in MailChimp, using its latest API.
Author: CLEANCODED
Author URI: https://cleancoded.com
Text Domain: contact-form-7
Domain Path: /languages/
Version: 1.0.4
*/

/*  This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

define( 'SPARTAN_MCE_VERSION', '0.4.21' );
define( 'SPARTAN_MCE_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'SPARTAN_MCE_PLUGIN_NAME', trim( dirname( SPARTAN_MCE_PLUGIN_BASENAME ), '/' ) );
define( 'SPARTAN_MCE_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'SPARTAN_MCE_PLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );
define( 'SPARTAN_MCE_PLUGIN_MODULES_DIR', SPARTAN_MCE_PLUGIN_DIR . '/modules' );

require_once( SPARTAN_MCE_PLUGIN_DIR . '/lib/mailchimp.php' );

