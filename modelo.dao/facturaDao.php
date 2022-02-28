<?php
class FacturaDao
{
    public function registrarFactura(FacturaDto $facturaDto)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";

        try{
            $query = $cnn->prepare("INSERT INTO factura (empresa_nit, nombre, cantidad, valorUnitario, total, totalIva, fechaEmision, fechaPago, tipoFactura, Estado) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

            $query->bindParam(1,$facturaDto->getEmpresa_nit());
            $query->bindParam(2,$facturaDto->getNombre());
            $query->bindParam(3,$facturaDto->getCantidad());
            $query->bindParam(4,$facturaDto->getValorUnitario());
            $query->bindParam(5,$facturaDto->getTotal());
            $query->bindParam(6,$facturaDto->getTotalIva());
            $query->bindParam(7,$facturaDto->getFechaEmision());
            $query->bindParam(8,$facturaDto->getFechaPago());
            $query->bindParam(9,$facturaDto->getTipoFactura());
            $query->bindParam(10,$facturaDto->getEstado());

            $query->execute();

            $mensaje = "Factura Registrada";
        }
        catch (Exception $e){
            $mensaje = $e->getMessage();
        }

        $cnn = null;

        return $mensaje;
    }

    public function obtenerFactura($idFactura)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";

        try{
            $query = $cnn->prepare("SELECT * FROM factura WHERE idfactura = ?");
            $query->bindParam(1, $idFactura);
            $query->execute();

            return $query->fetch();
        }
        catch(Exception $ex){
            echo "Error".$ex->getMessage();
        }

        $cnn = null;

        return $mensaje;
    }

    public function facturasEmpresa($empresa_nit)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";

        try{
            $query = $cnn->prepare("SELECT * FROM factura WHERE empresa_nit = ?");
            $query->bindParam(1, $empresa_nit);
            $query->execute();

            return $query->fetchAll();
        }
        catch(Exception $ex){
            echo "Error".$ex->getMessage();
        }

        $cnn = null;

        return $mensaje;
    }

    // obtener todas las 
    public function listarFacturas()
    {
        $cnn = Conexion::getConexion();

        try{
            $listarFacturas = "SELECT * FROM factura";

            $query = $cnn->prepare($listarFacturas);
            $query->execute();

            return $query->fetchAll();
        }
        catch(Exception $ex){
            echo "Error".$ex->getMessage();
        }
    }

    public function topFacturas()
    {
        $cnn = Conexion::getConexion();

        try{
            $listarFacturas = "SELECT * FROM factura order by total desc;";

            $query = $cnn->prepare($listarFacturas);
            $query->execute();

            return $query->fetchAll();
        }
        catch(Exception $ex){
            echo "Error".$ex->getMessage();
        }
    }
}
?>