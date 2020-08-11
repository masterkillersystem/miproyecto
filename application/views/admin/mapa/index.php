
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">

<?php echo $map['js']; ?>
    <div class="row mb-3">

      <!-- Area Mapa -->
      <div class="col-xl-7 col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-map-marked-alt fa-1x"></i>  Puntos de Acopio Geolocalizados</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <?php echo $map['html']; ?>

          </div>
        </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-xl-5 col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-recycle fa-1x"></i>  Rutas Atendidos y No Atendidos</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Month <i class="fas fa-chevron-down"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Select Periode</div>
                <a class="dropdown-item" href="#">Today</a>
                <a class="dropdown-item" href="#">Week</a>
                <a href="#" class="dropdown-item active">Month</a>
                <a class="dropdown-item" href="#">This Year</a>
              </div>
            </div>
          </div>

          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTable2" >
              <thead class="thead-light">
                <tr>
                    <th>Sn</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                </tr>
              </thead>

              <tbody>
                <?php $i = 1; ?>
                <?php if(!empty($reclamo)):?>
                <?php foreach($reclamo as $rec):?>
              <tr>

                <td><?php echo $i++; ?></td>
                <td><?php echo $rec->usuario;?></td>
                <td>
                  <?php if ($rec->atendido > 0): ?>
                    <a href="#" class="btn btn-lg btn-info btn-sm active" onclick="datos_marker(<?php echo $rec->latitud;?>,<?php echo $rec->longitud;?>,marker_<?php echo $rec->id_reclamo;?>)"><span>Atendido</span></a>
                  <?php else: ?>
                    <button class="btn btn-lg btn-danger btn-sm active" onclick="datos_marker(<?php echo $rec->latitud;?>,<?php echo $rec->longitud;?>,marker_<?php echo $rec->id_reclamo;?>)"><span>Sin Atender</span></button>
                  <?php endif; ?>
                </td>
              </tr>
                <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
          </div>

          <div class="card-footer text-center">
            <a class="m-0 small text-primary card-link" href="#">View More <i
                class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>

    </div>
    <!--Row-->

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->

      <div class="col-lg-12">

        <div class="card mb-4">

          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-street-view fa-2x"></i>  Lista de Reclamo En Ruta</h6>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>



          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTable" >
              <thead class="thead-light">
                <tr>
                    <th>Sn</th>
                    <th>Usuario</th>
                    <th>Observacion</th>
                    <th>SubObservacion</th>
                    <th>Distrito</th>
                    <th>Zona</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>estado</th>
                    <th>Accion</th>
                </tr>
              </thead>

              <tbody>
                <?php $i = 1; ?>
                <?php if(!empty($reclamo)):?>
                <?php foreach($reclamo as $rec):?>
              <tr>

                <td><?php echo $i++; ?></td>
                <td><?php echo $rec->usuario;?></td>
                <td><?php echo $rec->observacion;?></td>
                <td><?php echo $rec->subobservacion;?></td>
                <td><?php echo $rec->distrito;?></td>
                <td><?php echo $rec->zona;?></td>
                <td><?php echo $rec->direccion;?></td>
                <td><?php echo $rec->fecha;?></td>
                <td><?php echo $rec->hora;?></td>

                <td>
                  <?php if ($rec->estado > 0): ?>
                    <button class="btn btn-lg btn-success btn-sm active"><span>Activo</span></button>
                  <?php else: ?>
                    <button class="btn btn-lg btn-danger btn-sm active"><span>Inactivo</span></button>
                  <?php endif; ?>
                </td>
                <td>
  <a href="<?php echo base_url();?>administrador/mapa/editar" class=" btn btn-primary btn-sm" data-toggle="modal" data-target="#editAula"><i class="fas fa-eye"></i></a>
                </td>
              </tr>
                <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->

  </div>
  <!---Container Fluid-->
</div>
