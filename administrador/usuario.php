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
    $sql = "SELECT * FROM `usuario` WHERE Id_usuario=$id";
    $datos = $con->query($sql);
            $campo=$datos->fetch_object();
            $nombres=$campo->Nombres;
            $apellidos=$campo->Apellidos;
            $correo=$campo->Correo;
            $clave=$campo->Clave;
            $correo=$campo->Correo;
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
                                <a class="nav-link" href="usuario.php">Administradores 2</a>

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
                    <i class="fas fa-users me-1"></i> Lista de Usuarios
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#FormModal"><?php
                            if(isset($_GET['id'])){
                                echo "Continuar con Edicion";
                            }else{
                                echo "Guardar usuario nuevo";
                            }
                            ?></button>
                        </div>
                    </div>

                    <hr />
                    <table id="tabla" class="table table-dark table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th>Activo</th>

                                <th>Acciones</th>
                            </tr>


                        </thead>
                        <tbody>
                            <?php

                            require '../conexion.php';
                            $sql = "SELECT * FROM `usuario`";
                            $datos = $con->query($sql);
                            while ($campo = $datos->fetch_object()) {
                                if ($campo->Id_rol == 2) {
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $campo->Id_usuario;  ?></td>
                                    <td><?php echo $campo->Nombres;  ?></td>
                                    <td><?php echo $campo->Apellidos;  ?></td>
                                    <td><?php echo $campo->Correo;  ?></td>
                                    <td><?php if ($campo->Id_rol == 2) {
                                            echo "<span class='badge bg-primary'>Administrador</span>";
                                        }  ?></td>
                                    <td><?php if ($campo->Activo == 1) {
                                            echo "<span class='badge bg-primary'>Activo</span>";
                                        } else {
                                            echo "<span class='badge bg-danger'>Inactivo</span>";
                                        }  ?></td>
                                    <td>
                                        <a href="?id=<?php echo $campo->Id_usuario;  ?>"  class="btn btn-outline-primary btn-sm btn-editar"><i class="fas fa-pen"></i></a>
                                        <a href="eliminar_usuario.php?id=<?php echo base64_encode($campo->Id_usuario);?>" class="btn btn-outline-danger btn-sm ms-3 btn-eliminar "><i class="fas fa-trash"></i></a>
                                        
                                    </td>
                                </tr>
                            <?php
                            }
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
                            <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                            <form action="logica_usuario.php" method="post">

                                <div class="row g-2">

                                    <div class="col-sm-6">
                                    <input type="hidden" class="form-control" value="<?php echo @$id;?>" name="id" id="txtnombres">
                                        <label for="txtnombres" class="form-label">Nombres</label>
                                        <input type="text" class="form-control" value="<?php echo @$nombres;?>" name="txtnombres" id="txtnombres">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="txtapellidos" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control" value="<?php echo @$apellidos;?>" name="txtapellidos" id="txtapellidos">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="txtcorreo" class="form-label">Correo</label>
                                        <input type="email" class="form-control" name="txtcorreo" value="<?php echo @$correo;?>" id="txtcorreo" placeholder="Ingrese su Correo">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="txtcorreo" class="form-label">Clave</label>
                                        <input type="password" class="form-control" name="txtclave" value="<?php echo @$clave;?>" id="txtclave" >
                                    </div>


                                    <div class="col-sm-6">
                                        <label for="cboactivo" class="form-label">Activo</label>
                                        <select class="form-select" id="cboactivo" name="txtactivo" aria-label="Default select example">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>

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
                            politicas de privacidad
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