<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_ct extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('iberdrola_md');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('contact_vw');
		$this->load->view('footer_vw');
	}

	public function contact_insertar(){
		$data = array(
			'name_contact' => $this->input->post('name_contact', TRUE),
			'subname_contact' => $this->input->post('subname_contact', TRUE),
			'email_contact' => $this->input->post('email_contact', TRUE),
			'city_contact' => $this->input->post('city_contact', TRUE),
			'cp_contact' => $this->input->post('cp_contact', TRUE),
			'subject_contact' => $this->input->post('subject_contact', TRUE),
			'text_contact' => $this->input->post('text_contact', TRUE)
		);
		$this->iberdrola_md->contact_insertar($data);
	}
}
