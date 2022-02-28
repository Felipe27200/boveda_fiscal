<?php
// print_r($_POST);
session_start();

require './utilidades/conexion.php';

$cnn = Conexion::getConexion();

$id = $_POST['idDian'];
$contra = $_POST['password'];

// Prepara la instrucción sql
$sentencia = $cnn->prepare("SELECT * FROM dian WHERE idDian = ? AND contrasenia = ?;");

// La ejecuta y le envía los argumentos necesarios
$sentencia->execute([$id, $contra]);

$valor = $sentencia->fetch(PDO::FETCH_OBJ);

if ($valor === FALSE)
{
    header('Location:loginDian.php');
}
elseif ($sentencia->rowcount() == 1)
{
    $_SESSION['idDian'] = $valor->$id;
    
    header("Location:listadoEmpresas.php");
}
?>