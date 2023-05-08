<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Admin</title>

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


		<!----------------------------User Availablity---------------------------------------->
<script type="text/javascript" src="usercheck/jquery-1.3.2.js"></script>
<link href="usercheck/css1.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript">

$(document).ready(function() {
	$('#Loading').hide();
});


function check_username(){

	var username = $("#username").val();
	if(username.length > 2){
		$('#Loading').show();
		$.post("check_username_availablity1.php", {
			username: $('#username').val(),
		}, function(response){
			$('#Info').fadeOut();
			 $('#Loading').hide();
			setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
		});
		return false;
	}
}

function finishAjax(id, response){

  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn(1000);
}

</script>

<!--favicon genrator-->
 <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
     <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	</head>

	<body class="login-layout light-login">
  <div>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<!-- <i class="ace-icon fa fa-leaf green"></i> -->
									<span class="red"></span>
									<!-- <span class="white" id="id-text2">ZP MIS</span> -->
								</h1>
								<h4 class="green" id="id-company-text"> Admin Login</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>


	<form  method="post">
	  <fieldset>
	    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			<input type="email" class="form-control" placeholder="xyz@email.com" name="a_email" required/>
			<i class="ace-icon fa fa-user"></i>
			</span>
		</label>

			<label class="block clearfix">
			<span class="block input-icon input-icon-right">
			<input type="password" class="form-control" placeholder="Password" name="a_password"  required />
			<i class="ace-icon fa fa-lock"></i>
			</span>
			</label>

			<div class="space"></div>

       <div class="clearfix">
		<div class="btn_class_change">
			<button type="submit" class="width-35 pull-right btn btn-sm btn-primary" name="btn_login">
			 <i class="ace-icon fa fa-key"></i>
			 <span class="bigger-110">Login</span>
			</button></div>

		</div>
            <div class="space-4"></div>
	</fieldset>
</form>
</div>

<?php
include "config.php";
if(isset($_POST['btn_login']))
{
$queryl="select * from admin_login where a_email='".$_POST['a_email']."' and a_password='".$_POST['a_password']."' ";
$resl=mysqli_query($con,$queryl) or die(mysqli_error($con));
if(mysqli_num_rows($resl)>0)
      {
  		   $row=mysqli_fetch_array($resl);
			extract($row);
			if($approve_status=='Approved')
			{
		  //echo MD5($row['org_user_name']);

 		  //session_start();
 		  $_SESSION['id']=$row['id'];
		  $_SESSION['name']=$row['name'];
		  $_SESSION['a_designation']=$row['a_designation'];
		  $_SESSION['a_email']=$row['a_email'];


		  echo "<script>";
		  echo "alert('Login Successfully');";
		  echo "window.location.href='home.php';";
		  echo "</script>";
		  }
		  else
		  {
		  	echo "<script>";
		  echo "alert('Your Account Still Not Approved by Admin');";
		  echo "window.location.href='home.php';";
		  echo "</script>";
		  }
	  }
	 else
	 {
		  echo "<script>";
		  echo "alert('Username  or Password is Invalid');";
		  echo "window.location.href='index.php';";
		  echo "</script>";
	}
}
?>



		</div><!-- /.widget-main -->
</div><!-- /.widget-body -->
</div>
<!-- /.login-box -->
   <br>
   <div class="form_design">
   	<a href="Student/index.php">
	   <h3 align="center">Student</h3>
	   </a>
	<a href="College/index.php">
       <h3 align="center">College</h3>
    </a>
    </div>
       <div id="forgot-box" class="forgot-box widget-box no-border">
		<div class="widget-body">
		<div class="widget-main">
		<h4 class="header red lighter bigger">
		    <i class="ace-icon fa fa-key"></i>
		       Retrieve Password
		</h4>

		<div class="space-6"></div>
	<p>
		Enter your email and to receive instructions
	</p>
       <form id="form_reset_pwd">
		<fieldset>
		  <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			<input type="email" class="form-control" placeholder="Email" name="email" />
		   <i class="ace-icon fa fa-envelope"></i>
		</span>
	</label>
<div class="clearfix">
	<button type="button" class="btn btn-primary forgot_password">
		<i class="ace-icon fa fa-lightbulb-o"></i>
	<span class="bigger-110">Send Me!</span>
	</button>
  </div>
