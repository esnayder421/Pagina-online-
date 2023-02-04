<?php
session_start();
if(isset($_POST['accion'])=="iniciar"){
    require '../../conexion.php';
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    
     $respuesta = $con->query("SELECT * FROM usuario where Correo='{$correo}' and Clave='{$clave}'");
    if($respuesta->num_rows==0){
    
        
        $_SESSION['error_inicio']="<script>
        swal('Cancelled', '¡ ERROR AL INICIAR SESIÓN INTENTE NUEVAMENTE !', 'error')           
        </script>";
        header("location:index.php");
    

    // -------redireccionamos a la pagina que queremos ------------
}else if($respuesta->num_rows==1) {
    $datos = $respuesta->fetch_object();
    $_SESSION['id']= $datos->Id_usuario;
    $_SESSION['correo']= $datos->Correo;
    $_SESSION['clave']= $datos->Clave;
    $_SESSION['rol']= $datos->Id_rol;
    $_SESSION['nombre']= $datos->Nombres;
    $_SESSION['apellido']= $datos->Apellidos;
    
    echo $datos->clave;
    echo $datos->Correo;
    echo $datos->Id_rol;

    
    
}
if ($datos->Id_rol==2){

    header("location:../../administrador/usuario.php");
}
if ($datos->Id_rol==1){

    header("location:index.php");
}

}


?>