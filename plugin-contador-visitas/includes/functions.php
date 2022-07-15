<?php 

PR_MODELO::crear_tabla();

function pr_guardarVisita(){
    echo PR_CONTROLLER::guardarVisitaPagina();
}

add_action('wp_footer','pr_guardarVisita');