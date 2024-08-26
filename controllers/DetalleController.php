<?php

namespace Controllers;

use Exception;
use Model\Cliente;
use MVC\Router;

class DetalleController {

    public static function estadisticas(Router $router){
        $router->render('clientes/estadisticas');
    }
   
    public static function detalleVentasAPI(){
        try{
            $sql = 'SELECT cliente_nombre AS cliente, SUM(detalle_cantidad) AS cantidad
            FROM detalle_ventas
            INNER JOIN clientes ON detalle_cliente = cliente_id
            WHERE detalle_situacion = 1
            GROUP BY cliente_nombre';
    
            $datos = Cliente::fetchArray($sql);
    
            echo json_encode($datos);
        } catch (Exception $e){
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

}



