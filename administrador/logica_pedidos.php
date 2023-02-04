<?php
session_start();
require '../conexion.php';
if(isset($_POST['accion'])){
    $num_pedido = $_POST['num_pedido'];
    $sql = "SELECT * FROM `pedido` WHERE num_pedido = '$num_pedido';";
    $datos = $con->query($sql);
   while($campos =$datos->fetch_object()){
    print_r($campos);
   }
   
    exit;
    header("location: pedidos.php");

}
?>


