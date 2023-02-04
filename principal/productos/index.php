<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">




<head>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Productos</title>
    <link href="css/style3.css" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/alert.css" rel="stylesheet" />


</head>



<body>


    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../principal1/index.php"><img src="assets/img/logotipo.jpg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Instituciones</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#colombia">I.E. Colombia</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#emiliano_garcia">I.E. Emiliano Garcia</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#atanacio_girardot">I.E. Atanasio Girardot</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#señora_carmen">I.E.N. Señora Del Carmen</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#manuel">I.E.M. José Sierra </a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#forjadores_mañana">C.E. Forjadores del Mañana</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Guarderias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#hogar_casita">Hogar Infantil Casita Encantada</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#brujula">Jardín Infantil La Brújula</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#mundo_magico">C.D.I Mundo Mágico</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                        </ul>
                    </li>
                </ul>

                 

                 
               
                <form class="d-flex">

                    
                            <button class="btn btn-outline-dark" type="button" style="margin: 10px" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">
                                <i class="bi-cart-fill me-1"></i>

                                Carrito
                                <span class="badge bg-dark text-white  rounded-pill">
                                
                                <?php 
                                                    
                                echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
                                
                                ?>
                                </span>
                               
                                
                            </button>

                           

               
                

                    
                           

                    <a class="btn btn-outline-primary" style="margin: 10px" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Inicia Sesion
                    </a>
                </form>
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <button class="btn-outline-dark" style="width: 60px"> 
                                <?php
                                if(isset($_SESSION['nombre'])){
                                    echo "<i class='bi bi-person-check'></i> ";
                                    echo "";
                                }else{
                                    echo "<i class='bi bi-person-x'></i>";
                                }



                                ?>


                            </button></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <label class="dropdown-item" for=""><?php echo @$_SESSION['nombre'], "  ", @$_SESSION['apellido'] ?></label>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="cerrar_sesion.php"><i class="bi bi-box-arrow-in-left"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  INSTITUCIONES  -->
    <!--------------------------------  Login -------------------------------------------------->



    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Iniciar Sesion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Inicia sesion para hacer tus compras y asi lograr tener una mayor seguridad y registro
            </div>
            <form action="logica_inicio_sesion.php" method="post">
                <div class="col-md-10">
                    <label for="username" class="text-info">Correo:</label><br>
                    <input type="text" name="correo" id="" class="form-control">
                </div>
                <div class="col-md-10">
                    <label for="password" class="text-info">Contraseña:</label><br>
                    <input type="password" name="clave" id="" class="form-control">
                </div>
                <br>
                <button type="submit" name="accion" class="btn btn-success" value="iniciar">
                    Iniciar Sesión
                </button>
            </form>


            <div class="dropdown mt-3">

                <div class="dropdown mt-3">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrate Aqui
                    </button>
                </div>
                
            </div>

        </div>
    </div>
    <!-- Modal -->
    <form method="POST" action="registro_cliente.php" class="row g-3 needs-validation" novalidate>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro De Cliente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Nombres</label>
                            <input type="text" name="nombre" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Perfecto...!
                            </div>

                            <label for="validationCustom02" class="form-label">Apellidos</label>
                            <input type="text" name="apellido" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Perfecto...!
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustomUsername" class="form-label">Correo</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"></span>
                                <input type="email" name="correo" class="form-control" id="validationCustomUsername" value="" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Ingrese un Correo Valido.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label  for="validationCustomUsername"   class="form-label">Contraseña</label>
                            <div class="input-group has-validation">

                                <input type="password" name="clave" class="form-control" id="validationCustomUsername" value="" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    No puede estar vacio.
                                </div>
                            </div>
                        </div>

                     

                        <div class="col-6">
                            <button class="btn btn-primary" type="submit">Verificacion de Datos</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit " value="registrar" name="accion" class="btn btn-success">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>



    <!-- Button trigger modal -->






    <!----------------------------------  fin de login-------------------------------------  -->

         
     <!----------------------------------  inicio carrito compras-------------------------------------  -->
     <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de compras</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

  

    <?php
        
        if(!empty($_SESSION['carrito'])) {
            print_r($_SESSION['carrito']);
    ?>
        

            <table class="table">
            <tbody>
                <thead class="thead-dark">
                    <tr>
                    <th>NOMBRE</th>
                    <th>INST</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO</th>
                    </tr>
                </thead>
                
            
                <?php
                $total=0;
                foreach($_SESSION['carrito'] as $indice=>$producto) {
                ?>
                    <tr>
                    <td><?php echo $producto["descripcion"]; ?></td>
                    <td><?php echo $producto["nombre_institucion"]; ?></td>
                    
                    <td><?php echo $producto["cantidad"]; ?></td>
                    <td>$<?php echo $producto["precio"]; ?></td>
                    </tr>
                    <?php
                $total = $total + ($producto['precio'] * $producto['cantidad']);
                }
            
                ?>

                <tr>
                    <td colspan="3" align="rigth"> <b>TOTAL</b> </td>
                    <td> <b>$<?php echo $total; }?></b> </td>
                </tr>

                </tbody>
            </table>
            <?php  if(empty($_SESSION['carrito'])){
                ?>
                <h3 class="text-center text-info">¡ Aca Apareceran Los Productos Agregados !</h3>
                <?php
            } else{
            
            ?>


            <?php 
            if(isset($_SESSION['nombre'])){
                ?>
                <a class="btn btn-success" href="pago_carrito.php">Continuar Pago</a>
                <a class="btn btn-primary" href="limpiar_carrito.php">Limpiar</a><br>
            <?php
            }else{?>
                <button class="btn btn-success" disabled>Continuar Pago</button>
                <a class="btn btn-primary" href="limpiar_carrito.php">Limpiar</a><br>
                <p class="text-center text-danger"> ¡ Debes iniciar sesion para continuar con el pago !</p>
                <?php
            }?>
            
            
            <?php } ?>
    </form>            




