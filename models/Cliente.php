<?php

namespace Model;

class Cliente extends ActiveRecord
{
    protected static $tabla = 'clientes';
    protected static $idTabla = 'cliente_id';
    protected static $columnasDB = ['cliente_nombre', 'cliente_dpi', 'cliente_situacion' ];

    public $cliente_id;
    public $cliente_nombre;
    public $cliente_dpi;
    public $cliente_situacion;


    public function __construct($args = [])
    {
        $this->cliente_id = $args['cliente_id'] ?? null;
        $this->cliente_nombre = $args['cliente_nombre'] ?? '';
        $this->cliente_dpi = $args['cliente_dpi'] ?? '';
        $this->cliente_situacion = $args['cliente_situacion'] ?? 0;
    }
}