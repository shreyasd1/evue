<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class'=>"form-control",
	'placeholder'=>'Email',
	'autocomplete'=>"off",
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

	<title>Waiting Cutter | Forgot Password</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="<?php echo base_url(); ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">	
	<div class="login-form">
		<div class="login-content"><img src="<?php echo base_url(); ?>assets/images/binglogo.png" width="150px" height="auto" ></div>
		<div class="login-content">
			<?php echo form_open($this->uri->uri_string()); ?>	
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-mail"></i>
						</div>
						<?php echo form_input($login); ?></td>
						<span style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
					</div>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Send Password
					</button>
				</div>
			</form>
			
			
			<div class="login-bottom-links">
				<?php echo anchor('/auth/login/', 'Login',array("style"=>"color:#fff;",'class'=>"btn btn-success btn-sm  col-sm-6")); ?>
			    <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register',array("style"=>"color:#fff;",'class'=>"btn btn-success btn-sm  col-sm-6")); ?>
			</div>
			
		</div>
		
	</div>
	
</div>

	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url(); ?>assets/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-api.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-login.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url(); ?>assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="<?php echo base_url(); ?>assets/js/neon-demo.js"></script>

</body>
</html>