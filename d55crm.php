<?php
/*
Plugin Name: CRM Integration with GravityForms
Description: Integrates GravityForms with Digital 55 CRM
Version: 0.1
Author: Dylan Logan
Author URI: 
*/

/* LICENSE
D55 CRM Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.
 
D55 CRM Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with D55 CRM Plugin. If not, see https://www.gnu.org/licenses/gpl-3.0.html.
*/

add_action("gform_after_submission", "set_post_content", 10, 2);

function set_post_content($entry, $form){
    $message = print_r($entry, true);
    $message = wordwrap($message, 70);
    mail('dlogan@digital-55.com', 'Getting the Gravity Form Field IDs', $message);
}

?>