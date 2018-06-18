<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iberdrola_md extends CI_Model {
	function __construct(){
		parent::__construct();
	}


	public function contact_insertar($data){
		$this->db->insert('contact_msg', $data);
	}
}