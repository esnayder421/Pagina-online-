<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpg" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style3.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Compra</title>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>

    <h3 class="text-center text-info">¡ Pedidos !</h3>

    <h6 class="text-center ">¡ Escoje tu talla y cantidad para continuar con tu pedido !</h6>
    <a href="index.php"><img src="assets/img/atras.png" width="50px"></a>

    <div class="container">
        <table class="table">
            <tbody>
                <thead class="thead-dark">
                    <br>
                    <tr>
                        <th>PRENDA</th>
                        <th>PRODUCTO</th>
                        <th>INSTITUCION</th>
                        <th>TALLA</th>
                        <th>CANTIDAD</th>
                        <th>GENERO</th>
                        <th>PRECIO UNIDAD</th>
                        <th>TOTAL</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>


                <?php
                $total = 0;
                $total1 = 0;
                foreach ($_SESSION['carrito'] as $indice => $producto) {
                ?>

                    <tr>
                        <td>
                            <img class="img-thumbnail img-fluid" src="../../administrador/foto/<?php echo $producto['imagen']; ?>" width="100px">
                        </td>


                        <td><?php echo $producto['descripcion']; ?></td>
                        <td><?php echo $producto['nombre_institucion']; ?></td>
                        <td>
                            <select class="form-select" name="Talla" id="">
                                <?php
                                require '../../conexion.php';

                                $Idproducto = $producto['id_producto'];
                                $sql = "SELECT Id_categoria,Id_institucion FROM producto
                                    where Id_producto = $Idproducto";
                                $datos = $con->query($sql);
                                $idcategoria = $datos->fetch_object();
                                $id_categoria = $idcategoria->Id_categoria;
                                $id_instuto = $idcategoria->Id_institucion;

                                $sql1 = "SELECT Talla FROM producto
                                    where Id_categoria = $id_categoria and Id_institucion = $id_instuto";
                                $datos1 = $con->query($sql1);
                                while ($campo = $datos1->fetch_object()) { ?>
                                    <option><?php echo $campo->Talla ?></option>
                                <?php } ?>
                            </select>
                        </td>

                        <td>
                            <form action="logica_carrito.php" method="POST">
                                <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
                                <input id="1" class="col-md-5" type="number" name="cantidad" value="<?php echo $producto['cantidad']; ?>">
                                <button class="btn btn-outline-info" name="accion" type="submit" value="actualizar"><i id="itn" class="fas fa-pen"></i></button>
                            </form>
                        </td>

                        <td><?php
                            if ($producto['genero'] == 1) {
                                echo "Masculino";
                            } else if ($producto['genero'] == 2) {
                                echo "Femenino";
                            } else if ($producto['genero'] == 3) {
                                echo "Unisexo";
                            }
                            ?>
                        </td>

                        <td class="text-center"><?php echo $producto["precio"]; ?></td>

                        
                            
                                <td>
                                <?php echo $producto['precio'] * $producto['cantidad']; ?>
                                </td>
                            

                        
                        <td>
                            <a href="quitar_producto.php?id=<?php echo ($producto['id_producto']); ?>" name="quitar" class="btn btn-outline-danger btn-sm ms-3 btn-eliminar "><i class="fas fa-trash"></i></a>
                        </td>

                        <!-- <td> </td> -->

                    </tr>

                    <?php
                    $total1 = $total1 + ($producto['precio'] * $producto['cantidad']);
                    $_SESSION['total'] =$total1;
                    ?>
                <?php
                }
                ?>
                    <tr class="">
                        <td type="hidden"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="3"> <b>TOTAL A PAGAR:</b> </td><br>
                        <td> <b>$<?php echo $total1; ?></b> </td>
                        <td></td>
                    </tr>
                    
                    <br>
                    <br>
            </tbody>
        </table>
        <center><a href="final_pago.php" class="btn btn-success">Continuar Pago</a></center>
    </div>

    <script>      
    </script>

</body>

</html>