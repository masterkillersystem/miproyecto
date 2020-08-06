<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy;  - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!--plugin para trabajar con vue js
  <script src="<?php echo base_url();?>assets/js/vue.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/axios.min.js"></script>-->

  <!--plugin para trabajar con jquery y cuadros Estiditicos-->
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/Chart.js"></script>

  <!--plugin para trabajar Validar Formularios-->
  <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.steps.js"></script>

  <!-- Plugins Para La Funciondalidad Estetica del Template-->
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/ruang-admin.min.js"></script>

	<!-- Plugins de Tablas y alertas toastr -->
	<script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/toastr/toastr.min.js"></script>

  <!-- Script de Funciones javascript -->
  <script src="<?php echo base_url();?>assets/js/crud_gestion.js"></script>
  <script src="<?php echo base_url();?>assets/js/app.js"></script>
  <script src="<?php echo base_url();?>assets/js/wizard.js"></script>
  <script src="<?php echo base_url();?>assets/js/estadistica.js"></script>
  <!-- Script de Funciones javascript echo VUEJS
  <script src="<?php echo base_url();?>assets/js/script.js"></script>-->

<script type="text/javascript">
<?php if($this->session->flashdata('msg_success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('msg_success'); ?>");
<?php } ?>
</script>

</body>

</html>
