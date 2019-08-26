<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mydevice extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->helper('form');
		$this->load->model('Common_model');
		$this->load->model('GetCurrent_model');

	}

	function index()
	{
					$data['user_id']	= $this->tank_auth->get_user_id();
					$data['username']	= $this->tank_auth->get_username();
					$data['name']		= $this->session->userdata("name");
					///$data['insertdata']   =base_url().'index.php/Mydevice/insertdata';

				$this->load->view('common/header');
			$this->load->view('common/nav',$data);
			$this->load->view('mydevice',$data);
			$this->load->view('common/footer');
			
		
	}
	function insertdata(){
		$data=$this->input->post('id');

//$userid= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
		$insert=$this->Common_model->insert("add_device",array('mac_address'=>$data));
	
		redirect(base_url('index.php/add_device'));



	}



}

