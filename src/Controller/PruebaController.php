<?php

require_once('../../config/Conexion.php');
require_once('../Entity/Colaboradores.php');

$aJson = array();

class PruebaController{

    public function __construct() {
        
    }
    
    public function colaboradoresJson(){
        $oColaboradores = new Colaboradores;
        return $oColaboradores->getColaboradores();
    }
}

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'){

    $oPruebaController = new PruebaController;

    if($_POST["accion"]){

        $aJson["status"] = 1;

        switch ($_POST["accion"]){
            case 'json':
                $aJson["aColaboradores"] = $oPruebaController->colaboradoresJson();
                $aJson["msg"] = "Colaboradores";
                break;
            default:
                $aJson["status"] = 0;
                $aJson["msg"]    = "La accion llego indefinida";
                break;
        }
    }else{
        $aJson["status"] = 0;
        $aJson["msg"]    = "Falta la accion";
    }

    echo json_encode($aJson);

}else{
    $aJson["status"] = 1;
    $aJson["msg"]    = "Accion No Valida";
    return $aJson; 
}