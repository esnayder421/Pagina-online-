<?php


session_start();
if(isset($_POST['carrito'])=="Agregar Carrito"){
    
    if(!isset($_SESSION['carrito'])){ 
        
        $id_producto = $_POST['id_producto'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
        $genero = $_POST['genero'];
        $talla = $_POST['talla'];
        $cantidad = $_POST['cantidad'];
        $descripcion = $_POST['descripcion'];
        $institucion = $_POST['nombre_institucion'];
        $id_inst = $_POST['institucion'];

        $producto =  array("id_producto"=>$id_producto, "imagen" => $imagen, "genero" => $genero, "precio"=>$precio, "talla"=>$talla, "cantidad"=>$cantidad, "descripcion" => $descripcion, "id_institucion"=>$id_inst, "nombre_institucion"=>$institucion);

        $_SESSION['carrito'][0] = $producto;

        if( $_SESSION['carrito']){
            $_SESSION['mensaje_carrito']=" <script>
            swal('¡Producto Agregado!', '', 'success');
            </script>";
        }
        
    }  else {
        $id_producto = $_POST['id_producto'];
        $numero_pro = count($_SESSION['carrito']);
        $idproducto=array_column($_SESSION['carrito'],"id_producto");
        if (in_array($id_producto,$idproducto)) {
          $_SESSION['mensaje_carrito']=" <script>
          swal('¡Producto ya esta agregado!', '', 'warning');
          </script>";  
        }else{
        $id_producto = $_POST['id_producto'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
        $genero = $_POST['genero'];
        $talla = $_POST['talla'];
        $cantidad = $_POST['cantidad'];
        $descripcion = $_POST['descripcion'];
        $institucion = $_POST['nombre_institucion'];
        $id_inst = $_POST['institucion'];

        $producto =  array("id_producto"=>$id_producto, "imagen" => $imagen, "genero" => $genero, "precio"=>$precio, "talla"=>$talla, "cantidad"=>$cantidad, "descripcion" => $descripcion, "id_institucion"=>$id_inst, "nombre_institucion"=>$institucion);
        

        $_SESSION['carrito'][$numero_pro] = $producto;
      
        if( $_SESSION['carrito'][$numero_pro]){
            $_SESSION['mensaje_carrito']=" <script>
            swal('¡Producto Agregado!', '', 'success');
            </script>";
        
        }
    

        }
    }
        header("location:index.php");

}elseif(isset($_POST['accion'])=="actualizar"){
    $id=$_POST['id_producto'];
           
    if(is_numeric($_POST['id_producto'])){
        
        $cantidad=$_POST['cantidad'];
        
        foreach($_SESSION['carrito'] as $indice=>$productos){
            if($productos['id_producto']==$id){
                $_SESSION['carrito'][$indice]['cantidad']=$cantidad;
               
                
                header("Location: ".$_SERVER['HTTP_REFERER']."");
               
            }
            
        }

    }

}

