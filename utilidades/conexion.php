<?php

// Trae la conexión
$con = Conexion::getConexion();

class Conexion{
    public static function getConexion(){
        $conn = null;

        try {
            $conn = new PDO("mysql:host=localhost;dbname=boveda_fiscal", "root", "hola123");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo 'ERROR: '.$ex->getMessage();
        }

        return $conn;
    }
    
}
?>