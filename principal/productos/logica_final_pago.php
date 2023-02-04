<?php
session_start();
require '../../conexion.php';
if($_POST['accion']=="registrar"){
$id_inicio=$_SESSION['id'];
$identificacion=$_POST['identificacion'];
$Nombres=$_POST['nombres'];
$Apellidos=$_POST['apellidos'];
$Correo=$_POST['correo'];
$Direccion=$_POST['direccion'];
$celular=$_POST['celular'];
$total=$_POST['total'];



    foreach($_SESSION['carrito'] as $indice=>$producto){
        $cantidad = $producto["cantidad"];
        $id_producto = $producto["id_producto"];
        $name_inst = $producto["nombre_institucion"];
        $precio = $producto["precio"];
        $genero = $producto["genero"];
        $total2 =$producto["cantidad"]*$producto["precio"];
        $sql= "INSERT INTO `pedido`(`Id_pedido`, `num_pedido`, `Cantidad`, `Fecha_pedido`, `Id_usuario`, `Id_producto`, `Institucion`, `Talla`, `Precio`, `Genero`, `Total`) 
            VALUES (DEFAULT,'null','$cantidad',DEFAULT,'$id_inicio','$id_producto','$name_inst','null','$precio','$genero','$total2')";
            $datos=$con->query($sql);
      
    }
    $sql2 ="INSERT INTO `venta`(`Id_venta`, `Estado`, `Celular`, `Identificacion`, `Nombres`, `Apellidos`, `Correo`, `Direccion`, `Cantidad`, `Fecha_registro`, `num_pedido`)
    VALUES (DEFAULT,'','$celular','$identificacion','$Nombres','$Apellidos','$Correo','$Direccion','$cantidad',DEFAULT,'')";
        $datos2=$con->query($sql2);

        $_SESSION['pago_exitoso']= "exito";
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://www.paypal.com/sdk/js?client-id=AehEm7Jlf4FY_4NlJUkv-AH1YoE7MnN86Kqm0b0w8EfjVnziNulxgEb4suuYALOu1znD_O9BShFzOIqX"></script>


    <title>Document</title>
</head>
<body>
<div class="container">
    <br>
    <br>
    <br>
<div class="card">
  <div class="card-header center">
    Ejecuta El pago de Manera correcta!
  </div>
  <div class="card-body center">
    <center>
    <h5 class="card-title center">Estas A un Paso!</h5>
    </center>
    <br>
    <br>
    <br>

    <center>
    <div class="col-md-8 center" width="80px" height="80px" id="paypal-button-container">

</div>
    </center>
    <br>
    <br>

   <center>
   <a class="btn btn-outline-info"  href="index.php">VOLVER AL INICIO</a>
   </center>

  </div>
</div>

</div>


   
   


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script>
            paypal.Buttons({
                style: {
                    color: 'blue',
                    shape: 'pill',
                    label: 'pay',



                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: <?php echo $_SESSION['total']  ?>
                            }
                        }]
                    });
                },

                onApprove: function(data, actions) {
                    actions.order.capture().then(function(detalles_venta) {
                         //window.location.href = "pago_completado.php"
                        console.log(detalles_venta)
                        let url ="paypal.php"
                        
                        return fetch(url, {
                            method :'post',
                            headers: {
                                'content-type': 'application/json'
                            },
                            body:JSON.stringify({
                                detalles_venta: detalles_venta
                            })
                        })
                    });
                },


                onCancel: function(data) {
                    alert("pago cancelado ");
                    console.log(data)
                }
            }).render('#paypal-button-container')
        </script>

</html>