<?php
class EmpresaDao
{
    public function registrarEmpresa(EmpresaDto $empresaDto)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";

        try{
            $query = $cnn->prepare("INSERT INTO empresa VALUE (?, ?, ?, ?, ?, ?, ?, ?);");
            
            $query->bindParam(1, $empresaDto->getNit());
            $query->bindParam(2, $empresaDto->getRazonSocial());
            $query->bindParam(3, $empresaDto->getDireccion());
            $query->bindParam(4, $empresaDto->getNombreRepresentante());
            $query->bindParam(5, $empresaDto->getTelefono());
            $query->bindParam(6, $empresaDto->getCorreo());
            $query->bindParam(7, $empresaDto->getSitioWeb());
            $query->bindParam(8, $empresaDto->getContrasenia());

            $query->execute();

            $mensaje = "Empresa Registrada";
        }
        catch (Exception $e)
        {
            $mensaje = $e->getMessage();
        }

        $cnn = null;

        return $mensaje;
    }

    public function obtenerEmpresa($nit)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";

        try{
            $query = $cnn->prepare("SELECT * FROM empresa WHERE nit = ?");
            $query->bindParam(1, $nit);
            $query->execute();

            return $query->fetch();
        }
        catch(Exception $ex){
            echo "Error".$ex->getMessage();
        }

        $cnn = null;

        return $mensaje;
    }

    // obtener Empresa
    public function listarEmpresas()
    {
        $cnn = Conexion::getConexion();

        try{
            $listarEmpresas = "SELECT * FROM empresas";

            $query = $cnn->prepare($listarEmpresas);
            $query->execute();

            return $query->fetchAll();
        }
        catch(Exception $ex){
            echo "Error".$ex->getMessage();
        }
    }
}
?>