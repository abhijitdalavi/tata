<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Residentialar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->helper('form');
        //$this->load->model('Register_model');
        $this->load->model('Common_model');

    }
    function insertdata(){
        $data=$this->input->post('room_name');

        $userid= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
        $insert=$this->Common_model->insert("room",array('room_name'=>$data,'user_id'=>$userid['id']));
        redirect(base_url('index.php/welcome'));
                            
    }
    function index()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
            
                    $data['user_id']    = $this->tank_auth->get_user_id();
                    $data['username']   = $this->tank_auth->get_username();
                    $data['name']       = $this->session->userdata("name");
                    //$data['add_data']   =base_url().'index.php/Residentialar/add_data';
                    $data['insertdata']   =base_url().'index.php/Residentialar/insertdata';
                    //$data['insertdata'] = $this->Common_model->getAll("room_name")->result_array();
                //  $data['add_registration'] = base_url().'Welcome/add';
                //  $data['get_data'] = $this->Register_model->get_data();
                $this->load->view('common/header');
            $this->load->view('common/nav',$data);
            $this->load->view('residentialar',$data);
            $this->load->view('common/footer');
                
        }
    }
    
}