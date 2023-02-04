<?php
require '../../conexion.php';

if($_POST['accion']=="registrar"){
   $nombre =$_POST['nombre'];
   $apellido =$_POST['apellido'];
   $correo =$_POST['correo'];
   $clave =$_POST['clave'];
   $activo = 1;

   $sql = "INSERT INTO `usuario`(`Id_usuario`, `Nombres`, `Apellidos`, `Correo`, `Clave`, `Restablecer`, `Activo`, `Fecha_registro`, `Id_rol`)
            VALUES (DEFAULT,'$nombre','$apellido','$correo','$clave',DEFAULT,'$activo',DEFAULT,1)";

   $datos = $con->query($sql);
  


}
header("location: index.php");
?>