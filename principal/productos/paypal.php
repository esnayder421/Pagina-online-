<?php
require '../../conexion.php';
$json =file_get_contents('php://input');
$datos = json_decode($json, true);
echo "<br><br>";


$id_deta_venta= $datos['detalles_venta']['id'];
$status= $datos['detalles_venta']['status'];

$valor_compra= $datos['detalles_venta']['purchase_units'][0]['amount']['value'];
$email_client= $datos['detalles_venta']['payer']['email_address'];
$id_client= $datos['detalles_venta']['payer']['payer_id'];
//echo $id_deta_venta,"/",$status,"/",$valor_compra,"/",$email_client,"/",$id_client;

$sql = "SELECT * FROM pedido WHERE Id_pedido = (SELECT MAX(Id_pedido) from pedido);";
$consulta = $con->query($sql);
$datos = $consulta->fetch_object();
$id_usu = $datos->Id_usuario;
$sql_fecha = "SELECT * FROM pedido WHERE Fecha_pedido = (SELECT MAX(Fecha_pedido) from pedido);";
$consulta_f = $con->query($sql_fecha);
$datos_f = $consulta_f->fetch_object();
$fecha = $datos_f->Fecha_pedido;

$sql2 = "SELECT * FROM pedido WHERE Id_usuario = $id_usu AND Fecha_pedido= '$fecha';";
//echo "SELECT * FROM pedido WHERE Id_usuario = $id_usu AND Fecha_pedido= '$fecha';";


$sql_venta = "SELECT * FROM venta WHERE Fecha_registro = (SELECT MAX(Fecha_registro) from venta);";
$consulta_v = $con->query($sql_venta);
$datos_v = $consulta_v->fetch_object();
$fecha_v = $datos_f->Fecha_pedido;


$consulta2 = $con->query($sql2);
while($campos =$consulta2->fetch_object() ){
     $sql3 ="UPDATE `pedido` SET `num_pedido`='$id_deta_venta' WHERE Id_pedido = $campos->Id_pedido; ";
     $consulta3 = $con->query($sql3);

   
}
$sql_u ="UPDATE `venta` SET `Estado`='$status',`num_pedido`='$id_deta_venta' WHERE Fecha_registro = '$fecha_v';";
$consulta3 = $con->query($sql_u);



$sql_cantidad ="SELECT SUM(Cantidad) AS 'cantidad_total' FROM `pedido` WHERE Fecha_pedido = '$fecha';";
$consulta_ca = $con->query($sql_cantidad);
$datos_ca = $consulta_ca->fetch_object();
$cantidad_total = $datos_ca->cantidad_total;


$sql_total = "SELECT SUM(Total) AS 'total' FROM `pedido` WHERE Fecha_pedido = '$fecha';";
$consulta_to = $con->query($sql_total);
$datos_to = $consulta_to->fetch_object();
$total_ca = $datos_to->total;


$sql_id_vanta = "SELECT * FROM venta WHERE Id_venta = (SELECT MAX(Id_venta) from venta);";
$consulta_id_v = $con->query($sql_id_vanta);
$datos_id_v = $consulta_id_v->fetch_object();
$id_venta = $datos_id_v->Id_venta;
$num_pedido = $datos_id_v->num_pedido;

$sql_insert= "INSERT INTO `detalle_venta`(`Id_detalle_venta`, `Cantidad`, `Valor_total`, `Id_venta`, `num_pedido`)
             VALUES (DEFAULT,'$cantidad_total','$total_ca','$id_venta','$num_pedido')";

$eje = $con->query($sql_insert);








?>