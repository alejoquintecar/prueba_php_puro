<?php

    class Conexion{
        public static function conectar(){

            $aJson = array();

            try{

                $oConexion = new PDO('mysql:host=localhost; dbname=prueba_colaboradores', 'root', '');
                $oConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $oConexion->exec("SET CHARACTER SET UTF8");

            }catch(Exception $e){
                die("Error: " . $e->getMessage());
                echo("Línea Error: " . $e->getLine());
            }

            return $oConexion;

        }
    }

?>