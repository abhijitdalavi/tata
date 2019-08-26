<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Timetable extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->helper('form');
		//$this->load->model('Register_model');
		$this->load->model('Common_model');

	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			
					$data['user_id']	= $this->tank_auth->get_user_id();
					$data['username']	= $this->tank_auth->get_username();
					$data['name']		= $this->session->userdata("name");
					$data['days']		=$this->Common_model->getAll("master_day")->result_array();
					$data['times']		=base_url()."index.php/Timetable/insertData";
					$data['dim']		=$this->Common_model->getcurrent()->result_array();
					$data['del']		=base_url()."index.php/Timetable/deleteData";
					$data['tim']		=$this->Common_model->getAll("timetable")->row_array();
					$data['tin']		=$this->Common_model->getAll("room")->row_array();
				//	$data['add_registration'] = base_url().'Welcome/add';
				//	$data['get_data'] = $this->Register_model->get_data();
				$this->load->view('common/header');
			$this->load->view('common/nav',$data);
			$this->load->view('timetable',$data);
			$this->load->view('common/footer');
				
		}
	}

	function insertData(){
		$id=$this->input->post();
		$insert=$this->Common_model->insert("timetable",$id);
		redirect(base_url("index.php/timetable"));
	}

	function deleteData(){
		$id=$this->input->post('id');
		$delete=$this->Common_model->delete("timetable",array('id'=>$id));
		redirect(base_url("index.php/timetable"));
	}
}