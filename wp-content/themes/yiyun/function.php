<?php
/**
 * Created by PhpStorm.
 * User: mosiqi
 * Date: 17-9-30
 * Time: 下午5:15
 */
function remove_admin_login_header() {
remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
?>
