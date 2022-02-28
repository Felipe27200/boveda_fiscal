<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Registrar Empresa</title>
</head>

<body>
    <div class="row justify-content-around">
        <?php if (isset($_GET['mensaje'])) { ?>
            <div class="col-md-4 mt-4 text-center">
                <h4><?php echo "•".$mensaje = $_GET['mensaje']."•"; ?></h4>
            </div>
        <?php } ?>
    </div>
    
    <div class="row justify-content-around">
        <h3>Registrar Empresa</h3>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-4">
            <form action="./controladores/controlador.empresas.php" method="POST">
                <div class="form-group">
                    <label for="NIT">NIT</label>
                    <input type="number" name="nit" id="nit" class="form-control" min="0" required>
                </div>

                <div class="form-group">
                    <label for="Razón Social">Razón Social</label>
                    <input type="text" name="razonSocial" id="razonSocial" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Nombre Representante">Nombre Representante</label>
                    <input type="text" name="nombreRepresentante" id="nombreRepresentante" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Dirección">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Correo Electrónico</label>
                    <input type="email" name="correo" id="correo" placeholder="ejemplo@gmail.com" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Sitio Web</label>
                    <input type="text" name="sitioWeb" id="sitioWeb" placeholder="www.google.com" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="contrasenia" id="contrasenia" class="form-control" required>
                </div>

                <input type="submit" class="btn btn-block btn-info" value="Registrar Empresa" name="registro">
            </form>
        </div>

    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>