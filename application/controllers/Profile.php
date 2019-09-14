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
					$data['thisuser']=$this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
					$data['ab']=$this->Common_model->getAll('rating',array('user_id'=>$this->tank_auth->get_user_id()))->result_array();
					$data['avgrating']=$this->Common_model->getRatingAvg('rating',array('user_id'=>$this->tank_auth->get_user_id()))->result_array();
					$data['hide']=base_url().'index.php/Profile/hide';
					$data['add_review']  =base_url().'index.php/Profile/add_review';
					$data['my_list'] =$this->Common_model->getAll('rating',array('user_id'=>$this->tank_auth->get_user_id()))->result_array();
					$data['req_list']=$this->Common_model->getAll('request',array('requested_to'=>$this->tank_auth->get_user_id()))->result_array();
					//followers count
					$getfollowList = $this->Common_model->getAll("follow",array('user_id'=>$this->tank_auth->get_user_id()))->row_array();
					$data['expl_follower']=explode(',',$getfollowList['follower']);
					$getfollowinglist = $this->Common_model->getAll("follow",array('user_id'=>$this->tank_auth->get_user_id()))->row_array();	
					$data['expl_following']=explode(',',$getfollowList['following']);
					//count ends here 

					$this->load->view('common/header');
					$this->load->view('common/nav',$data);
					$this->load->view('profile',$data);
					$this->load->view('common/footer');

		}
	}

		public function getProfile($id){
				$data['user_authenticate']=$this->Common_model->getAll("users",array('id'=>$id))->row_array();
				$data['add_review']  =base_url().'index.php/Profile/add_review';
				$data['my_list'] =$this->Common_model->getAll('rating',array('user_id'=>$id))->result_array();
				$data['thisuser']=$this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
				$data['ab']=$this->Common_model->getAll('rating',array('user_id'=>$id))->result_array();
				$data['avgrating']=$this->Common_model->getRatingAvg('rating',array('user_id'=>$id))->result_array();
				$data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
				//followers count
				$getfollowList = $this->Common_model->getAll("follow",array('user_id'=>$id))->row_array();
				$data['expl_follower']=explode(',',$getfollowList['follower']);
				$getfollowinglist = $this->Common_model->getAll("follow",array('user_id'=>$id))->row_array();	
				$data['expl_following']=explode(',',$getfollowinglist['following']);
				//count ends here
				$this->load->view('common/header');
				$this->load->view('profile',$data);
				$this->load->view('common/nav',$data);
				$this->load->view('common/footer');
		}

		
		function add_review(){
			$data=$this->input->post();
			$insert=$this->Common_model->insert("rating",$data);
			redirect(base_url('index.php/Profile/getProfile/'.$data['user_id']));
			
	 
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
		
		public function getProfileJSON(){
			$getList=$this->Common_model->getAll("users")->result_array();
			echo json_encode($getList);
		}

		public function follow(){
			$toFollowID=$this->input->post('dataID');//jisko follow karna hai uski id
			$id = $this->tank_auth->get_user_id();
			//uski row me apne id daalneka followers me
			//uski row fetch karenge
			$getFollowListFrom = $this->Common_model->getAll("follow",array('user_id'=>$id))->row_array();//logged in user list
			$getFollowListTo = $this->Common_model->getAll("follow",array('user_id'=>$toFollowID))->row_array();

			//agar donoke koi followers nahi hai
			if(empty($getFollowListFrom) && empty($getFollowListTo)){
				//insert into follow table for both users
				$insertFrom = $this->Common_model->insert("follow",array('following'=>$toFollowID, 'user_id'=>$id));
				
				$insertTo = $this->Common_model->insert("follow",array('follower'=>$id,'user_id'=>$toFollowID));
				echo json_encode(true);
			}
			else if(!empty($getFollowListFrom) && empty($getFollowListTo)){
				
				$expl_from_following = explode(',',$getFollowListFrom['following']);
				
				
				array_push($expl_from_following,$toFollowID);//khudki following list me uska id add kiya
				$impl_from = implode(',',$expl_from_following);
				
				$updateFrom = $this->Common_model->update('follow',array('following'=>$impl_from),array('user_id'=>$id));
				//now updated khudka list

				//now we will insert into uska list
				$insertTo = $this->Common_model->insert("follow",array('follower'=>$id,'user_id'=>$toFollowID));
				echo json_encode(true);
			}
			else if(empty($getFollowListFrom) && !empty($getFollowListTo)){
				$expl_to_follower = explode(',',$getFollowListTo['follower']);
				array_push($expl_to_follower,$id);//khudki following list me uska id add kiya
				$impl_to = implode(',',$expl_to_follower);
				$updateTo = $this->Common_model->update('follow',array('follower'=>$impl_to),array('user_id'=>$toFollowID));

				//now updated uska list
				//now inster into apna list

				$insertFrom = $this->Common_model->insert("follow",array('following'=>$toFollowID,'user_id'=>$id));
				echo json_encode(true);
			}


			else if(!empty($getFollowListFrom) && !empty($getFollowListTo)){
				$expl_from_following = explode(',',$getFollowListFrom['following']);
				array_push($expl_from_following,$toFollowID);//khudki following list me uska id add kiya
				$impl_from = implode(',',$expl_from_following);
				$updateFrom = $this->Common_model->update('follow',array('following'=>$impl_from),array('user_id'=>$id));



				$expl_to_follower = explode(',',$getFollowListTo['follower']);
				array_push($expl_to_follower,$id);//khudki following list me uska id add kiya
				$impl_to = implode(',',$expl_to_follower);
				$updateTo = $this->Common_model->update('follow',array('follower'=>$impl_to),array('user_id'=>$toFollowID));
				echo json_encode(true);
			}
			
		}


		public function unfollow(){
			$toFollowID=$this->input->post('dataID');//jisko unfollow karna hai uski id
			$id = $this->tank_auth->get_user_id();

			$myFollowing = $this->Common_model->getAll("follow", array('user_id'=>$id))->row_array();

			$expl_following = explode(',',$myFollowing['following']);
			$key = array_search($toFollowID,$expl_following);
			unset($expl_following[$key]);
			$impl_following = implode(',',$expl_following);
			$updateFollowing = $this->Common_model->update('follow',array('following'=>$impl_following),array('user_id'=>$id));
			

			//now his follower list to be updated
			$hisFollower = $this->Common_model->getAll("follow", array('user_id'=>$toFollowID))->row_array();
			$expl_follower = explode(',',$hisFollower['follower']);
			$key1 = array_search($id,$expl_follower);
			unset($expl_follower[$key1]);
			$impl_hisFollower = implode(',',$expl_follower);
			$updateFollower = $this->Common_model->update('follow',array('follower'=>$impl_hisFollower),array('user_id'=>$toFollowID));
			
			echo json_encode(true);
		}
		public function hide()
		{
			$id = $this->tank_auth->get_user_id();

			$gethideList = $this->Common_model->getAll("config",array('user_id'=>$id))->row_array();//logged in user list
			if(empty($gethideList)){
			$insert = $this->Common_model->insert("config",array('hide'=>1, 'user_id'=>$id));
			echo json_encode('hidden');
			}
			else{
			if($gethideList['hide']=='0'){
				$updatehide = $this->Common_model->update('config',array('hide'=>'1'),array('user_id'=>$id));
				echo json_encode('hidden');

			}else{
				$updatehide = $this->Common_model->update('config',array('hide'=>'0'),array('user_id'=>$id));
				echo json_encode('unhide');

			}
			

			}
		}
		public function request($id){
		$thisid=$this->tank_auth->get_user_id();//this is requested by
		$req_to = $this->Common_model->getAll("rating", array('id'=>$id))->row_array();
		$req_to2=$req_to['user_id'];
		$insert=$this->Common_model->insert("request",array("requested_to"=>$req_to2,"requested_by"=>$thisid,"review_id"=>$id));
		echo json_encode(true);
		}
		
		public function accept($id,$req_id){
		$gettowhomlist=$this->Common_model->getAll("rating",array("id"=>$id))->row_array();
		$expl_towhom=explode(',',$gettowhomlist['to_whom']);
		
		array_push($expl_towhom,$req_id);
		$impl_towhom = implode(',',$expl_towhom);
		
		$updatetowhom = $this->Common_model->update('rating',array('to_whom'=>$impl_towhom),array('id'=>$id));
		if($updatetowhom=='1'){
			$deleteRequest=$this->Common_model->delete('request',array('review_id'=>$id,'requested_by'=>$req_id));
			echo ($deleteRequest);
		}

		}
}

