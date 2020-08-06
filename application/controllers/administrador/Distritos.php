<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distritos extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin/distrito_model');
  }

  public function index(){

    $data = array('distrito' => $this->distrito_model->listar(),);
    $this->load->view('templates/admin_header');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('admin/distrito/index',$data);
    $this->load->view('templates/admin_footer');

  }

  public function guardar(){
		$nom_distrito = $this->input->post("nombre");
		$descripcion  = $this->input->post("descripcion");

				$this->form_validation->set_rules('nombre', 'Nombre del distrito', 'required');
	      $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');

		if ($this->form_validation->run()==true) {
			$data = array('nom_distrito' => $nom_distrito,
										'descripcion'  => $descripcion,
										'estado'       => "1"
		);
			if ($this->distrito_model->registrar($data)){
				redirect(base_url()."administrador/distritos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la aula");
				redirect(base_url()."administrador/distritos");
			}
		}
		else{
			$this->guardar();
		}

	}

}
