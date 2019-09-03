<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//This Module Is Created By Mayur Rajendra Pawar (mpawar.mayur@gmail.com)
class Common_Model extends CI_Model 
{

	public function __construct()
	{
		$this->load->database();
	}
	public function getAll($tablename,$where='',$orderby='',$column='')
	{
		if($where!=''){ $this->db->where($where); }
		if($orderby!=''){ $this->db->order_by($column,$orderby); }
		$query = $this->db->get($tablename);
		return $query;
	}
	public function getCurrentAvg($tablename,$where='',$orderby='',$column='')
	{
		$this->db->select('current');
		if($where!=''){ $this->db->where($where); }
		if($orderby!=''){ $this->db->order_by($column,$orderby); }
		$this->db->limit(5);
		
		$query = $this->db->get($tablename);
		return $query;
	}
	public function insert($tablename,$data) 
	{ 
		$this->db->insert($tablename,$data);
		return $this->db->insert_id();
	} 
     
	public function update($tablename,$data,$where) 
	{ 
		$this->db->where($where); 
		$query = $this->db->update($tablename,$data); 
		return $query;
	} 
     
	public function delete($tablename,$where) 
	{ 
		$this->db->where($where); 
		$query = $this->db->delete($tablename); 
		return $query;
	}
	public function getmenu($hotel_id)
	{
		$this->db->select("a.id as menu_id,a.hotel_id,a.menu,a.rate,b.id as category_id,b.category");
		$this->db->from("hotelmenu a");
		$this->db->join("menucategory b","b.id=a.category_id","left");
		$this->db->where("a.hotel_id",$hotel_id);
		$query = $this->db->get();
		return $query->result_array();
	}
}    
?>