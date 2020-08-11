<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

	public function index(){
    $this->login_adm();
	}

  public function login_adm(){

    $email = $this->input->post('email');
    $password = $this->input->post('password');

      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');

    if ($this->form_validation->run() === FALSE) {

    $this->load->view('templates/header');
    $this->load->view('index');
    $this->load->view('templates/footer');

    } else {
    if ($user = $this->login_model->admin($email, $password)) {

    $this->session->set_userdata('email_admin', $email);
    $this->session->set_userdata('admin_id', $user['id_admin']);
    $this->session->set_userdata('is_logged_in', true);
    $this->session->set_flashdata('msg_success', 'Inicio de sesion Administrador exitoso!');
                          redirect('dashboard');
    } else {
            $this->session->set_flashdata('msg_error', '¡Las credenciales de inicio de sesión no coinciden!');

            $currentClass = $this->router->fetch_class(); // class = controller
            $currentAction = $this->router->fetch_method(); // action = function

            redirect("$currentClass/$currentAction");
                          //redirect('user/login');
            }
    }

  }

  public function logout() {
        if ($this->session->userdata('is_logged_in')) {

            $this->session->unset_userdata('email_admin');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('admin_id');
        }
        redirect('login');
    }

}
