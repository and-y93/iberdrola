<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_ct extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('filter_md');
	}
	public function index()
	{
		$data = array(
			'consulta' => $this->filter_md->get_list_all()
		);

		$this->load->view('events_vw', $data);
		$this->load->view('footer_vw');
	}

	function filter(){
		$filter_select = $this->input->post('filter_cat', TRUE);
		$filter_search = $this->input->post('filter_search', TRUE);

		$data = array(
			'consulta' => $this->filter_md->get_filter($filter_select, $filter_search)

		);
			$this->load->view('events_vw', $data);
			$this->load->view('footer_vw');
	}
}
