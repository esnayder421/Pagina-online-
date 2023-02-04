<?php
session_start();
if(!isset($_SESSION['rol'])){
    header("location:../principal/principal1/index.php");
}
if($_SESSION['rol']==1){
    header("location:../principal/productos/index.php");
}


if (isset($_GET['id'])){
    require '../conexion.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `producto` WHERE Id_producto=$id";
    $datos = $con->query($sql);
    $campo=$datos->fetch_object();
    $foto = $campo->Imagen;
    $precio =$campo->Precio;
    $genero =$campo->Genero;
    $talla =$campo->Talla;
    
    $cantidad =$campo->Cantidad_stock;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="assets/favicon.jpg" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrador</title>
    <link href="css/styles.css" rel="stylesheet" />

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="usuario.php">CONFESTUDIO</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">             
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    <li>
                    <label class="dropdown-item" for=""><?php echo @$_SESSION['nombre'],"  ",@$_SESSION['apellido']?></label>
                    </li>
                    <li><a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interfaz</div>
                        <a class="nav-link collapsed" href="usuario.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Administradores
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="usuario.php">Administradores</a>

                            </nav>
                        </div>


                        <div class="sb-sidenav-menu-heading">INVENTARIO</div>
                        <a class="nav-link" href="productos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Productos
                        </a>
                        <a class="nav-link" href="pedidos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Pedidos
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small"></div>
                    CONFESTUDIO
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <!-- ---------------------------------------------------------------------------------------- -->
            <div class="card">
                <div class="card-header">
                <i class="fas fa-chart-area"></i> Lista de Productos
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#FormModal"><?php
                            if(isset($_GET['id'])){
                                echo "Continuar con Edision";
                            }else{
                                echo "Guardar Producto Nuevo";
                            }
                            ?></button>
                        </div>
                    </div>

                    <hr />
                    <table id="tabla" class="table table-dark table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Precio</th>
                                <th>Genero</th>
                                <th>Talla</th>
                                <th>Activo</th>
                                <th>Cantidad</th>
                                <th>Categoria</th>
                                <th>institucion</th>
                                <th>Acciones</th>
                            </tr>


                        </thead>
                        <tbody>
                            <?php

                            require '../conexion.php';
                            $sql = "SELECT * FROM `producto`";
                            $datos = $con->query($sql);
                            while ($campo = $datos->fetch_object()) {
                                
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $campo->Id_producto;  ?></td>
                                    <td> 
                                    <img class="img-thumbnail img-fluid" src="foto/<?php echo $campo->Imagen;?>" width="100px">
                                        </td>
                                    <td><?php echo number_format($campo->Precio) ;  ?></td>
                                    <td><?php echo $campo->Genero;  ?></td>
                                    <td><?php echo $campo->Talla;  ?></td>
                                   
                                    <td><?php if ($campo->Activo == 1) {
                                            echo "<span class='badge bg-primary'>Activo</span>";
                                        } else {
                                            echo "<span class='badge bg-danger'>Inactivo</span>";
                                        }  ?></td>
                                    <td><?php echo $campo->Cantidad_stock;  ?></td>
                                    <td><?php
                                            if($campo->Id_categoria==1){
                                                echo "Chaqueta";
                                             }else if($campo->Id_categoria==2){
                                                echo "Sudadera";
                                             }else if($campo->Id_categoria==3){
                                                echo "Camiseta";
                                             }else if($campo->Id_categoria==4){
                                                echo "Pantalon";
                                             }else if($campo->Id_categoria==5){
                                                echo "Camisa";
                                             }else if($campo->Id_categoria==6){
                                                echo "Camisilla";
                                             }else if($campo->Id_categoria==7){
                                                echo "Delantal";
                                             }else if($campo->Id_categoria==8){
                                                echo "Corbata";
                                             }
                                     ?></td>
                                    <td><?php
                                      if($campo->Id_institucion==2){
                                        echo "Institucion Educativa Colombia";
                                     }else if($campo->Id_institucion==3){
                                        echo "Institucion Educativa Emiliano Garcia";
                                     }else if($campo->Id_institucion==4){
                                        echo "Institucion Educativa Atanasio Girardot";
                                     }else if($campo->Id_institucion==5){
                                        echo "Institucion Educativa Nuestra Señora Del Carmen";
                                     }else if($campo->Id_institucion==6){
                                        echo "Institucion Educativa Manuel Jose Sierra";
                                     }else if($campo->Id_institucion==7){
                                        echo "Centro Educativo Forjadores Del Mañana";
                                     }else if($campo->Id_institucion==8){
                                        echo "Hogar Infantil Casita Encantada";
                                     }else if($campo->Id_institucion==9){
                                        echo "ardin Infantil La Brujula";
                                     }else if($campo->Id_institucion==10){
                                        echo "C.D.I. Mundo Magico";
                                     }     
                                     ?></td>
                                    <td>
                                        <a href="?id=<?php echo $campo->Id_producto;  ?>"  class="btn btn-outline-primary btn-sm btn-editar"><i class="fas fa-pen"></i></a> 
                                        <a href="eliminar_producto.php?id=<?php echo base64_encode($campo->Id_producto);?>" class="btn btn-outline-danger btn-sm ms-3 btn-eliminar "><i class="fas fa-trash"></i></a>
                                        
                                    </td>
                                </tr>
                            <?php
                            }
                        
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                            <form action="logica_producto.php" method="post" enctype="multipart/form-data">

                                <div class="row g-2">

                                    <div class="col-sm-12">
                                    <input type="hidden" class="form-control" value="<?php echo @$id;?>" name="id" id="txtnombres">
                                        <label for="txtnombres" class="form-label">Imagen del producto:</label>
                                        <input type="file" class="form-control" value="<?php echo @$foto;?>" name="foto" id="txtnombres">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="txtprecio" class="form-label">Precio:</label>
                                        <input type="number" class="form-control" value="<?php echo @$precio;?>" name="txtprecio" id="txtapellidos">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="txtcorreo" class="form-label">Genero:</label>
                                        <select class="form-select" name="genero" id="">
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                            <option value="3">Unisex</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="txttalla" class="form-label">Talla:</label>
                                        <input type="text" class="form-control" value="<?php echo @$talla;?>" name="txttalla">
                                    </div>


                                    <div class="col-sm-6">
                                        <label for="cboactivo" class="form-label">Activo</label>
                                        <select class="form-select" id="cboactivo" name="txtactivo" aria-label="Default select example">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>

                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="txtcantidad" class="form-label">Cantidad Stock:</label>
                                        <input type="number" class="form-control" value="<?php echo @$cantidad;?>" name="txtcantidad" >
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="form-label">Categoria:</label>
                                        <select class="form-select" id="" name="txtcategoria" aria-label="Default select example">
                                            
                                            <option value="1">Chaqueta</option>
                                            <option value="2">Sudadera</option>
                                            <option value="3">Camiseta</option>
                                            <option value="4">Pantalon</option>
                                            <option value="5">camisa</option>
                                            <option value="6">Camisilla</option>
                                            <option value="7">Delantal</option>
                                            <option value="8">Corbata</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="" class="form-label">Institucion Educativa</label>
                                        <select class="form-select" id="" name="txtinstitucion" aria-label="Default select example">
                                            <option value="2">Institucion Educativa Colombia</option>
                                            <option value="3">Institucion Educativa Emiliano Garcia</option>
                                            <option value="4">Institucion Educativa Atanasio Girardot</option>
                                            <option value="5">Institucion Educativa Nuestra Señora Del Carmen</option>
                                            <option value="6">Institucion Educativa Manuel Jose Sierra</option>
                                            <option value="7">Centro Educativo Forjadores Del Mañana</option>
                                            <option value="8">Hogar Infantil Casita Encantada</option>
                                            <option value="9">Jardin Infantil La Brujula</option>
                                            <option value="10">C.D.I. Mundo Magico</option>

                                        </select>
                                        <br>
                                    </div>
                                    

                                </div>
                                <?php
                                if(isset($_GET['id'])){
                                        echo "<button type='submit' name='accion' class='btn btn-outline-success' value='Editar'>Editar Usuario</button>";
                                    }else{
                                        echo "<button type='submit' name='accion' class='btn btn-outline-primary' value='Guardar'>Guardar</button>";
                                    }
                                ?>
                                
                            
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            
                        </div>
                    </div>
                </div>
            </div>


            
            <!-- -------------------------------------------------------------------------------------------------- -->
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted"> &copy; </div>
                        <div>
                            Politicas de privacidad
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
</body>

</html>
<script>
    var tabla= document.querySelector("#tabla")

    var dataTable = new DataTable(tabla,{
        perPage:5,
        perPageSelect:[3,6,9,12]
    });

</script>