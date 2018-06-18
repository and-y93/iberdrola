<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter_md extends CI_Model {
	function __construct(){
		parent::__construct();
	}


	// public function event_search(){
	// 	return $this->db->get('event_list');
	// }

	// public function getList(){
	// 	$this->db->query("SELECT name_event FROM event_list");
	// 	return $result->row();
	// }

	public function get_list_all(){
		// $query = $this->db->get('event_list');
		// if ($query->num_rows()>0){
		// 	return $query;
		// } else {
		// 	return FALSE;
		// }

		$this->db->select('*');
		$this->db->from('event_list');
		$this->db->join('event_cat', 'event_cat.id_cat = event_list.id_cat');
		$result = $this->db->get();
		return $result;
	}

	function get_filter($filter_select, $filter_search){
		// $buscar = '';
		if($filter_select === 'Nombre'){
			 $buscar = 'name_event';
		} else{
			 $buscar = 'name_cat';
		}

		$this->db->select('*');
		$this->db->from('event_list');
		$this->db->join('event_cat', 'event_cat.id_cat = event_list.id_cat');
		$this->db->where($buscar, $filter_search);
		$result = $this->db->get();
		return $result;


	}

}