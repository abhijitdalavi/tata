<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('tank_auth');

		$this->load->helper('form');
		$this->load->model('GetCurrent_model');
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
					$data['ele_list'] = $this->Common_model->getAll("electricity")->result_array();
					$data['time'] = $this->Common_model->getAll("timetable")->result_array();
					$data['rooms']=$this->Common_model->getAll("room")->result_array();
				//	$data['add_registration'] = base_url().'Welcome/add';
				//	$data['get_data'] = $this->Register_model->get_data();
			$this->load->view('common/header');
			$this->load->view('common/nav',$data);
			$this->load->view('welcome',$data);
			$this->load->view('common/footer');
				
		}
	}
function details(){
		$date=date('Y-m-d');
		$details=$this->GetCurrent_model->getcurrent($date)->row_array();
		echo $details['ampere'];
}

function upData($data){
				$data1=$this->Common_model->update("electricity",array('ampere'=>$data),array('id'=>'1'));
			}
function insertdata($data){
	$date=date('Y-m-d');
				$insert=$this->Common_model->insert("electricity",array('ampere'=>$data,'Date_p'=>$date));
			}
function insertmac($data){
			
	$insert=$this->Common_model->insert("current",array('mac_address'=>$data));

						
}

function upData_mac($data){
	$data1=$this->Common_model->update("current",array('pin1'=>'1'),array('mac_address'=>$data));
	//$data1=$this->GetCurrent_model->getpin($data,'pin1'=>'1');
}

//<<<<<<< HEAD

//<<<<<<< HEAD
						
}
//=======
//>>>>>>> 97e518ccbf9aae866d1878bb72dfbd82e0263ab7
function inserttime($time1,$time2){
			
//$insertime=$this->Common_model->insert("timetable",array('mac_address'=>$time1,$time2));

						
}
//<<<<<<< HEAD
//=======

//>>>>>>> 8408719c346952c1672466be955f15ed040f1901
//=======

//>>>>>>> 97e518ccbf9aae866d1878bb72dfbd82e0263ab7


function timetable($room_id){
	$data1=$this->Common_model->getall("timetable",array('room_id'=>$room_id))->row_array();
	echo "Start Time is: ".$data1['start_time']."<br>"."End Time is: ".$data1['end_time'];
}

function checktime(){
$data1=$this->Common_model->getall("timetable")->result_array();

	foreach($data1 as $time)
	{
		if($time['day']==date('l') && (strtotime(date('H:i:s'))>=strtotime($time['start_time'])&&strtotime(date('H:i:s'))<strtotime($time['end_time'])))
		{
			     $room=$this->Common_model->getall("room",array('room_id'=>$time['room_id']))->row_array();
				
				// print_r($room);
				 $expdevice=explode(',',$room['device']);

				 foreach($expdevice as $exp){
					$macadd=$this->Common_model->getall("master_device",array('id'=>$exp))->result_array();
					$update=$this->Common_model->update("current",array('flag'=>'1'),array('mac_address'=>$macadd['0']['mac_address']));
			}
		}
		else{
				$room=$this->Common_model->getall("room",array('room_id'=>$time['room_id']))->row_array();
				
				// print_r($room);
				 $expdevice=explode(',',$room['device']);

				 foreach($expdevice as $exp){
					$macadd=$this->Common_model->getall("master_device",array('id'=>$exp))->result_array();
					$update=$this->Common_model->update("current",array('flag'=>'0'),array('mac_address'=>$macadd['0']['mac_address']));
					
				 }
		}
	}



}


	

			
