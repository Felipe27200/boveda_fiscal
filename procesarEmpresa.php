<?php
// print_r($_POST);
session_start();

require './utilidades/conexion.php';

$cnn = Conexion::getConexion();

$empresa = $_POST['nit'];
$contra = $_POST['password'];

// Prepara la instrucción sql
$sentencia = $cnn->prepare("SELECT * FROM empresa WHERE nit = ? AND contrasenia = ?;");

// La ejecuta y le envía los argumentos necesarios
$sentencia->execute([$empresa, $contra]);

$valor = $sentencia->fetch(PDO::FETCH_OBJ);

if ($valor === FALSE)
{
    header('Location:loginEmpresa.php');
}
elseif ($sentencia->rowcount() == 1)
{
    $_SESSION['nit'] = $valor->$nit;
    
    header("Location:registrarFactura.php?mensaje=Bienvenido&id=".$empresa);
}
?>