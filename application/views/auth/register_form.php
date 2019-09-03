<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'class'=>"form-control",
		'placeholder'=>'Username',
		'autocomplete'=>"off",
	);
}
$name = array(
	'name'	=> 'name',
	'id'	=> 'name',
	'value' => set_value('name'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class'=>"form-control",
	'placeholder'=>'Name',
	'autocomplete'=>"off",
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class'=>"form-control",
	'placeholder'=>'Email',
	'autocomplete'=>"off",
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class'=>"form-control",
	'placeholder'=>'Password',
	'autocomplete'=>"off",
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class'=>"form-control",
	'placeholder'=>'Confirm Password',
	'autocomplete'=>"off",
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
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

	<title>Waiting Cutter | Login</title>

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
				<?php if ($use_username) { ?>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						<?php echo form_input($username); ?>
						<span style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
					</div>
				</div>
				<?php } ?>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						<?php echo form_input($name); ?>
						<span style="color: red;"><?php echo form_error($name['name']); ?><?php echo isset($errors[$name['name']])?$errors[$name['name']]:''; ?></span>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group" align="left">
						<div class="input-group-addon">
							<i class="entypo-users"></i>
						</div>
						<label class="radio-inline">
							<input type="radio" name="gender" value="male" checked="checked" ><span style="color:#fff;">Male</span>
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" value="female"><span style="color:#fff;">Female</span>
						</label>
					</div>
				</div>
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-mail"></i>
						</div>
						<?php echo form_input($email); ?>
						<span style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
					</div>
					
				</div>
				
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						<?php echo form_password($password); ?>
						<span style="color: red;"><?php echo form_error($password['name']); ?></span>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						<?php echo form_password($confirm_password); ?>
						<span style="color: red;"><?php echo form_error($confirm_password['name']); ?></span>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Register
					</button>
				</div>
			</form>
			
			
			<div class="login-bottom-links">
				<?php echo anchor('/auth/forgot_password/', 'Forgot your password?',array("style"=>"color:#fff;",'class'=>"btn btn-success btn-sm  col-sm-6")); ?>
			    <?php echo anchor('/auth/login/', 'Login',array("style"=>"color:#fff;",'class'=>"btn btn-success btn-sm  col-sm-6")); ?>				
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