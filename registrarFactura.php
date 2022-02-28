<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Registrar Factura</title>
</head>

<body>
    <div class="row justify-content-around">
        <?php if (isset($_GET['mensaje'])) { ?>
            <div class="col-md-4 mt-4 text-center">
                <h4><?php echo "•" . $mensaje = $_GET['mensaje'] . "•"; ?></h4>
            </div>
        <?php } ?>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-4">
            <div class="row justify-content-around">
                <h3>Registrar Factura</h3>
            </div>

            <form action="./controladores/controlador.facturas.php" method="post">
                <div class="form-group">
                    <label for="">NIT Empresa</label>
                    <input type="number" name="empresa_nit" class="form-control" id="empresa_nit" value="<?php echo $_GET['id']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="number" min="0" name="cantidad" id="cantidad" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Valor Unitario</label>
                    <input type="number" min="0.0" step="any" name="valorUnitario" id="valorUnitario" class="form-control" placeholder="0.0" required>
                </div>

                <div class="form-group">
                    <label for="">Fecha de Emisión</label>
                    <input type="date" name="fechaEmision" id="fechaEmision" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Fecha de Pago</label>
                    <input type="date" name="fechaPago" id="fechaPago" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Tipo de Factura</label>
                    <select class="form-control" name="tipoFactura" id="tipoFactura" required>
                        <option value="">Seleccione</option>
                        <option value="1">Débito</option>
                        <option value="2">Crédito</option>
                        <option value="3">Normal</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Estado de Factura</label>
                    <select class="form-control" name="estado" id="estado" required>
                        <option value="">Seleccione</option>
                        <option value="1">Activa</option>
                        <option value="2">Cancelada</option>
                    </select>
                </div>

                <input type="submit" class="btn btn-block btn-primary" value="Registrar Factura" name="registro">

                <div class="text-center mt-3">
                    <a href="./facturaEmpresa.php?empresa_nit=<?php echo $_GET['id']; ?>" class="btn btn-block btn-success">Ver Mis Facturas</a>
                </div>

                <div class="text-center mt-3 mb-4">
                    <a href="cerrarEmpresa.php" class="btn btn-block btn-danger">Cerrar Sesión</a>
                </div>

            </form>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>