</div>
</div>


    <!----------------------------------  fin carrito de compras -------------------------------------  -->

    <header class="bg-dark py-6">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"></h1>
            </div>
        </div>
    </header>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">INSTITUCIONES</h1>
            </div>
        </div>
    </header>

    <header class="white py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"></h1>
            </div>
        </div>
    </header>




<!-- Header-->
<header class="bg-dark py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white" id="colombia">
                        <h1 class="display-4 fw-bolder">Institución Educativa Colombia</h1> <br>
                        <img src="assets/img/logo_colombia.jpeg" width="140px">
                    </div>
                </div>
            </header>
            <!-- Section-->
        
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 2 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

                        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                                               





                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Colegiales</h2>
                                                                    <p class="item-intro text-muted">Institución Educativa Colombia</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>">
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>




                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>
             

            </section>




 <!-- Header-->
 <header class="bg-dark py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white" id="colombia">
                        <h1 class="display-4 fw-bolder">Institución Educativa Emiliano Garcia</h1> <br>
                        <img src="assets/img/logo_emiliano.jpeg" width="140px">
                    </div>
                </div>
            </header>
            <!-- Section-->
        
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 3 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

                        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                                               





                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Colegiales</h2>
                                                                    <p class="item-intro text-muted">Institución Educativa Emiliano Garcia</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>




                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>
    

              </div>
             </div>
             

             </section>










        
       <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white" id="atanacio_girardot">
                        <h1 class="display-4 fw-bolder">Institución Educativa Atanasio Girardot</h1> <br>
                        <img src="assets/img/logo_atanasio.jpeg" width="140px">
                    </div>
                </div>
            </header>
            <!-- Section-->
        
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 4 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

                        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                                               





                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Colegiales</h2>
                                                                    <p class="item-intro text-muted">Institución Educativa Atanasio Girardot</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                    <div class="text-center">
                                                                    <br>
                                   
                                                                    <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                            <input type="submit" class="btn btn-outline-dark mt-auto"  name="carrito" value="Agregar al Carrito">
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>




                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div>                          
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>
    

              </div>
             </div>
             

             </section>






 <!-- Header-->
 <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white" id="señora_carmen">
                    <h1 class="display-4 fw-bolder">Institución Educativa Nuestra Señora Del Carmen </h1><br>
                    <img src="assets/img/logo_carmen.jpeg" width="140px">
                </div>
            </div>
        </header>
        <!-- Section-->
        
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 5 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                            
                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Colegiales</h2>
                                                                    <p class="item-intro text-muted">Institución Educativa Nuestra Señora Del Carmen</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>
             

            </section>





      <!-- Header-->
      <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white" id="manuel">
                    <h1 class="display-4 fw-bolder">Institución Educativa Manuel José Sierra </h1><br>
                    <img src="assets/img/logo_manuel.jpeg" width="140px">
                </div>
            </div>
        </header>
        <!-- Section-->
        
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 6 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                            
                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Colegiales</h2>
                                                                    <p class="item-intro text-muted">Institución Educativa Manuel José Sierra</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>
             

            </section>






         <!-- Header-->
         <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white" id="forjadores_mañana">
                    <h1 class="display-4 fw-bolder">Centro Educativo Forjadores Del Mañana</h1><br>
                    <img src="assets/img/logo_forjadores.jpeg" width="140px">
                </div>
            </div>
        </header>
        <!-- Section-->
        
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 7 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                            
                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Colegiales</h2>
                                                                    <p class="item-intro text-muted">Centro Educativo Forjadores Del Mañana</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>
             

            </section>
        <!--  GUARDERIAS  -->

        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">GUARDERIAS</h1>
                </div>
            </div>
        </header>

        <header class="white py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"></h1>
                </div>
            </div>
        </header>



        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white" id="hogar_casita">
                    <h1 class="display-4 fw-bolder">Hogar Infantil Casita Encantada</h1><br>
                    <img src="assets/img/logo_casita.jpeg" width="140px">
                </div>
            </div>
        </header>
        <!-- Section-->
        
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 8 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                            
                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Escolares</h2>
                                                                    <p class="item-intro text-muted">Hogar Infantil Casita Encantada</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>
             

            </section>







       
          <!-- Header-->
          <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white" id="brujula">
                    <h1 class="display-4 fw-bolder">Jardín Infantil La Brújula</h1><br>
                    <img src="assets/img/logo_brujula.jpeg" width="140px">
                </div>
            </div>
        </header>
        <!-- Section-->
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 9 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                            
                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Escolares</h2>
                                                                    <p class="item-intro text-muted">Jardín Infantil La Brújula</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>
             

            </section>











         <!-- Header-->
         <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white" id="mundo_magico">
                    <h1 class="display-4 fw-bolder">C.D.I Mundo Mágico</h1><br>
                    <img src="assets/img/logo_mundo.jpeg" width="140px">
                </div>
            </div>
        </header>
        <!-- Section-->
            <section class="py-5">
                    <form action="logica_carrito.php"  method="POST">

                        <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    require '../../conexion.php';
                
                $sql = "SELECT producto.Id_producto, producto.Imagen,producto.Precio, producto.Genero, producto.Talla, producto.Activo, producto.Cantidad_stock, producto.Fecha_registro,
                categoria.Descripcion, 
                institucion.Id_institucion, institucion.Nombre_institucion
                FROM producto INNER JOIN institucion on producto.Id_institucion = institucion.Id_institucion
                INNER JOIN categoria on producto.Id_categoria = categoria.Id_categoria 
                where producto.Id_institucion = 10 and producto.Talla = 8";
                $datos = $con->query($sql);
                while ($campo = $datos->fetch_object()) {

                 
                ?>

        

                      <div class="col mb-5"> 
                                <div class="card h-100">
                                  <!-- Portfolio item 1-->
                                    <div class="portfolio-item">
                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $campo->Id_producto ?>">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </div>
                                            <img class="card-img-top" src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="300px" height="280px" />
                                        </a>
                                
                                        <!-- Portfolio item 1 modal popup-->
                                        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $campo->Id_producto ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                   
                                                <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8">
                                                                <div class="modal-body">
                                                                    
                                                                
                                            
                                                                <center>
                                                                <!-- Project details-->
                                                                    <h2 class="text-uppercase">Prendas Escolares</h2>
                                                                    <p class="item-intro text-muted">C.D.I Mundo Mágico</p>
                                                                    <div class="close-modal" data-bs-dismiss="modal"> <img src="../../administrador/foto/<?php echo $campo->Imagen ?>" alt="..." width="500px" height="600px" /></div>
                                                                    <ul class="list-inline">
                                                                    <li>
                                                                            
                                                                            <div class="text-center">
                                                                             <br>
                                                                            <h5 class="fw-bolder"> Condiciones de devolución </h5>
                                                                       
                                                                    </li>
                                                                    <p> 
                                                                    No se aceptarán devoluciones en los siguientes casos:
                                                                    1.Cuando exista un requerimiento de talla, color o modelo erróneo por parte del cliente.
                                                                    2.Una vez recibido y firmado el recibo de envío del producto y el producto haya sido verificado.
                                                                    3.Productos que hayan sido usados o alterados por parte del cliente.
                                                                    4.Después de la expiración de la garantía.
                                                                    5.Los productos en promoción o precio rebajado no tendrán cambio.
                                                                    6.Los productos no se encuentren en su empaque original.
                                                                    7.Cuando en la prenda haya tenido un mal manejo en el uso o en el lavado por parte del cliente.
                                                                    
                                                                 </p>
                                                                    
                                                                    
                                                                        
                                                                        <li>
                                                                            
                                                                            <div class="text-center">
                                   
                                                                            <h5 class="fw-bolder"><?php echo $campo->Descripcion ?></h5>
                                                                       
                                                                        </li>
                                                                    </ul>
                                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                        <div class="text-center">
                                                                             <!-- Product actions-->
                                                                                 
        
                                            
                                                                                    <form action="logica_carrito.php"  method="POST">
                                                                                    <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                                                                    <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                                                                    <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                                                                    <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                                                                    <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                                                                    <input type="hidden" name="cantidad" value="1" >
                                                                                    <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                                                                    <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                                                                    <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                                                                
                                                                                
                                                                                    <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                                                                
                                                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                   
                                                                    Cerrar
                                                                    </button>
                                                                        </div>
                                                                    </div>
                                                                                                        
                                                                    
                                                                </div>
                                                                </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                    <!-- Portfolio item 2 modal popup-->
                                        
                    
                    
                                        <div class="card-body p-4">
                                        
                                        
                                        <div class="text-center">
                                            <div class="fw-bolder"><?php echo $campo->Descripcion ?></div>
                                            
                                        </div>
                                    </div>                        
                                </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        
                                            
                                          <form action="logica_carrito.php"  method="POST">
                                            <input type="hidden" name="id_producto" value="<?php echo $campo->Id_producto ?>" >
                                            <input type="hidden" name="imagen" value="<?php echo $campo->Imagen ?>" >
                                            <input type="hidden" name="precio" value="<?php echo $campo->Precio ?>" >
                                            <input type="hidden" name="genero" value="<?php echo $campo->Genero ?>" >
                                            <input type="hidden" name="talla" value="<?php echo $campo->Talla ?>" >
                                            <input type="hidden" name="cantidad" value="1" >
                                            <input type="hidden" name="descripcion" value="<?php echo $campo->Descripcion ?>" >
                                            <input type="hidden" name="institucion" value="<?php echo $campo->Id_institucion ?>" >
                                            <input type="hidden" name="nombre_institucion" value="<?php echo $campo->Nombre_institucion ?>" >

                                        <div  class="text-center">
                                        
                                            <input type="submit" class="btn btn-outline-dark mt-auto" name="carrito" value="Agregar Carrito">
                                        </div> 
                                                                 
                                    </div>
                                    </div>
                                </div>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>

            </section>





    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">CONFESTUDIO &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/alert.js"></script>
    <?php
    if (isset($_SESSION['correo'])) {
        echo " <script>
            swal('¡ Inicio de Sesión Exitoso !', '', 'success');
            </script>";
            unset($_SESSION['correo']);
       
    }
    if (isset($_SESSION['error_inicio'])) {
        echo $_SESSION['error_inicio'];
        unset($_SESSION['error_inicio']);
    }


    ?>
    <?php
    if(isset($_SESSION['mensaje_carrito'])){
        echo $_SESSION['mensaje_carrito'];
        unset($_SESSION['mensaje_carrito']);
    }
    if (isset($_SESSION['error_inicio'])) {
        echo $_SESSION['error_inicio'];
        unset($_SESSION['error_inicio']);
    }
    $sql_id_vanta = "SELECT * FROM venta WHERE Id_venta = (SELECT MAX(Id_venta) from venta);";
    $consulta_id_v = $con->query($sql_id_vanta);
    $datos_id_v = $consulta_id_v->fetch_object();
    $status = $datos_id_v->Estado;
   
    if(empty($status)){
            echo "esta vacio";
    }else{
        if(isset($_SESSION['pago_exitoso'])){
            echo " <script>
            swal('¡ Gracias Por la compra !', '', 'success');
            </script>";
            unset($_SESSION['pago_exitoso']);
            unset($_SESSION['carrito']);
        ?>
           
        <?php
    }}

    ?>
</body>
<center><img class="imagen" src="assets/img/logo.jpg" alt="" /></center>
</html>
<script src="js/validacion.js"></script>
