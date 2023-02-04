
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="assets/favicon.jpg" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrador</title>
    <link href="css/styles.css" rel="stylesheet" />

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
   

                    <hr />
                    <table id="tabla" class="table table-dark table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Precio</th>
                                <th>Genero</th>
                                <th>Talla</th>
                                <th>Activo</th>
                                <th>Cantidad</th>
                                <th>Categoria</th>
                                <th>institucion</th>
                                <th>Acciones</th>
                            </tr>


                        </thead>
                        <tbody>
                            <?php

                            require '../conexion.php';
                            $sql = "SELECT * FROM `producto`";
                            $datos = $con->query($sql);
                            while ($campo = $datos->fetch_object()) {
                                
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $campo->Id_producto;  ?></td>
                                    <td> 
                                    <img class="img-thumbnail img-fluid" src="foto/<?php echo $campo->Imagen;?>" width="100px">
                                        </td>
                                    <td><?php echo number_format($campo->Precio) ;  ?></td>
                                    <td><?php echo $campo->Genero;  ?></td>
                                    <td><?php echo $campo->Talla;  ?></td>
                                   
                                    <td></td>
                                    <td><?php echo $campo->Cantidad_stock;  ?></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="?id=<?php echo $campo->Id_producto;  ?>"  class="btn btn-outline-primary btn-sm btn-editar"><i class="fas fa-pen"></i></a> 
                                        <a href="eliminar_producto.php?id=<?php echo base64_encode($campo->Id_producto);?>" class="btn btn-outline-danger btn-sm ms-3 btn-eliminar "><i class="fas fa-trash"></i></a>
                                        
                                    </td>
                                </tr>
                            <?php
                            }
                        
                            ?>
                        </tbody>
                    </table>
             
           
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
</body>

</html>
<script>
    var tabla= document.querySelector("#tabla")

    var dataTable = new DataTable(tabla,{
        perPage:5,
        perPageSelect:[3,6,9,12]
    });

</script>