<?php
session_start();

if (isset($_SESSION['idDian'])) {
    header('Location:listadoEmpresas.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Login DIAN</title>
</head>
<body>
<center>
            <div class="row justify-content-around mt-5">
                <div class="col-md-4 mt-5 pb-5 rounded">
                    <form action="./procesarDian.php" method="POST">
                        <h4>Login DIAN</h4>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">ID Usuario:</label>
                            <input type="text" name="idDian" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold ">Contraseña:</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <input type="submit" value="Iniciar Sesión" class="font-weight-bold btn btn-block btn-info btn-lg">
                        <a href="./loginEmpresa.php" class="btn btn-block btn-success">Login Empresa</a>
                        <a href="./registrarEmpresa.php" class="btn btn-block btn-primary">Registrar Empresa</a>
                    </form>
                </div>
            </div>
        </center>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>