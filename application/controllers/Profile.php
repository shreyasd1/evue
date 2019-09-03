<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
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
					$data['user_authenticate']=$this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();

					$data['add_review']  =base_url().'index.php/Profile/add_review';
					$data['my_list'] =$this->Common_model->getAll('rating')->result_array();

				$this->load->view('common/header');
				$this->load->view('common/nav',$data);
				$this->load->view('profile',$data);
				$this->load->view('common/footer');

		}
	}
		function add_review(){
			$data=$this->input->post();
			$insert=$this->Common_model->insert("rating",$data);
			redirect(base_url('index.php/profile'));
			
	 
		}

}

