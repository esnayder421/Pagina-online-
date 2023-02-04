<?php
require '../conexion.php';

if(isset($_POST['accion'])){

    // VERIFICAR FOTO 
    $target_dir = "foto/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $nombrefoto="sinfoto.jpg";
    // verifica si ya hay otra foto con ese nombre
    if (file_exists($target_file)) {
      $uploadOk = true;
    }
    
    // verificar tamaño de la foto
    /*
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "la foto es muy pesada";
      $uploadOk = 0;
    }*/
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = false;
    }
    //subir o no la foto
    if ($uploadOk == false) {
      echo "no se subio la foto.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        $nombrefoto=$_FILES["foto"]["name"];
      }
    }
    
    
    // FIN VERIFICAR FOTO1 


if($_POST['accion']=="Guardar"){
    
    $fecha=date("d-m-Y h:i");
    $precio =$_POST['txtprecio'];
    $genero =$_POST['genero'];
    $talla =$_POST['txttalla'];
    $activo =$_POST['txtactivo'];
    $cantidad =$_POST['txtcantidad'];
    $categoria =$_POST['txtcategoria'];
    $institucion =$_POST['txtinstitucion'];
    

    $sql = "INSERT INTO `producto`(`Id_producto`, `Imagen`, `Precio`, `Genero`, `Talla`, `Activo`, `Cantidad_stock`, `Fecha_registro`, `Id_categoria`, `Id_institucion`)
                    VALUES (DEFAULT,'$nombrefoto','$precio','$genero','$talla','$activo','$cantidad',DEFAULT,'$categoria','$institucion')";

    $datos = $con->query($sql);
    header("location: productos.php");
} else if($_POST['accion']=="Editar"){
    $id = $_POST['id'];
    $foto=$_POST['foto'];
    $precio =$_POST['txtprecio'];
    $genero =$_POST['genero'];
    $talla =$_POST['txttalla'];
    $activo =$_POST['txtactivo'];
    $cantidad =$_POST['txtcantidad'];
    $categoria =$_POST['txtcategoria'];
    $institucion =$_POST['txtinstitucion'];
    
  
    $sql = "UPDATE `producto` 
    SET `Imagen`='$nombrefoto',`Precio`='$precio',`Genero`='$genero',`Talla`='$talla',`Activo`='$activo',`Cantidad_stock`='$cantidad',`Fecha_registro`=DEFAULT,`Id_categoria`='$categoria',`Id_institucion`='$institucion' 
    WHERE Id_producto= $id";
    $datos = $con->query($sql);
    header("location: productos.php");


}
}
?>