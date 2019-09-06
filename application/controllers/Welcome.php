<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('tank_auth');

		$this->load->helper('form');
		$this->load->model('Common_model');

	}

	function index()
	{	
		if(!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} else {
			
					
					$data['user_id']	= $this->tank_auth->get_user_id();
					$data['username']	= $this->tank_auth->get_username();
					$data['name']		= $this->session->userdata("name");
					$data['my_list'] =$this->Common_model->getAll('rating')->result_array();

					$data['user_authenticate']=$this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
				//	$data['add_registration'] = base_url().'Welcome/add';
				//	$data['get_data'] = $this->Register_model->get_data();
			
				$this->load->view('common/header');
				$this->load->view('common/nav',$data);
				$this->load->view('welcome',$data);
				$this->load->view('common/footer');

		}
		
	}
	
	



}

