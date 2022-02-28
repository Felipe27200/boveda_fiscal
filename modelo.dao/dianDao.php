<?php
class DianDao
{
    public function facturasEmpresa()
    {
        $cnn = Conexion::getConexion();

        try{
            $listarEmpresas = "SELECT emp.nit, emp.razonSocial, emp.nombreRepresentante, fac.*". 
            " FROM empresa AS emp INNER JOIN factura AS fac ON emp.nit = fac.empresa_nit;";

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