<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distrito_model extends CI_Model {

    /*listado para mostrar distrito*/
	public function listar(){
		/*$this->db->where("estado","1");*/
		$resultado = $this->db->get("distrito");
		return $resultado->result();
	}

  /*Registro para distrito*/
	public function registrar($data){
		return $this->db->insert("distrito", $data);
	}

}
