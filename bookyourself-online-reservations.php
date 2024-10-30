<?php
/*
Plugin Name: BookYourself online reservations
Version: 0.1.0
Description: Online reservations by BookYourself.com included in your page by shortcode.
Author: BookYourself (info@bookyourself.com)
Author URI: http://www.bookyourself.com
Plugin URI: https://bitbucket.org/bookyourself/wordpress-plugin
License: GPL2
*/

function display_iframe($attrs) {
        extract(shortcode_atts(array(
                "width" => '',
                "provider" => ''	
        ), $attrs));
        return '<div style="width:'.$width.'px; height:740px;background-color:white; padding: 5px;">
                        <iframe style="width:100%; height:740px;" src="https://www.bookyourself.com/api/iframes/provider_calendar?providerId='.$provider.'"></iframe>
                </div>';
}
add_shortcode("reservations", "display_iframe");
?>

