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
    <div class="row justify-content-between mt-5 mb-3">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
            <h3>REPORTE FACTURAS</h3>
        </div>
        <div class="col-md-3"><a href="./topFacturas.php" class="btn btn-info">Top Facturas</a></div>
    </div>

    <div class="row justify-content-around">
        <table id="example" class="table table-striped mt-4" border="1">
            <thead>
                <tr>
                    <th>NIT</th>
                    <th>Razón Social</th>
                    <th>Representante</th>
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
                require 'modelo.dao/dianDao.php';
                require 'utilidades/conexion.php';

                $dianDao = new DianDao();
                $allfacturas = $dianDao->facturasEmpresa();

                foreach ($allfacturas as $factura) {
                ?>
                    <tr>
                        <td><?php echo $factura['nit']; ?></td>
                        <td><?php echo $factura['razonSocial']; ?></td>
                        <td><?php echo $factura['nombreRepresentante']; ?></td>
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
    </div>

    <div class="row justify-content-around">
        <div class="col-md-3 text-center mt-4">
            <a class="btn btn-danger" href="cerrarDian.php">Cerrar Sesión</a><br><br>
        </div>
    </div>

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