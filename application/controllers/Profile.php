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
		public function getLikesNumber(){
			$d=$this->input->post('like');
			echo $d;
		}
		public function like(){
			$id=$this->input->post('like');
			$getLikeList = $this->Common_model->getAll("rating",array('id'=>$id))->row_array();
			$getdisLikeList = $this->Common_model->getAll("rating",array('id'=>$id))->row_array();
			$expl_likes=explode(',',$getLikeList['likes']);
			$expl_dislikes=explode(',',$getdisLikeList['dislikes']);
			if(in_array($this->tank_auth->get_user_id(),$expl_likes)){
				$countL=sizeof($expl_likes)-1;
				$countDL=sizeof($expl_dislikes)-1;

				$resp = array('l'=>$countL,'dl'=>$countDL);

				echo json_encode($resp);
			}
			else if(in_array($this->tank_auth->get_user_id(),$expl_dislikes)){
				if (($key = array_search($this->tank_auth->get_user_id(), $expl_dislikes)) !== false) {
					unset($expl_dislikes[$key]);
				}
				array_push($expl_likes,$this->tank_auth->get_user_id());
				$impl_like = implode(',',$expl_likes);
				$impl_dislike=implode(',',$expl_dislikes);
				$update = $this->Common_model->update("rating",array('likes'=>$impl_like,'dislikes'=>$impl_dislike),array('id'=>$id));
				
				$countL=sizeof($expl_likes)-1;
				$countDL=sizeof($expl_dislikes)-1;

				$resp = array('l'=>$countL,'dl'=>$countDL);
				echo json_encode($resp);
			}
			else{

			array_push($expl_likes,$this->tank_auth->get_user_id());
			$impl_like = implode(',',$expl_likes);
			$update = $this->Common_model->update("rating",array('likes'=>$impl_like),array('id'=>$id));
				$countL=sizeof($expl_likes)-1;
				$countDL=sizeof($expl_dislikes)-1;

				$resp = array('l'=>$countL,'dl'=>$countDL);

				echo json_encode($resp);
			}
		}
		public function dislike(){
			$id=$this->input->post('dislike');
			$getLikeList = $this->Common_model->getAll("rating",array('id'=>$id))->row_array();
			$getdisLikeList = $this->Common_model->getAll("rating",array('id'=>$id))->row_array();
			$expl_likes=explode(',',$getLikeList['likes']);
			$expl_dislikes=explode(',',$getdisLikeList['dislikes']);
			if(in_array($this->tank_auth->get_user_id(),$expl_dislikes))
			{
				$countL=sizeof($expl_likes)-1;
				$countDL=sizeof($expl_dislikes)-1;

				$resp = array('l'=>$countL,'dl'=>$countDL);

				echo json_encode($resp);
   			}
			else if(in_array($this->tank_auth->get_user_id(),$expl_likes)){
				if (($key = array_search($this->tank_auth->get_user_id(), $expl_likes)) !== false) {
					unset($expl_likes[$key]);
				}
				array_push($expl_dislikes,$this->tank_auth->get_user_id());
				$impl_dislike=implode(',',$expl_dislikes);
				$impl_like = implode(',',$expl_likes);
				$update = $this->Common_model->update("rating",array('dislikes'=>$impl_dislike,'likes'=>$impl_like),array('id'=>$id));
				$countL=sizeof($expl_likes)-1;
				$countDL=sizeof($expl_dislikes)-1;
				$resp = array('l'=>$countL,'dl'=>$countDL);

				echo json_encode($resp);
			}		
			else{
			array_push($expl_dislikes,$this->tank_auth->get_user_id());
			$impl_dislike = implode(',',$expl_dislikes);
			$update = $this->Common_model->update("rating",array('dislikes'=>$impl_dislike),array('id'=>$id));
			
				$countL=sizeof($expl_likes)-1;
				$countDL=sizeof($expl_dislikes)-1;
				$resp = array('l'=>$countL,'dl'=>$countDL);

				echo json_encode($resp);
			}
		
		
		}
		

}

