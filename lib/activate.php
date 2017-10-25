<?php
/*  CLEANCODED (cleancoded.com)

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
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


function mce_error() {

  if( !file_exists(WP_PLUGIN_DIR.'/contact-form-7/wp-contact-form-7.php') ) {

    $mce_error_out = '<div class="error" id="messages"><p>';
    $mce_error_out .= __('The Contact Form 7 plugin must be installed for the <b>MailChimp Integration</b> to work. <b><a href="'.admin_url('plugin-install.php?tab=plugin-information&plugin=contact-form-7&from=plugins&TB_iframe=true&width=600&height=550').'" class="thickbox" title="Contact Form 7">Install Contact Form 7  Now.</a></b>', 'mce_error');
    $mce_error_out .= '</p></div>';
    echo $mce_error_out;

  } else if ( !class_exists( 'WPCF7') ) {

    $mce_error_out = '<div class="error" id="messages"><p>';
    $mce_error_out .= __('The Contact Form 7 is installed, but <strong>you must activate Contact Form 7</strong> below for the <b>MailChimp Integration</b> to work.','mce_error');
    $mce_error_out .= '</p></div>';
    echo $mce_error_out;

  }

}
add_action('admin_notices', 'mce_error');
