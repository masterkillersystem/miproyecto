<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<!-- TopBar -->
		<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
			<button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<span class="ml-2 d-none d-lg-inline text-white small"><h6 class="text-white"><?php echo date('d/m/y H:i:s'); ?></h6></span>
					</a>
				</li>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-search fa-fw"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
						aria-labelledby="searchDropdown">
						<form class="navbar-search">
							<div class="input-group">
								<input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
									aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button">
										<i class="fas fa-search fa-sm"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>

				<li class="nav-item dropdown no-arrow mx-1">
					<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-envelope fa-fw"></i>
						<span class="badge badge-warning badge-counter">2</span>
					</a>
					<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
						aria-labelledby="messagesDropdown">
						<h6 class="dropdown-header">
							Message Center
						</h6>
						<a class="dropdown-item d-flex align-items-center" href="#">
							<div class="dropdown-list-image mr-3">
								<img class="rounded-circle" src="<?php echo base_url();?>assets/img/man.png" style="max-width: 60px" alt="">
								<div class="status-indicator bg-success"></div>
							</div>
							<div class="font-weight-bold">
								<div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
									having.</div>
								<div class="small text-gray-500">Udin Cilok · 58m</div>
							</div>
						</a>
						<a class="dropdown-item d-flex align-items-center" href="#">
							<div class="dropdown-list-image mr-3">
								<img class="rounded-circle" src="<?php echo base_url(); ?>assets/img/girl.png" style="max-width: 60px" alt="">
								<div class="status-indicator bg-default"></div>
							</div>
							<div>
								<div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
									say this to all dogs, even if they aren't good...</div>
								<div class="small text-gray-500">Jaenab · 2w</div>
							</div>
						</a>
						<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
					</div>
				</li>

				<div class="topbar-divider d-none d-sm-block"></div>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<img class="img-profile rounded-circle" src="<?php echo base_url();?>assets/img/girl.png" style="max-width: 60px">
						<span class="ml-2 d-none d-lg-inline text-white small"><?php echo $this->session->userdata("email_admin")?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="#">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Perfil admin
						</a>
						<a class="dropdown-item" href="#">
							<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
							Configuracion
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-sm">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Cerrar Sesion
						</a>
					</div>
				</li>
			</ul>
		</nav>
		<!-- Topbar -->
