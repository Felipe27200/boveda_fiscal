<?php
require '../modelo.dao/empresaDao.php';
require '../modelo.dto/empresaDto.php';
require '../utilidades/conexion.php';

if (isset($_POST['registro']))
{
    $empresaDao = new EmpresaDao();
    $empresaDto = new EmpresaDto();

    // Asignar los datos
    $empresaDto->setNit($_POST['nit']);
    $empresaDto->setRazonSocial($_POST['razonSocial']);
    $empresaDto->setNombreRepresentante($_POST['nombreRepresentante']);
    $empresaDto->setDireccion($_POST['direccion']);
    $empresaDto->setTelefono($_POST['telefono']);
    $empresaDto->setCorreo($_POST['correo']);
    $empresaDto->setSitioWeb($_POST['sitioWeb']);
    $empresaDto->setContrasenia($_POST['contrasenia']);

    echo "empresaDTo";

    $mensaje = $empresaDao->registrarEmpresa($empresaDto);

    header("location:../registrarFactura.php?mensaje=".$mensaje."&id=".$empresaDto->getNit());
}
?>