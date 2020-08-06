
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
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Docentes</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">5151</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><i class="fa fa-chalkboard-teacher"></i> 3.48%</span>
                  <span>Nivel de Progreso</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-chalkboard-teacher fa-3x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Estudiantes</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">515151</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><i class="fas fa-user-graduate"></i> 12%</span>
                  <span>Nivel de Progreso</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user-graduate fa-3x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New User Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Pagos Pendientes</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><i class="fas fa-id-badge"></i> 20.4%</span>
                  <span>Nivel de Progreso</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-id-badge fa-3x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Tutores</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-danger mr-2"><i class="fas fa-restroom"></i> 1.10%</span>
                  <span>Nivel de Asistencia</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-restroom fa-3x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-pie-chart"></i>Grafico de Pagos de Cuotas</h6>
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

              <canvas id="pagosAlumno"></canvas>

          </div>
        </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-xl-4 col-lg-5">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-poll"></i> Grafico de Estudiantes por Genero</h6>
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

          <div id="contenedor_grafic" class="card-body">
              <canvas id="generoAlumno"></canvas>
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
