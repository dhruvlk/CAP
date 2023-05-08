<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Bandhan</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		
		<!--------------For Forget password------------------->
		<!--<link href='http://www.mostlikers.com/favicon.ico' rel='icon' type='image/x-icon'/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	
	<!--favicon genrator-->
 <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
     <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> 

	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Bandhan</span>
									<span class="white" id="id-text2">For India</span>
								</h1>
								<!--<h4 class="blue" id="id-company-text">&copy; Bandhan For India</h4>-->
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter Your Email To Receive Instructions
											</p>

											<div class="space-6"></div>

											<form  method="post" class="form-horizontal"  action="#" id="form_reset_pwd">
												
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" name="email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<!--<button type="button" class="width-35 pull-right btn btn-sm btn-danger">-->
														<div id="error_result"></div>
														<button type="button" class=" width-35 pull-right btn btn-danger forgot_password">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me! </span>
														</button><br>
														<a href="index.php">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
													</div>
												
													<div class="space"></div>

													<div class="clearfix">
													
														
														
														
														
														
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
											<script>  
  $(document).ready(function(){
    $('#login_form').validate();   
    $(document).on('click','#btn-login',function(){
      var url = "login.php";       
      if($('#login_form').valid()){
        $('#logerror').html('<img src="ajax.gif" align="absmiddle"> Please wait...');  
        $.ajax({
        type: "POST",
        url: url,
        data: $("#login_form").serialize(), // serializes the form's elements.
          success: function(data) {                    
            if(data==1) {               
              window.location.href = "profile.php";
            } 
            else {
              $('#logerror').html('The email or password you entered is incorrect.');
              $('#logerror').addClass("error");
            }
          }
        });
      }
      return false;
    });
    $(document).on('click','.forgot_password',function(){
      var url = "reset_password.php";       
      if($('#form_reset_pwd').valid()){
        $('#error_result').html('<img src="ajax.gif" align="absmiddle"> Please wait...');  
        $.ajax({
        type: "POST",
        url: url,
        data: $("#form_reset_pwd").serialize(), // serializes the form's elements.
          success: function(data) {                    
            if(data==1)
            {
              $('#error_result').html('Check your email');
              $('#error_result').addClass("green");
            } 
            else
            {
              $('#error_result').html('Invalid email id. Please check your email id.');
              $('#error_result').addClass("red");
            }
          }
        });
      }
      return false;
    });
});
</script>
											<!------	
											
											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
												<a class="btn btn-primary">
													<i class="ace-icon fa fa-facebook"></i>
												</a>

												<a class="btn btn-info">
													<i class="ace-icon fa fa-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="ace-icon fa fa-google-plus"></i>
												</a>
											</div>
											
											-------->
											
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
										
										
										<!------
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>
										-------->	
										
										<!--------------
											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													I Want To Register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										------------------>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Forgot Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form class="form-horizontal"  action="#" id="form_reset_pwd">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email"  name="email"/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<!--<button type="button" class="width-35 pull-right btn btn-sm btn-danger">--><button type="button" class="btn btn-primary forgot_password">Send Email</button>  
														<!--<button type="button" class="width-35 pull-right btn btn-primary forgot_password">  
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>-->
														<a href="index.php">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
													</div>
													
												</fieldset>
											</form>
											<script>  
 /* $(document).ready(function(){
    $('#login_form').validate();   
    $(document).on('click','#btn-login',function(){
      var url = "login.php";       
      if($('#login_form').valid()){
        $('#logerror').html('<img src="ajax.gif" align="absmiddle"> Please wait...');  
        $.ajax({
        type: "POST",
        url: url,
        data: $("#login_form").serialize(), // serializes the form's elements.
          success: function(data) {                    
            if(data==1) {               
              window.location.href = "profile.php";
            } 
            else {
              $('#logerror').html('The email or password you entered is incorrect.');
              $('#logerror').addClass("error");
            }
          }
        });
      }
      return false;
    });*/
    $(document).on('click','.forgot_password',function(){
      var url = "reset_password.php";       
      if($('#form_reset_pwd').valid()){
        $('#error_result').html('<img src="ajax.gif" align="absmiddle"> Please wait...');  
        $.ajax({
        type: "POST",
        url: url,
        data: $("#form_reset_pwd").serialize(), // serializes the form's elements.
          success: function(data) {                    
            if(data==1)
            {
              $('#error_result').html('Check your email');
              $('#error_result').addClass("green");
            } 
            else
            {
              $('#error_result').html('Invalid email id. Please check your email id.');
              $('#error_result').addClass("red");
            }
          }
        });
      }
      return false;
    });
});
</script>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<!--<script src="assets/js/jquery-2.1.4.min.js"></script>-->

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
