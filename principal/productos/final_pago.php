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
    <link href="css/styles2.css" rel="stylesheet" />
    
    <title>Pago</title>
</head>
<body>


<h1>¡ Formulario Pedido!</h1>
<center><h3>Por favor ingrese tu datos para continuar con tu pedido</h3></center>
<a href="pago_carrito.php"><img src="assets/img/atras.png" width="50px"></a>
        <form class="container" action="logica_final_pago.php" method="post" enctype="multipart/form-data">
        
            <h2>Registro</h2><br>
            <label>IDENTIFICACION:</label>
            <input type="number" name="identificacion" placeholder="Ingrese su identificacion" required placeholder="Identificacion"><br>
            <label>NOMBRES:</label>
            <input type="text" name="nombres" placeholder="Ingrese sus nombres" required><br>
            <label>APELLIDOS:</label>
            <input type="text" name="apellidos" placeholder="Ingrese sus apellidos" required><br>
            <label>CORREO:</label>
            <input type="email" name="correo" placeholder="Ingrese su correo" required><br>
            <label>DIRECCION:</label>
            <input type="text" name="direccion" placeholder="Ingrese su direccion" required><br>
            <label>CELULAR:</label>
            <input type="text" name="celular" placeholder="Ingrese su celular"><br>
            <label>TOTAL A PAGAR :</label>
            <input type="hidden" name="total" value="<?php echo number_format($_SESSION['total']); ?>"><br>
            <input type="text" name="" value="<?php echo number_format($_SESSION['total']); ?>" disabled><br>
            
            
            
            <button type="submit " value="registrar" name="accion" class="btn btn-success">Registrar</button>
            
</body>
</html>