</fieldset>
</form>
<script>
  $(document).ready(function(){

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

   <div id="signup-box" class="signup-box widget-box no-border">
		<div class="widget-body">
		 <div class="widget-main">
			<h4 class="header green lighter bigger">
				<i class="ace-icon fa fa-users blue"></i>
					New ZP Registration
				</h4>
            <div class="space-6"></div>
				<p> Enter Your ZP Details To Begin: </p>
<form method="post">
	<fieldset>
    <label class="block clearfix">
		<span class="block input-icon input-icon-right">
		<select class="form-control" name="zp_district" required >
		<option required >--------Select ZP District--------</option>
<?php
       	  include "config.php";
          $query="select Distinct Name from district WHERE parent_id='0' ";
          //echo $query;
          $res1=mysqli_query($con,$query) or die(mysqli_error($con));
          while($row1=mysqli_fetch_array($res1))
          {
              ?>
              <option value="<?php echo $row1['Name'] ;?>"><?php echo $row1['Name']; ?></option>
              <?php
          }
          ?>
		</select>
	</span>
</label>
    <label class="block clearfix">
	<span class="block input-icon input-icon-right">
		<input type="text" class="form-control" name="zp_name" placeholder="ZP Name" pattern="[a-zA-Z\s]+" title="Characters Only" required />
		<i class="ace-icon  fa fa-asterisk "></i>
	</span>
</label>
	<label class="block clearfix">
    <span class="block input-icon input-icon-right">
    <input type="text" class="form-control" name="zp_auth_name" placeholder="Authority Name" pattern="[A-Za-z\s]+" title="Characters Only" required />
	<i class="ace-icon fa fa-street-view"></i>
	</span>
</label>
<label class="block clearfix">
	<span class="block input-icon input-icon-right">
		<input type="text" class="form-control" name="zp_designation" placeholder="Designation" pattern="[A-Za-z\s]+" title="Characters Only" required />
		 <i class="ace-icon fa fa-square"></i>
	</span>
</label>
   <label class="block clearfix">
   <span class="block input-icon input-icon-right">
    <input type="text" class="form-control" name="zp_mob_no" maxlength="10" placeholder="ZP Mobile No" pattern="[7-9]{1}[0-9]{9}" title="Only Number Start With 7,8,9" required />
	<i class="ace-icon fa fa-mobile"></i>
</span>
</label>
		<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="text" class="form-control" name="zp_phone" maxlength="13" placeholder="ZP Phone No"/>
			<i class="ace-icon fa fa-phone-square"></i>
		</span>
	</label>
<label class="block clearfix">
   <span class="block input-icon input-icon-right">
	<input type="email" class="form-control" name="zp_email" placeholder="xyz@email.com" id="username" onBlur="return check_username();" required />
	<i class="ace-icon fa fa-envelope"></i>
  </span>
</label>
	<div id="Info"></div>
		<span id="Loading"><img src="loader.gif" alt="" /></span><br>
	   <label class="block clearfix">
    <div>
		<textarea class="form-control" id="form-field-8" name="zp_address" placeholder="Address Of ZP" required ></textarea>
	</div>
</label>

		<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="password" class="form-control" name="zp_password" placeholder="Password" id="password" pattern=".{6,}"title="Minimum Lenght Of Password is 6 character" maxlength="25"   required />
			<i class="ace-icon fa fa-lock"></i>
		</span>
	</label>
        <label class="block clearfix">
		<span class="block input-icon input-icon-right">
		<input type="password" class="form-control" placeholder="Repeat password" id="confirm_password" required />
		<i class="ace-icon fa fa-retweet"></i>
	</span>
</label>

<div class="space-24"></div>
    <div class="clearfix">
		<button type="reset" class="width-30 pull-left btn btn-sm">
		   <i class="ace-icon fa fa-refresh"></i>
				<span class="bigger-110">Reset</span>
			</button>
        <button type="submit" class="width-65 pull-right btn btn-sm btn-success" name="btn_register" onClick="return Validate()">
			<span class="bigger-110">Register</span>
           <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
		</button>
	</div>
	</fieldset>
</form>
					<!---------------Confirm password Script---------------------->
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

											<!---------------Registration Query------------------>
<?php
  if(isset($_POST['btn_register']))
   {
		extract($_POST);
	    $query="insert into zp_register(zp_district,zp_name,zp_auth_name,zp_designation,zp_mob_no,zp_phone,zp_email,zp_address,zp_password,zp_approve_status,zp_creation_timestamp)values('$zp_district','$zp_name','$zp_auth_name','$zp_designation','$zp_mob_no','$zp_phone','$zp_email','$zp_address','$zp_password','Approved',NOW())";
		$res=mysqli_query($con,$query) or die(mysqli_error($con));
												//echo $query;
		if($res)
		{
	        echo"<script>";
			echo "alert('New ZP Registration Done Successfully');";
													echo "window.location.href='index.php';";

													echo "</script>";
												}
												else
												{
												    echo"<script>";
													echo "alert('Organization Registration Not Done');";
													echo "window.location.href='index.php';";
													echo "</script>";
												}
											}
											?>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
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
		<script src="assets/js/jquery-2.1.4.min.js"></script>

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
