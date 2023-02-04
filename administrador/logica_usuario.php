<?php
require '../conexion.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `usuario` WHERE Id_usuario=$id";
    $datos = $con->query($sql);
            $campo=$datos->fetch_object();
            $nombres=$campo->Nombres;
            $apellidos=$campo->Apellidos;
            $correo=$campo->Correo;
            $clave=$campo->Clave;
            $correo=$campo->Correo;
}


if($_POST['accion']=="Guardar"){
    $nombres =$_POST['txtnombres'];
    $apellidos =$_POST['txtapellidos'];
    $correo =$_POST['txtcorreo'];
    $clave =$_POST['txtclave'];
    $activo =$_POST['txtactivo'];

    $sql = "INSERT INTO `usuario`(`Id_usuario`, `Nombres`, `Apellidos`, `Correo`, `Clave`, `Restablecer`, `Activo`, `Fecha_registro`, `Id_rol`)
             VALUES (DEFAULT,'$nombres','$apellidos','$correo','$clave',DEFAULT,'$activo',DEFAULT,2)";

    $datos = $con->query($sql);
    header("location: usuario.php");
} else if($_POST['accion']=="Editar"){
    $id =$_POST['id'];
    $nombres =$_POST['txtnombres'];
    $apellidos =$_POST['txtapellidos'];
    $correo =$_POST['txtcorreo'];
    $clave =$_POST['txtclave'];
    $activo =$_POST['txtactivo'];
    $reestablecer =1;

    $sql = "UPDATE `usuario` 
    SET `Nombres`='$nombres',`Apellidos`='$apellidos',`Correo`='$correo',`Clave`='$clave',`Restablecer`='$reestablecer',`Activo`='$activo' WHERE `Id_usuario`='$id'";
    $datos = $con->query($sql);
    header("location: usuario.php");


}

?>