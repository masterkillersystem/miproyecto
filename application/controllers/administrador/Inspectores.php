<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inspectores extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin/user_model');
    $this->load->model('model_admin/cargo_model');
  }

  public function index(){

    $data = array('user' => $this->user_model->listar(),);

    $this->load->view('templates/admin_header');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('admin/inspector/index',$data);
    $this->load->view('templates/admin_footer');

  }

  public function guardar_view(){

    $data = array('grupo' => $this->cargo_model->listar(),);

    $this->load->view("templates/admin_header");
    $this->load->view("templates/admin_sidebar");
    $this->load->view("admin/inspector/create", $data);
    $this->load->view("templates/admin_footer");
  }

  public function guardar(){

    $nombre        = $this->input->post("nom_user");
    $apellido      = $this->input->post("ap_user");
    $carnet        = $this->input->post("ci_user");
    $expedido      = $this->input->post("exp");
    $email         = $this->input->post("email");
    $celular       = $this->input->post("num_cel");
    $imagen        = $this->input->post("foto");
    $usuario       = $this->input->post("usuario");
    $password      = md5($this->input->post("pass_user"));
    $perfil        = $this->input->post("cargo");

    /*SELECCION DE IMAGEN PARA LA FOTO DEL Inspector*/
        $imagen = 'foto';
        $config['upload_path'] = "assets/img/";
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "jpg|jpeg|png";
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        /*$config['encrypt_name'] = TRUE;*/

	      $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($imagen)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        $data['uploadSuccess'] = $this->upload->data();


    $this->form_validation->set_rules("nom_user","Debe llenar su Nombre Completo","required");
    $this->form_validation->set_rules("ap_user","Debe llenar su Apellido Completo","required");
    $this->form_validation->set_rules("ci_user","Llenar su Carnet Identidad","required");
    $this->form_validation->set_rules("exp","Expedicion debe Seleccionar","required");
    $this->form_validation->set_rules("email","Su Correo Electronico","required");
    $this->form_validation->set_rules("num_cel","Llenar su Numero de Celular","required");
    /*$this->form_validation->set_rules("imagen","Seleccione su Imagen","required");*/
    $this->form_validation->set_rules("usuario","Ingrese un Usuario","required");
    $this->form_validation->set_rules("pass_user","Ingrese un Passowrd","required");
    $this->form_validation->set_rules("cargo","Debe Seleccionar un Perfil para el Sistema","required");

    if ($this->form_validation->run()) {
          $data = array(
                'nom_user'      => $nombre,
                'apell_user'    => $apellido,
                'ci_user'       => $carnet,
                'exp_user'      => $expedido,
                'email_user'         => $email,
                'telef_user'    => $celular,
                'foto'          => $imagen,
                'nick_user'     => $usuario,
                'pass_user'     => $password,
                'group_id'      => $perfil,
                'estado'        => "0"
          );
    if ($this->user_model->registrar($data)) {
          redirect(base_url()."administrador/inspectores");
    }
    else {
         $this->session->set_flashdata("error","No se pudo Guardar la Informacion");
         redirect(base_url()."administrador/inspectores/guardar_view");
    }
  }
    else {
      $this->index();
    }

	}

  public function eliminar($id){
			$data = array('estado' => "0");
    	$this->observaciones_model->editar($id,$data);
    	redirect(base_url().'administrador/observaciones');
	}

}
