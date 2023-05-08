<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - CAP Student</title>

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
  $("select#district_vt").change(function(){
        var d = $("#district_vt option:selected").val();

        $.ajax({
            type: "POST",
            url: "state.php",
            data: { c_district : d  }
        }).done(function(data){
            $("#taluka_vt").html(data);
        });
    });
});
</script>


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
								<h4 class="green" id="id-company-text"> Student Login</h4>
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
															<input type="email" class="form-control" placeholder="xyz@email.com" name="s_email" required/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="s_password"  required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">

														<!------
														<label class="inline">
															<input type="checkbox" class="ace" />
 															<span class="lbl"> Remember Me</span>
														</label>
														-------->
														<div class="btn_class_change">
														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary" name="btn_login">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button></div>



													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
<?php
include "config.php";
if(isset($_POST['btn_login']))
{
$queryl="select * from student_reg where s_email='".$_POST['s_email']."' and s_password='".$_POST['s_password']."' ";
$resl=mysqli_query($con,$queryl) or die(mysqli_error($con));
if(mysqli_num_rows($resl)>0)
      {
  		   $row=mysqli_fetch_array($resl);
			extract($row);
			if($s_approve_status=='Approved')
			{
		  //echo MD5($row['org_user_name']);

 		  //session_start();
 		  $_SESSION['s_id']=$row['s_id'];
 		  $_SESSION['s_gender']=$row['s_gender'];
 		  $_SESSION['s_caste']=$row['s_caste'];
		  $_SESSION['s_enroll_no']=$row['s_enroll_no'];
		  $_SESSION['s_per']=$row['s_per'];
		  $_SESSION['s_pass_year']=$row['s_pass_year'];
		  $_SESSION['s_clg_name']=$row['s_clg_name'];
		  $_SESSION['s_uni_name']=$row['s_uni_name'];
		  $_SESSION['s_mob_no']=$row['s_mob_no'];
		  $_SESSION['s_email']=$row['s_email'];
		  $_SESSION['s_dept_name']=$row['s_dept_name'];
		  $_SESSION['s_state']=$row['s_state'];
		  $_SESSION['s_district']=$row['s_district'];
		  $_SESSION['s_taluka']=$row['s_taluka'];
		  $_SESSION['s_address']=$row['s_address'];
		  $_SESSION['s_approve_status']=$row['s_approve_status'];
		  $_SESSION['s_creation_time_stamp']=$row['s_creation_time_stamp'];


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



											<div>
												<!-- <a   class="forgot-password-link" onClick="return confirm('Are You Sure You Forgot Your Password ?');"  href="forgot_password.php">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a> -->
											</div>



											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													I Want To Register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
								<br>
                                <a href="../index.php">
                                <h3 align="center">Back</h3>
                                </a>

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
  /*  $('#login_form').validate();
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

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New Student Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter Your Details To Begin: </p>

											<form method="post">
												<fieldset>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<select class="form-control" name="s_gender" required >


													<option value="">-------------Select------------ </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                   <!--  <option value="Female">Ms</option>  -->

															</select>
															<!-- <i class="ace-icon fa fa-user"></i> -->
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- <input type="text" class="form-control" name="zp_district" placeholder="ZP District" pattern="[a-zA-Z\s]+" title="Characters Only" required />
															<i class="ace-icon  fa fa-asterisk "></i> -->
															<select class="form-control" name="s_caste" required >

                    <option required >-------------Select Caste-------------</option>
                  <?php
								                    // $con = mysqli_connect("localhost","root","root","drop") or die(mysqli_error());
	                                            	include "config.php";
								                    $query = mysqli_query($con,"select DISTINCT cas_name from caste_reg ") or die(mysqli_error($con));
								                    while($row1=mysqli_fetch_assoc($query)){
								                        extract($row1);

								                        echo "<option value='$cas_name'>$cas_name</option>";
								                    }


								                ?>
															</select>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="s_name" placeholder="Student Name" pattern="[a-zA-Z\s]+" title="Characters Only" required />
															<i class="ace-icon  fa fa-asterisk "></i>
														</span>
													</label>


													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="s_enroll_no" placeholder="Student Enrollment No" maxlength="10" required />
															<i class="ace-icon fa fa-street-view"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="s_per" placeholder="Student Percentage"  required />
															<i class="ace-icon fa fa-rss"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="s_pass_year" placeholder="Student Passing Year"  required />
															<i class="ace-icon fa fa-rss"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="s_clg_name" placeholder="Pervious College Name" title="Characters Only" required />
															<i class="ace-icon fa fa-square"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="s_uni_name" placeholder="University Name" title="Characters Only" required />
															<i class="ace-icon fa fa-square"></i>
														</span>
													</label>


													<!-- <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="org_department" placeholder="Department" pattern="[A-Za-z\s]+" title="Characters Only" required />
															<i class="ace-icon fa fa-dot-circle-o"></i>
														</span>
													</label> -->

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="s_mob_no" maxlength="10" placeholder="Student Mobile No" pattern="[7-9]{1}[0-9]{9}" title="Only Number Start With 7,8,9" required />
															<i class="ace-icon fa fa-mobile"></i>
														</span>
													</label>



													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" name="s_email" placeholder="xyz@email.com" id="username" onBlur="return check_username();" required />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>
													<div id="Info"></div>
					<span id="Loading"><img src="loader.gif" alt="" /></span><br>
													<label class="block clearfix">
													<div>


													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- <input type="text" class="form-control" name="zp_district" placeholder="ZP District" pattern="[a-zA-Z\s]+" title="Characters Only" required />
															<i class="ace-icon  fa fa-asterisk "></i> -->
											<select name="s_dept_name" class="form-control"  required >
													<option>-------------Select Department-------------</option>
	                                            <?php
								                    // $con = mysqli_connect("localhost","root","root","drop") or die(mysqli_error());
	                                            	include "config.php";
								                    $query1 = mysqli_query($con,"select DISTINCT dept_name from dept_reg ") or die(mysqli_error($con));
								                    while($row2=mysqli_fetch_assoc($query1)){
								                        extract($row2);

								                        echo "<option value='$dept_name'>$dept_name</option>";
								                    }


								                ?>
	                                            </select>
														</span>
													</label>


													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- <input type="text" class="form-control" name="zp_district" placeholder="ZP District" pattern="[a-zA-Z\s]+" title="Characters Only" required />
															<i class="ace-icon  fa fa-asterisk "></i> -->
															<select class="form-control" name="s_state"  required >
																>
                    <option required >-------------Select State-------------</option>
                  <?php
       	  include "config.php";
          $queryr="select Distinct state from statecity";
          //echo $query;
          $resr=mysqli_query($con,$queryr) or die(mysqli_error($con));
          while($rowr=mysqli_fetch_array($resr))
          {
              ?>
              <option value="<?php echo $rowr['state'] ;?>"><?php echo $rowr['state']; ?></option>
              <?php
          }
          ?>
															</select>
														</span>
													</label>


													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- <input type="text" class="form-control" name="zp_district" placeholder="ZP District" pattern="[a-zA-Z\s]+" title="Characters Only" required />
															<i class="ace-icon  fa fa-asterisk "></i> -->
															<select class="form-control" name="s_district" id="district_vt" required >
																>
                    <option required >-------------Select District-------------</option>
                  <?php
       	  include "config.php";
          $queryr="select Distinct Name from district WHERE parent_id='0' ";
          //echo $query;
          $resr=mysqli_query($con,$queryr) or die(mysqli_error($con));
          while($rowr=mysqli_fetch_array($resr))
          {
              ?>
              <option value="<?php echo $rowr['Name'] ;?>"><?php echo $rowr['Name']; ?></option>
              <?php
          }
          ?>
															</select>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">

															<select name="s_taluka" class="form-control" id="taluka_vt" required >
																<option required >-------------Select Taluka-------------</option>
                                                    <!-- <option value=""></option> -->
                                                            </select>
														</span>
													</label>

													<label class="block clearfix">
														<textarea class="form-control" id="form-field-8" name="s_address" placeholder="Address Of Student" required ></textarea>
													</label>
													<!--------	<i class="ace-icon fa fa-address-book"></i>------->
													</div>
													</label>

													<!--<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="org_user_name" placeholder="Username" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" maxlength="15" title="Username field that must contain 6 or more characters that are of at least one number, and one uppercase and lowercase letter" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>-->


													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="s_password" placeholder="Password" id="password" pattern=".{6,}"title="Minimum Lenght Of Password is 6 character" maxlength="25"   required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" id="confirm_password" required />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<!-----
													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>
													------>

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
												$query="insert into student_reg(s_gender,s_caste,s_name,s_enroll_no,s_per,s_pass_year,s_clg_name,s_uni_name,s_mob_no,s_email,s_dept_name,s_state,s_district,s_taluka,s_address,s_password)values('$s_gender','$s_caste','$s_name','$s_enroll_no','$s_per','$s_pass_year','$s_clg_name','$s_uni_name','$s_mob_no','$s_email','$s_dept_name','$s_state','$s_district','$s_taluka','$s_address','$s_password')";
												$res=mysqli_query($con,$query) or die(mysqli_error($con));
												//echo $query;
												if($res)
												{
													echo"<script>";
													echo "alert('Student Registration Process Completed Successfully');";
													echo "window.location.href='index.php';";

													echo "</script>";
												}
												else
												{
												    echo"<script>";
													echo "alert('Error! Student Registration');";
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
