<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iberdrola_ct extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('filter_md');
	}

	public function index()
	{
		$data = array(
			'consulta' => $this->filter_md->get_list_all()
		);

		$this->load->view('iberdrola_vw', $data);
		$this->load->view('footer_vw');
	}
}
