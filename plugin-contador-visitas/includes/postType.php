<?php 
if(! defined('ABSPATH')) exit;
add_action( 'admin_menu', 'pr_menu_contador' );

function pr_menu_contador(){

     add_menu_page(
        __('Contador Visitas' , 'cc_vp_contador'),
        __('Contador Visitas' , 'cc_vp_contador'),
        'administrator',
        'cc_vp_contador',
        'pr_mostrarVisitas',
        'dashicons-clipboard',
       5
    ); 
}

function pr_mostrarVisitas(){
    $cantidadVisitas = PR_MODELO::obtenerCantidadDeVisitas() ;
    $html = '';
    echo '<h1 class="wp-heading-inline"> '.esc_html('Contador Visitas').' </h1>';
    $html .='<aside class="pr_boxConteo">';
        $html .= '<span class="pr_boxConteo_numero">'.esc_html( $cantidadVisitas ) .'</span>'; 
        $html .= '<span class="pr_boxConteo_titulo">Visitas</span>'; 
    $html .='</aside>'; 

	echo $html;
}
