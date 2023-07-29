<?php

include('app/config.php');
include('layout/sesion.php');
include('layout/parte1.php');
include('app/controllers/usuarios/listado_de_usuarios.php');
include ('app/controllers/roles/listado_de_roles.php');
include ('app/controllers/categorias/listado_de_categoria.php');
include('app/controllers/almacen/listado_de_productos.php');
include('app/controllers/proveedores/listado_de_proveedores.php');
include('app/controllers/compras/listado_de_compras.php');
include('app/controllers/ventas/listado_de_ventas.php');
include('app/controllers/clientes/listado_de_clientes.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-1">
        <div class="col-sm-12">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-3 col-6">

          <div class="small-box bg-dark">
            <div class="inner">
              <?php
              $contador_de_usuarios = 0;
              foreach ($usuarios_datos as $usuarios_dato) {
                $contador_de_usuarios = $contador_de_usuarios + 1;
              }
              ?>
              <h3><?php echo $contador_de_usuarios;?></h3>
              <p>Usuarios Registrados</p>
            </div>
            <a href="<?php echo $URL;?>/usuarios/create.php">
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/usuarios" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <?php
                            $contador_de_ventas = 0;
                            foreach ($ventas_datos as $ventas_dato){
                                $contador_de_ventas = $contador_de_ventas + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_ventas;?></h3>
                            <p>Ventas Registradas</p>
                        </div>
                        <a href="<?php echo $URL;?>/ventas">
                            <div class="icon">
                                <i class="nav-icon fas fa-cash-register"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/ventas" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <?php
                            $contador_de_productos = 0;
                            foreach ($productos_datos as $productos_dato){
                                $contador_de_productos = $contador_de_productos + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_productos;?></h3>
                            <p>Productos Registrados</p>
                        </div>
                        <a href="<?php echo $URL;?>/almacen/create.php">
                            <div class="icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/almacen" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <?php
                            $contador_de_clientes = 0;
                            foreach ($clientes_datos as $clientes_dato){
                                $contador_de_clientes = $contador_de_clientes + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_clientes;?></h3>
                            <p>Clientes Registrados</p>
                        </div>
                        <a href="<?php echo $URL;?>/clientes">
                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/clientes" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-6">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <?php
                            $contador_de_proveedores = 0;
                            foreach ($proveedores_datos as $proveedores_dato){
                                $contador_de_proveedores = $contador_de_proveedores + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_proveedores;?></h3>
                            <p>Proveedores Registrados</p>
                        </div>
                        <a href="<?php echo $URL;?>/proveedores">
                            <div class="icon">
                                <i class="fas fa-plane"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/proveedores" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php
                            $contador_de_compras = 0;
                            foreach ($compras_datos as $compras_dato){
                                $contador_de_compras = $contador_de_compras + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_compras;?></h3>
                            <p>Compras Registradas</p>
                        </div>
                        <a href="<?php echo $URL;?>/compras">
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/compras" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <?php
                            $contador_de_roles = 0;
                            foreach ($roles_datos as $roles_dato){
                                $contador_de_roles = $contador_de_roles + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_roles;?></h3>
                            <p>Roles Registrados</p>
                        </div>
                        <a href="<?php echo $URL;?>/roles/create.php">
                            <div class="icon">
                                <i class="fas fa-address-card"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/roles" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-pink">
                        <div class="inner">
                            <?php
                            $contador_de_categorias = 0;
                            foreach ($categorias_datos as $categorias_dato){
                                $contador_de_categorias = $contador_de_categorias + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_categorias;?></h3>
                            <p>Categorias Registradas</p>
                        </div>
                        <a href="<?php echo $URL;?>/categorias">
                            <div class="icon">
                                <i class="fas fa-tags"></i>
                            </div>
                        </a>
                        <a href="<?php echo $URL;?>/categorias" class="small-box-footer">
                            Más detalles <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include ('layout/parte2.php'); ?>