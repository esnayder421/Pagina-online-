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

require '../conexion.php';
if(isset($_POST['accion'])){
    $num_pedido = $_POST['num_pedido'];
    $sql = "SELECT * FROM `pedido` WHERE num_pedido = '$num_pedido';";
    $datos = $con->query($sql);

   
  

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
                <i class="fas fa-search"></i> Buscador
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="col-md-4" >
                        Buscar Pedido:
                        <input type="text" name="num_pedido" class="form-control ">
                        </div>
                        <button class="btn btn-outline-info" name="accion" type="submit">BUSCAR</button>
                    </form>
                    <?php
                    if(!empty($datos)){
            
                    ?>
                    <table id="tabla" class="table table-dark table-striped" style="width:100%">
                            <tr>
                                
                                <th>ID</th>
                                <th>Numero Pedido</th>
                                <th>Cantidad</th>
                                <th>Id usuario</th>
                                <th>Id_producto</th>
                                <th>Institucion</th>
                                <th>Precio</th>
                                <th>Total</th>
                              
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                           while($campos =$datos->fetch_object()){
                            
                                ?>
                                <tr>
                                    
                                    <td><?php echo $campos->Id_pedido;?></td>
                                    <td>
                                    <?php echo $campos->num_pedido;?>
                                    </td>
                                    <td><?php echo $campos->Cantidad;?></td>
                                    <td><?php echo $campos->Id_usuario;?></td>
                                    <td><?php echo $campos->Id_producto;?></td>
                                    <td><?php echo $campos->Institucion;?></td>
                                    <td><?php echo $campos->Precio;?></td>
                                    <td><?php echo $campos->Total;?></td>
                                    
                                    
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    unset($_SESSION['pedidos']);
                    }else{

                    }
                    ?>

                    <hr />
                   
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <i class="fas fa-chart-area"></i> Lista de Pedidos
                </div>
                <div class="card-body">
                    

                    <hr />
                    <table id="tabla" class="table table-dark table-striped" style="width:100%">
                            <tr>
                                
                                <th>ID VENTA</th>
                                <th>ESTADO</th>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>IDENTIFICACION</th>
                                <th>CORREO</th>
                                <th>CELULAR</th>
                                <th>DIRECCION</th>
                                <th>CANTIDAD</th>
                                <th>NUM PEDIDO</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../conexion.php';
                            $sql = "SELECT * FROM venta";
                            $datos = $con->query($sql);
                            while ($campo = $datos->fetch_object()) {
                                ?>
                                <tr>
                                    
                                    <td><?php echo $campo->Id_venta;?></td>
                                    <td><?php
                                    if(empty($campo->Estado) ){
                                        echo "<span class='badge bg-danger'>CANCELET</span>";
                                    }else{
                                       ?>
                                         <span class='badge bg-success'><?php echo $campo->Estado;?></span>
                                       <?php
                                    }
                                    ?>
                                       
                                    </td>
                                    <td><?php echo $campo->Nombres;?></td>
                                    <td><?php echo $campo->Apellidos;?></td>
                                    <td><?php echo $campo->Identificacion;?></td>
                                    <td><?php echo $campo->Correo;?></td>
                                    <td><?php echo $campo->Celular;?></td>
                                    <td><?php echo $campo->Direccion;?></td>
                                    <td><?php echo $campo->Cantidad;?></td>
                                    <td><?php echo $campo->num_pedido;?></td>
                                    
                                    
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
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