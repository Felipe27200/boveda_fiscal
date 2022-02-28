<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
    <title>Mis Facturas</title>
</head>
<body class="container">
    <center>
        <h3 class="mt-5">Mis Facturas</h3>
        <table id="example" class="table table-striped mt-4" border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Valor Unitario</th>
                    <th>Total</th>
                    <th>Total IVA</th>
                    <th>Fecha Emisión</th>
                    <th>Fecha Pago</th>
                    <th>Tipo Factura</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require 'modelo.dao/facturaDao.php';
                    require 'modelo.dto/facturaDto.php';
                    require 'utilidades/conexion.php';

                    $facturaDao = new FacturaDao();
                    $allfacturas = $facturaDao->facturasEmpresa($_GET['empresa_nit']);

                    foreach ($allfacturas as $factura){ 
                ?>
                <tr>
                    <td><?php echo $factura['nombre']; ?></td>
                    <td><?php echo number_format($factura['cantidad']); ?></td>
                    <td><?php echo "$" . number_format($factura['valorUnitario'], 2); ?></td>
                    <td><?php echo "$" . number_format($factura['total'], 2); ?></td>
                    <td><?php echo "$" . number_format($factura['totalIva'], 2); ?></td>
                    <td><?php echo $factura['fechaEmision']; ?></td>
                    <td><?php echo $factura['fechaPago']; ?></td>
                    <td><?php echo $factura['tipoFactura']; ?></td>
                    <td><?php echo $factura['Estado']; ?></td>
                    <!-- <td><a href="consultarVendedor.php?id=<?php echo $vehiculo['id_vendedor']; ?>">Ver Datos Vendedor</a></td> -->
                </tr>
                
                <?php
                    }
                ?>
            </tbody>
        </table>
        
        <div class="">
            <a href="./registrarFactura.php?id=<?php echo $_GET['empresa_nit']; ?>" class="btn btn-block btn-success col-md-3">Registrar Factura</a>
        </div>

        <div class="text-center mt-4">
            <a class="btn btn-danger col-md-3" href="cerrarEmpresa.php">Cerrar Sesión</a><br><br>
        </div>

    </center>
    
    <!-- <script src="js/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Script Datatables -->
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>