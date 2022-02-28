<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
    <title>Top Facturas</title>
</head>
<body class="container">

    <div class="row justify-content-between mt-5">
        <div class="col-md-3"><a href="./listadoEmpresas.php" class="btn btn-success">Regresar</a></div>
        <div class="col-md-6"><h3>Top 50 Facturas de mayor valor emitido</h3></div>
        <div class="col-md-3"></div>
    </div>
    <center>
        <table id="example" class="table table-striped mt-4" border="1">
            <thead>
                <tr>
                    <th>NIT</th>
                    <th>Nombre Rep.</th>
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
                    // require 'modelo.dto/facturaDto.php';
                    require 'utilidades/conexion.php';

                    $facturaDao = new FacturaDao();
                    $allfacturas = $facturaDao->topFacturas();

                    for ($indice = 0; $indice < count($allfacturas) && $indice <= 50; $indice++){ 
                ?>
                <tr>
                    <td><?php echo $allfacturas[$indice]['empresa_nit'] ?></td>
                    <td><?php echo $allfacturas[$indice]['nombre'] ?></td>
                    <td><?php echo number_format($allfacturas[$indice]['cantidad']); ?></td>
                    <td><?php echo "$".number_format($allfacturas[$indice]['valorUnitario'], 2); ?></td>
                    <td><b><?php echo "$".number_format($allfacturas[$indice]['total'], 2); ?></b></td>
                    <td><?php echo "$".number_format($allfacturas[$indice]['totalIva'], 2); ?></td>
                    <td><?php echo $allfacturas[$indice]['fechaEmision']; ?></td>
                    <td><?php echo $allfacturas[$indice]['fechaPago']; ?></td>
                    <td><?php echo $allfacturas[$indice]['tipoFactura']; ?></td>
                    <td><?php echo $allfacturas[$indice]['Estado']; ?></td>
                    <!-- <td><a href="consultarVendedor.php?id=<?php echo $vehiculo['id_vendedor']; ?>">Ver Datos Vendedor</a></td> -->
                </tr>
                
                <?php
                    }
                ?>
            </tbody>
        </table>
        
        <div class="text-center mt-4">
            <a class="btn btn-danger col-md-3" href="cerrarDian.php">Cerrar Sesión</a><br><br>
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