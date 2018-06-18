<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_ct extends CI_Controller {

	public function index()
	{
		$this->load->view('calendar_vw');
		$this->load->view('footer_vw');
	}
}
