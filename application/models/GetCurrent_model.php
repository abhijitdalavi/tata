<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//This Module Is Created By Mayur Rajendra Pawar (mpawar.mayur@gmail.com)
class GetCurrent_model extends CI_Model 
{

	public function __construct()
	{
		$this->load->database();
	}
	
    
    public function getcurrent($receivedDate)
    {
        $this->db->select_sum('ampere');
        $this->db->from('electricity');
        $this->db->where("Date_p",$receivedDate);
        $query = $this->db->get();
        return $query;

    }
      
    public function getpin($receivedDate)
    {
        $this->db->update('current');
        $this->db->set('pin1');
        $this->db->where("mac_address",$receivedDate);
        $query = $this->db->get();
        return $query;

    }
       
    public function take($tablename,$coloum='')
    {
        $this->db->select('start_time','end_time');
        $this->db->from('timetable');
       // $this->db->where("Date_p",$receivedDate);
        $query = $this->db->get();
        return $query;

    }
}    
?>
