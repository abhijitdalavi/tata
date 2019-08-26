<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Add_device extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->helper('form');
		
		$this->load->model('Common_model');
	}
		function insertdata(){
			$data=$this->input->post('mac_address');
	
			$userid= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
			$insert=$this->Common_model->insert("add_device",array('mac_address'=>$data,'id'=>$userid['id']));
			redirect(base_url('index.php/welcome'));

	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			
					$data['user_id']	= $this->tank_auth->get_user_id();
					$data['username']	= $this->tank_auth->get_username();
				//	$data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
					$data['device_list'] = $this->Common_model->getAll("add_device")->result_array();
					$data['name']		= $this->session->userdata("name");
				  $data['insertdata']   =base_url().'index.php/Add_device/insertdata';
					$data['editclasses']=base_url()."index.php/Add_device/edit_data/";
				//	$data['add_registration'] = base_url().'Welcome/add';
				//	$data['get_data'] = $this->Register_model->get_data();
				$this->load->view('common/header');
			$this->load->view('common/nav',$data);
			$this->load->view('add_device',$data);
			$this->load->view('common/footer');
				
		}
	}
	
}