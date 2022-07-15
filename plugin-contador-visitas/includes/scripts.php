<?php if(! defined('ABSPATH')) exit;
function pr_admin_style() {

    wp_enqueue_style('pr_admin_style_css', plugins_url('css/style.css', __FILE__ ) );
}

add_action('admin_enqueue_scripts', 'pr_admin_style');