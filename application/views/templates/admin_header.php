<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url() ?>assets/img/logo/logo.png" rel="icon">
  <title>Dgir El Alto</title>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvWXMYiXMmbTA5Womhg-lMCmHHrzZxDaU"></script>

  <!-- Para mostra los IConos fontawesome-free-->
  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Para los estilos Bootstrap4-->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- estilos css para el template-->
  <link href="<?php echo base_url();?>assets/css/ruang-admin.css" rel="stylesheet">
  <!-- Para los estilos del DataTable-->
  <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Para los stylos de mensaje de alertas-->
  <link href="<?php echo base_url();?>assets/toastr/toastr.min.css" rel="stylesheet">
  <!-- Para los estilos Vue de Formulario Descargado pero No esta en uso-->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <!-- Para los estilos del Formulario de Validaciones con jquery-->
  <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
  <!-- Para los estilos del Formulario de Validaciones con jquery-->
  <link href="<?php echo base_url();?>assets/css/jquery.steps.css" rel="stylesheet">

</head>


<body id="page-top">


  <?php if (!$this->session->userdata('admin_id')) {
     redirect("login");
  } ?>

  <div id="wrapper">

    <!-- Logout Modal-->

      <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-primary" id="mySmallModalLabel">Cierre de Cuenta</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Esta seguro de Cerrar Sesion?.</div>

              <div class="modal-footer">
                <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-success btn-sm" href="<?php echo site_url('login/logout'); ?>">Inicio de Sesion</a>
              </div>

          </div>
        </div>
      </div>

      <!-- Fin del modal Cierre Login -->

      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      		<div class="sidebar-brand-icon">
      			<img src="<?php echo base_url();?>assets/img/logo/recycle.png" style="max-width: 50px">
      		</div>
      		<div class="h5 sidebar-brand-text mx-3">Degir-Admin</div>
      	</a>
      	<hr class="sidebar-divider my-0">
      	<li class="nav-item active">
      		<a class="nav-link" href="<?php echo base_url(); ?>dashboard">
      			<i class="fas fa-fw fa-home text-gray-100"></i>
      			<span class="text-gray-100">Dashboard</span></a>
      	</li>
      	<hr class="sidebar-divider">
      	<li class="nav-item">
      		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
      			aria-expanded="true" aria-controls="collapseBootstrap">
      			<i class="far fas fa-chalkboard-teacher text-gray-100"></i>
      			<span class="text-gray-100">Puntos de Reclamos</span>
      		</a>
      		<div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      			<div class="bg-white py-2 collapse-inner rounded">
      				<h6 class="collapse-header">Reclamos</h6>
      				<a class="collapse-item" href="<?php echo base_url();?>administracion/docentes">Atendidos</a>
      				<a class="collapse-item" href="<?php echo base_url();?>">Sin Atender</a>
      				<a class="collapse-item" href="<?php echo base_url();?>administracion/inscripcion/">Reportes</a>
      			</div>
      		</div>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="<?php echo base_url();?>administrador/Mapa">
      			<i class="fas fa-address-card text-gray-100"></i>
      			<span class="text-gray-100">Acopios Geolocalizados</span>
      		</a>
      	</li>

      	<hr class="sidebar-divider">

      	<li class="nav-item">
      		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapEstudiante"
      			aria-expanded="true" aria-controls="collapseBootstrapEstudiante">
      			<i class="far fas fa-user-graduate text-gray-100"></i>
      			<span class="text-gray-100">Grupo de Distritos</span>
      		</a>
      		<div id="collapseBootstrapEstudiante" class="collapse" aria-labelledby="headingBootstrapEstudiante" data-parent="#accordionSidebar">
      			<div class="bg-white py-2 collapse-inner rounded">
      				<h6 class="collapse-header">Inspeccion a Distritos</h6>
      				<a class="collapse-item" href="<?php echo base_url();?>administrador/distritos">Distritos</a>
      				<a class="collapse-item" href="<?php echo base_url();?>administracion/notas_student">Afectados</a>
      				<a class="collapse-item" href="<?php echo base_url();?>administracion/asist_student">Moderados</a>
      				<a class="collapse-item" href="modals.html">Reportes</a>
      			</div>
      		</div>
      	</li>
        <li class="nav-item">
      		<a class="nav-link" href="<?php echo base_url(); ?>administrador/inspectores">
      			<i class="fas fa-id-card text-gray-100"></i>
      			<span class="text-gray-100">Grupo de Inspectores</span>
      		</a>
      	</li>
        <li class="nav-item">
      		<a class="nav-link" href="<?php echo base_url(); ?>administrador/zona">
      			<i class="fas fa-id-card text-gray-100"></i>
      			<span class="text-gray-100">Grupo de Zonas</span>
      		</a>
      	</li>
        <hr class="sidebar-divider">


      	<li class="nav-item">
      		<a class="nav-link" href="<?php echo base_url(); ?>administrador/observaciones">
      			<i class="fas fa-university text-gray-100"></i>
      			<span class="text-gray-100">Grupo de Observacion</span>
      		</a>

      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="<?php echo base_url(); ?>administrador/subobservaciones">
      			<i class="fas fa-fw fa-clipboard text-gray-100"></i>
      			<span class="text-gray-100">Sub Observaciones</span>
      		</a>
      	</li>

      	<hr class="sidebar-divider">
        <li class="nav-item">
      		<a class="nav-link" >
      	     <div class="version" id="version-ruangadmin"></div>
           </a>
         </li>
      </ul>
      <!-- Sidebar -->
