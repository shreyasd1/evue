<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//This Module Is Created By Mayur Rajendra Pawar (mpawar.mayur@gmail.com)
define('SSTATUS_ACTIVATED', '1');
define('SSTATUS_NOT_ACTIVATED', '0');
class Sociallogin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model('Common_model');
	}

	function fblogin()
	{
		require_once('./Facebook/autoload.php');
		$appId=$this->config->item('fb_app_id', 'tank_auth');
		$appSecret=$this->config->item('fb_app_secret', 'tank_auth');
		$redirectURL 	= $this->config->item('fb_redirectURL', 'tank_auth'); //Callback URL
		$fbPermissions 	= array('email');  //Optional permissions

		$fb = new \Facebook\Facebook(array(
			'app_id' => $appId,
			'app_secret' => $appSecret,
			'default_graph_version' => 'v2.2',
		));

		// Get redirect login helper
		$helper = $fb->getRedirectLoginHelper();

		// Try to get access token
		try {
			if($this->session->userdata('facebook_access_token') != ""){
				$accessToken = $this->session->userdata('facebook_access_token');
			}else{
				$accessToken = $helper->getAccessToken();
			}
		} catch(FacebookResponseException $e) {
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		} catch(FacebookSDKException $e) {
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}
		
		//check for profile
		if(isset($accessToken))
		{
			if($this->session->userdata('facebook_access_token')!= ""){
				$fb->setDefaultAccessToken($this->session->userdata('facebook_access_token'));
			}else{
				// Put short-lived access token in session
				$this->session->set_userdata('facebook_access_token',(string) $accessToken);
				
				// OAuth 2.0 client handler helps to manage access tokens
				$oAuth2Client = $fb->getOAuth2Client();
				
				// Exchanges a short-lived access token for a long-lived one
				$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($this->session->userdata('facebook_access_token'));
				$this->session->set_userdata('facebook_access_token',(string) $longLivedAccessToken);
				
				// Set default access token to be used in script
				$fb->setDefaultAccessToken($this->session->userdata('facebook_access_token'));
			}
			
			// Redirect the user back to the same page if url has "code" parameter in query string
			if(isset($_GET['code'])){
				header('Location: ./');
			}
			
			// Getting user facebook profile info
			try
			{
				$profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
				$fbUserProfile = $profileRequest->getGraphNode()->asArray();
			} catch(FacebookResponseException $e) 
			{
				echo 'Graph returned an error: ' . $e->getMessage();
				session_destroy();
				// Redirect user back to app login page
				header("Location: ./");
				exit;
			} 
			catch(FacebookSDKException $e) 
			{
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;
			}
			//echo "<pre>";
			//print_r($fbUserProfile);
			$this->create_user($fbUserProfile['email'],$fbUserProfile['name'],$fbUserProfile['gender'],$fbUserProfile['id'],$fbUserProfile['picture']['url'],"Facebook");
			// Get logout url
			//$logoutURL = $helper->getLogoutUrl($accessToken, $redirectURL.'/logout');
			//echo '<a href="'.$logoutURL.'"> Logout from Facebook</a>'; 
			
			
		}
		else
		{
			// Get login url
			$loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);
			// Render facebook login button
			echo $output = '<a href="'.htmlspecialchars($loginURL).'">Login With Facebook</a>';
		}
		///////////////////
	}
	function googlelogin()
	{
		require_once('./Google/Google_Client.php');
		require_once('./Google/contrib/Google_Oauth2Service.php');
		$clientId = $this->config->item('google_clientId', 'tank_auth'); //Google client ID
		$clientSecret = $this->config->item('google_clientSecret', 'tank_auth'); //Google client secret
		$redirectURL = $this->config->item('google_redirectURL', 'tank_auth'); //Callback URL
		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login to IOT CodeElectra');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		if(isset($_GET['code'])){
			$gClient->authenticate($_GET['code']);
			$this->session->set_userdata('token',$gClient->getAccessToken());
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if ($this->session->userdata('token')!= "")
			{
			$gClient->setAccessToken($this->session->userdata('token'));
		}

		if ($gClient->getAccessToken()) {
			//Get user profile data from google
			$gpUserProfile = $google_oauthV2->userinfo->get();
			//echo "<pre>";
			//print_r($gpUserProfile);
			$this->create_user($gpUserProfile['email'],$gpUserProfile['name'],$gpUserProfile['gender'],$gpUserProfile['id'],$gpUserProfile['picture'],"Google");
			
		} 
		else 
		{
			$authUrl = $gClient->createAuthUrl();
			echo $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'">Login With Google</a>';
		}
	}
	function logout()
	{
		$this->session->set_userdata('facebook_access_token',"");
		$this->session->set_userdata('token',"");
		redirect(base_url());
	}
	function create_user($email,$name,$gender,$token,$image,$provider)
	{
		if(!isset($gender)){ $gender=""; }
		if(!isset($image)){ $image=""; }
		$arr=array();
		$data = array("email"=>$email,"name"=>$name,"gender"=>$gender,"profile_image"=>$image);
		if($provider=="Google")
		{ 
			$arr=array("email"=>$email,'google_id'=>$token);
			$data['google_id'] = $token;
		}
		elseif($provider=="Facebook")
		{ 
			$arr=array("email"=>$email,'facebook_id'=>$token); 
			$data['facebook_id'] = $token;
		}
		$checkuser = $this->Common_model->getAll("users",$arr)->row_array();

		if(empty($checkuser))
		{
			$checkemail = $this->Common_model->getAll("users",array("email"=>$email))->row_array();
			if(empty($checkemail))
			{
				
				$res = $this->Common_model->insert("users",$data);
				if($res > 0)
				{
					$this->session->set_userdata(array(
									'user_id'	=> $res,
									'role'		=> 1,
									'name'	=> $name,
									'provider'	=> 'social',
									"profile_image"=>$image,
									'username'	=> "",
									'status'	=> (1 == 1) ? SSTATUS_ACTIVATED : SSTATUS_NOT_ACTIVATED,
							));
					redirect(base_url()."welcome");
				}
			}
			else
			{
				
				$res = $this->Common_model->update("users",$data,array("email"=>$checkemail['email']));
				if($res > 0)
				{
					//$this->session->set_userdata('user_id',$checkuser['id']);
					$this->session->set_userdata(array(
						'user_id'	=> $checkemail['id'],
						'role'		=> 1,
						'name'	=> $checkemail['name'],
						'provider'	=> 'social',
						"profile_image"=>$checkemail['profile_image'],
						'username'	=> $checkemail['username'],
						'status'	=> ($checkemail['activated'] == 1) ? SSTATUS_ACTIVATED : SSTATUS_NOT_ACTIVATED,
					));
					redirect(base_url()."welcome");
				}
			}
		}
		else
		{
			
			$res = $this->Common_model->update("users",$data,array("id"=>$checkuser['id']));
			if($res > 0)
			{
				$this->session->set_userdata(array(
					'user_id'	=> $checkuser['id'],
					'name'	=> $checkuser['name'],
					'role'		=> 1,
					'provider'	=> 'social',
					"profile_image"=>$checkuser['profile_image'],
					'username'	=> $checkuser['username'],
					'status'	=> ($checkuser['activated'] == 1) ? SSTATUS_ACTIVATED : SSTATUS_NOT_ACTIVATED,
				));
				redirect(base_url()."welcome");
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */