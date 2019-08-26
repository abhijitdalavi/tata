<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');


		$this->load->helper('form');
		
		$this->load->model('Common_model');

	}
	
	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
					$data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
					$data['user_id']	= $this->tank_auth->get_user_id();
					$data['username']	= $this->tank_auth->get_username();
					$data['device_list'] = $this->Common_model->getAll("room")->result_array();
					$data['name']		= $this->session->userdata("name");
					$data['insertdata']   =base_url().'index.php/Classes/insertdata';
		            $data['add']=$this->Common_model->getAll("room")->result_array();
					
					$data['editclasses']=base_url()."index.php/Classes/edit_data/";
				//	$data['add_registration'] = base_url().'Welcome/add';
				//	$data['get_data'] = $this->Register_model->get_data();
				$this->load->view('common/header');
			$this->load->view('common/nav',$data);
			$this->load->view('classes',$data);
			$this->load->view('common/footer');
				
		}
	}

}

        $this->load->helper('form');
        
        $this->load->model('Common_model');

    }

    function index()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
            
                    $data['user_id']    = $this->tank_auth->get_user_id();
                    $data['username']   = $this->tank_auth->get_username();
                    $data['device_list'] = $this->Common_model->getAll("room")->result_array();
                    $data['name']       = $this->session->userdata("name");
                    $data['editclasses']=base_url()."index.php/Classes/edit_data/";
                //  $data['add_registration'] = base_url().'Welcome/add';
                //  $data['get_data'] = $this->Register_model->get_data();
                $this->load->view('common/header');
            $this->load->view('common/nav',$data);
            $this->load->view('classes',$data);
            $this->load->view('common/footer');
                
        }
    }
    public function edit_form(){
        $data=$this->input->post();
        $update=$this->Common_model->update("room",$data,array('id'=>$data['id']));
        
        redirect(base_url('index.php/editclasses'));

    }
    
    public function edit_data(){

            $data['id']=$this->input->post('id');
            $id=$this->input->post('id');

            $data['view_details']   = base_url().'index.php/Classes/view_details';
            $data['edit_data']  = base_url().'index.php/Classes/edit_data';
            $data['edit_data_info'] = $this->Common_model->getAll("room",array('id'=>$id))->row_array();
            $data['delete_data']= base_url().'index.php/Classes/delete_data';
            $data['device_list'] = $this->Common_model->getAll("room")->result_array();
            $data['edit_form']  = base_url().'index.php/Classes/edit_form';
            
            $edit=explode(',',$room['device']);

            foreach($edit as $ed){
            $device_name=$this->Common_model->getAll("master_device",array('id'=>$ed))->result_array();
            }
        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('editclasses',$data);
        $this->load->view('common/footer');
        
    }
    public function delete_data(){
        $id=$this->input->post('id');
        $delete=$this->Common_model->delete("editclasses",array('id'=>$id));
        redirect(base_url('index.php/editclasses'));
    }
}

