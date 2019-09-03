<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');
class GetCUrrent_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getCurrent($receivedData)
	{
		$this->db->select_sum('ampere');
		$this->db->from('electricity');
		$this->db->where("Date_p",$receivedData);
		$query=$this->db->get();
		return $query;
	}
}