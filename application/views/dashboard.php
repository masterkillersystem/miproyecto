
<!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h4 class="h4 mb-0 text-gray-800"><i class="fas fa-list-ul -fw"></i>  Dashboard</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard_admin">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </div>

    <div class="row mb-3">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body bg-secondary">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1 text-white"><h6>Funcionarios</h6></div>
                <div class="h5 mb-0 font-weight-bold text-white">5151</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><img src="assets/img/funcionario.png" style="max-width: 20px"></img> 3.48%</span>
                  <span>Nivel de Progreso</span>
                </div>
              </div>
              <div class="col-auto">
                <img src="assets/img/funcionario.png" style="max-width: 60px"></img>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body bg-primary">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1 text-white"><h6>Inspectores</h6></div>
                <div class="h5 mb-0 font-weight-bold text-white"><?php echo $num_inspector; ?></div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><img src="assets/img/inspector.png" style="max-width: 20px"></img> 12%</span>
                  <span>Nivel de Progreso</span>
                </div>
              </div>
              <div class="col-auto">
                <img src="assets/img/inspector.png" style="max-width: 60px"></img>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New User Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body bg-success">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1 text-white"><h6>Reclamos Atendidos</h6></div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-white"><?php echo $atendidos; ?></div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><img src="assets/img/atendidos.png" style="max-width: 20px"> 20.4%</span>
                  <span>Nivel de Progreso</span>
                </div>
              </div>
              <div class="col-auto">
                <img src="assets/img/atendidos.png" style="max-width: 60px">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body bg-warning">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1 text-white"><h6>Reclamos Sin Atender</h6></div>
                <div class="h5 mb-0 font-weight-bold text-white"><?php echo $sin_atender; ?></div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-danger mr-2"><img src="assets/img/sinatender.png" style="max-width: 20px"> 1.10%</span>
                  <span>Nivel de Asistencia</span>
                </div>
              </div>
              <div class="col-auto">
                <img src="assets/img/sinatender.png" style="max-width: 60px">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-map-marked-alt"></i>Grafico de Pagos de Cuotas</h6>
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



          </div>
        </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-xl-4 col-lg-5">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-image fa-1x"></i> Galeria de Imagenes Inspeccionadas</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones <i class="fas fa-chevron-down"></i>
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

          <div id="#" class="card-body">
                              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/img/img1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  </div>
          </div>

          <div class="card-footer text-center">
            <a class="m-0 small text-primary card-link" href="#">View More <i
                class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <!--Fin de Pie Chart-->

    </div>
    <!--Row-->

    <div class="row">
      <div class="col-lg-12 text-center">
        <p>Do you like this template ? you can download from <a href="https://github.com/indrijunanda/RuangAdmin"
            class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
      </div>
    </div>

  </div>
  <!---Container Fluid-->
</div>
