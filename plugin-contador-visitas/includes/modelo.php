<?php if(! defined('ABSPATH')) exit;

class PR_MODELO{
    /* ======================================================================== 
    *  CREAR TABLAS PARA LA BASE DE DATOS
    *  ========================================================================*/



    public function __CONSTRUCT(){

    }

    public static function crear_tabla(){
        global $wpdb;
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        $nombreTabla =  $wpdb->prefix.'visitas';
        $wpdb_collate = $wpdb->collate;

        $created = dbDelta(  
            "CREATE TABLE IF NOT EXISTS $nombreTabla (
                id int(10) unsigned NOT NULL AUTO_INCREMENT,
                visitaPagina smallint(5) NOT NULL DEFAULT 0,

                PRIMARY KEY (id),
                KEY id(id)
            ) COLLATE {$wpdb_collate}"
        );
        dbDelta($created);  

        
    }

    /* ======================================================================== 
    *  REALIZA UNA CONSULTA EN LA TABLA Y RETORNA EL TOTAL DE LAS COLUMNAS
    *  ========================================================================*/
     public static function obtenerCantidadDeVisitas(){

        $query = '';
        $sql = '';
        $tabla = '';
        $visitaActual = '';

        global $wpdb;
        $tabla = $wpdb->prefix.'visitas';
        $sql = "SELECT 	* FROM $tabla" ;
        $query =  $wpdb->get_results($sql, OBJECT);

        foreach( $query as $q):
            $visitaActual = $q->visitaPagina;
        endforeach;

        return (int)$visitaActual;
    } 
    /* ======================================================================== 
    *  REALIZA UNA CONSULTA EN LA TABLA Y RETORNA EL TOTAL DE LAS COLUMNAS
    *  ========================================================================*/
     public static function guardarNuevaVisita( $cantidad ){
        $tabla = '';
        $cantidad = intVal( trim( $cantidad ) );
        global $wpdb;
        $tabla = $wpdb->prefix.'visitas';
        $wpdb->update( $tabla, [ 'visitaPagina' => $cantidad],['id' => '1' ] );
    } 
    
}

  