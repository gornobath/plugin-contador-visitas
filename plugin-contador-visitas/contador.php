<?php 
/**
 * Plugin Name: Contador de visitas
 * Description: Contabiliza la cantidad de visitas

 * Author: Carlos Cespedes
 * Version: 1.0.0

 *
 * Text Domain: cc_vp_contador
 */
if(! defined('ABSPATH')) exit;
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
require_once plugin_dir_path(__FILE__) . 'includes/scripts.php';
require_once plugin_dir_path(__FILE__) . 'includes/modelo.php';
require_once plugin_dir_path(__FILE__) . 'includes/controlador.php';
require_once plugin_dir_path(__FILE__) . 'includes/functions.php';
require_once plugin_dir_path(__FILE__) . 'includes/postType.php';
register_activation_hook(__FILE__, 'rewrite_flush');