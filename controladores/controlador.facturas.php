<?php
require '../modelo.dao/facturaDao.php';
require '../modelo.dto/facturaDto.php';
require '../utilidades/conexion.php';

if (isset($_POST['registro']))
{
    $facturaDao = new FacturaDao();
    $facturaDto = new FacturaDto();

    // Asignar los datos
    $facturaDto->setEmpresa_nit($_POST['empresa_nit']);
    $facturaDto->setNombre($_POST['nombre']);
    $facturaDto->setCantidad($_POST['cantidad']);
    $facturaDto->setValorUnitario($_POST['valorUnitario']);
    $facturaDto->setFechaEmision($_POST['fechaEmision']);
    $facturaDto->setFechaPago($_POST['fechaPago']);
    $facturaDto->setTipoFactura($_POST['tipoFactura']);
    $facturaDto->setEstado($_POST['estado']);

    $mensaje = $facturaDao->registrarFactura($facturaDto);

    header("location:../registrarFactura.php?mensaje=".$mensaje."&id=".$facturaDto->getEmpresa_nit());
}
?>