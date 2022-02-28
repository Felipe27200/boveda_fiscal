<?php
class FacturaDto
{
    private $idFactura;
    private $empresa_nit;
    private $nombre;
    private $cantidad;
    private $valorUnitario;
    private $fechaEmision;
    private $fechaPago;
    private $tipoFactura;
    private $Estado;

    public function getIdFacura(){
        return $this->idFactura;
    }

    public function getEmpresa_nit()
    {
        return $this->empresa_nit;
    }


    public function setEmpresa_nit($empresa_nit)
    {
        $this->empresa_nit = $empresa_nit;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;
    }
 
    public function getTotal()
    {
        return $this->getValorPorCantidad() + $this->getTotalIva();
    }
 
    public function getTotalIva()
    {
        return $this->getValorPorCantidad() * 0.19;
    }

    public function getValorPorCantidad()
    {
        return $this->getCantidad() * $this->getValorUnitario();
    }

    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;
    }

    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;
    }

    public function getTipoFactura()
    {
        return $this->tipoFactura;
    }

    public function setTipoFactura($tipoFactura)
    {
        $this->tipoFactura = $tipoFactura;
    }

    public function getEstado()
    {
        return $this->Estado;
    }

    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }
}
?>