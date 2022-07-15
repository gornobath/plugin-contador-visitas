<?php if(! defined('ABSPATH')) exit;

class PR_CONTROLLER{

    public function __CONSTRUCT(){
        
    }

    public static function guardarVisitaPagina(){
        $visitaActual = '';
        $visitaNueva = '';
        $cantidadVisitas =  intVal( trim( PR_MODELO::obtenerCantidadDeVisitas() ) ) ;
        $visitaNueva = $cantidadVisitas + 1;
        PR_MODELO::guardarNuevaVisita( (int)$visitaNueva );
    }
}