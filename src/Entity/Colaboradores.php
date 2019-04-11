<?php

require_once('../../config/Conexion.php');

/**
 * Colaboradores
 * Table(name="colaboradores")
 */
class Colaboradores{

    public function __construct() {
        $this->oConexion = new Conexion;
        $this->oDb = $this->oConexion->conectar();
    }

    /**
     * @var int
     * Column(name="id", type="integer", nullable=false)
    */
    private $id;
    
    /**
     * @var string
     * Column(name="nombre", type="string", length=50, nullable=false)
    */
    private $nombre;
    
    /**
     * @var int
     * Column(name="sueldo_base", type="integer", nullable=false)
    */
    private $sueldoBase;

    /**
     * @var string
     * Column(name="area", type="string", length=50, nullable=false)
    */
    private $area;

    /**
     * @var int
     * Column(name="sueldo_final", type="integer", nullable=false)
    */
    private $sueldoFinal;

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
        return $this;
    }

    // public function getNombre(){
    //     return $this->nombre;
    // }

    public function getColaboradores(){

        $sqlColaboradores = $this->oDb->query("SELECT * FROM colaboradores");

        $aColaboradores = array();
        foreach ($sqlColaboradores as $aColaborador) {
            $aColaboradores[] = array(
                "id"            => $aColaborador["id"][0],
                "nombre"        => $aColaborador["nombre"][0],
                "sueldo_base"   => $aColaborador["sueldo_base"][0],
                "sueldo_final"  => $aColaborador["sueldo_final"][0],
            );
        }

        return $aColaboradores;
    }
}