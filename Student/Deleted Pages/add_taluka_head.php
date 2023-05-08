<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />


		<title>Organization - Add Enabler</title>
		
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		
		

<input type="hidden" id="refreshed" value="no">
<?php

include ('header.php');

?>
<!----------------------------User Availablity---------------------------------------->
<script type="text/javascript" src="usercheck/jquery-1.3.2.js"></script>
<link href="usercheck/css.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript">

$(document).ready(function() {
	$('#Loading').hide();    
});

function check_username(){

	var username = $("#username").val();
	if(username.length > 2){
		$('#Loading').show();
		$.post("check_username_availablity.php", {
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


<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php" title="Dashboard">Home</a>
							</li>
							<li>
								BDO
							</li>
							<li>
								Add BDO
							</li>
			
						</ul><!-- /.breadcrumb -->
							
						<!----	
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search ----------------->
						
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="page-header">
										<h1>
											BDO
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												New BDO Registration Form
											</small>
										</h1>
									</div><!-- /.page-header -->
								
								
									<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> BDO Name <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="t_h_name" placeholder="Enter Taluka Head Full Name" class="col-xs-10 col-sm-5" pattern="[A-Za-z\s]+" title="Characters Only" required />
											</div>
									    </div>

									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Gender <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input name="t_h_gender" type="radio" value="Male" class="ace" />
															<span class="lbl"> Male </span>
															&nbsp;&nbsp;
												<input name="t_h_gender" type="radio" value="Female" class="ace" />
															<span class="lbl"> Female </span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Photo <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="file" name="t_h_photo" id="form-field-2" placeholder="Select Photo For Uploading" class="col-xs-10 col-sm-5" required />
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile Number<span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="t_h_mno" maxlength="10" placeholder="Enter 10 Digit Mobile No. Start With 7,8,9" class="col-xs-10 col-sm-5"  pattern="[7-9]{1}[0-9]{9}" title="Only Number Start With 7,8,9" required />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email Id<span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="email" id="username" name="t_h_email"  placeholder="xyz@email.com" class="col-xs-10 col-sm-5" onblur="return check_username();" required />
												
					<!--<div id="Info"></div>
					<span id="Loading"><img src="loader.gif" alt="" /></span>
					-->						</div>
											<div id="Info"></div>
					<span id="Loading"><img src="loader.gif" alt="" /></span>
									    </div>


									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Select Taluka<span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<select name="t_h_taluka" class="c col-xs-10 col-sm-5" id="form-field-2" required >
													<option>Select Taluka</option>
	                                            <?php
								                    // $con = mysqli_connect("localhost","root","root","drop") or die(mysqli_error());
	                                            	include "config.php";
								                    $query = mysqli_query($con,"select DISTINCT Name from district WHERE parent_id='1'AND taluka_id='".$_SESSION['zp_district']."' ") or die(mysqli_error($con));
								                    while($row=mysqli_fetch_assoc($query)){
								                        extract($row);

								                        echo "<option value='$Name'>$Name</option>";
								                    }


								                ?>
	                                            </select>
												<!-- <span class="help-inline col-xs-12 col-sm-7">
													<span class="middle">Enter Report Name Here</span>
												</span> -->
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<textarea id="form-field-1" name="t_h_address" placeholder="Enter Taluka Head Address" class="col-xs-10 col-sm-5"  required ></textarea>
											</div>
									    </div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="password" id="form-field-1" name="t_h_password" placeholder="Enter Taluka Head Password" class="col-xs-10 col-sm-5"  required />
											</div>
									    </div>

										<!--<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Enabler Address</label>

											<div class="col-sm-9">
												<textarea id="form-field-1" name="enabler_address"  placeholder="Enter Enabler Address" class="col-xs-10 col-sm-5" required /></textarea>
											</div>
									    </div>-->
										
										<!-- <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Joining Organization<span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="text" name="date_of_joining" maxlength="10" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" class="col-xs-10 col-sm-5 date-picker" required />
											</div>
									    </div> -->
										
										
										
										<!--<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username <span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="enabler_username"  placeholder="Enter Enabler Username" class="col-xs-10 col-sm-5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" maxlength="15" title="Username field that must contain 6 or more characters that are of at least one number, and one uppercase and lowercase letter" required />
											</div>
									    </div>-->
										
										<?php /*?><div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password <span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="password" id="password" name="enabler_password"  placeholder="Enter Enabler Password" class="col-xs-10 col-sm-5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" maxlength="15" title="Password field that must contain 6 or more characters that are of at least one number, and one uppercase and lowercase letter" required />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Confirm Password <span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="password" id="confirm_password" name="enabler_confirmpassword"  placeholder="Re-enter Password" class="col-xs-10 col-sm-5" required />
											</div>
									    </div><?php */?>
										
								
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
											<div class="col-sm-9">
											<input type="submit" name="btn_rgister" value="Submit" class="btn btn-success"/>
											&nbsp;&nbsp;
											<input type="reset" name="clear" value="Cancel" class="btn btn-danger"/>
											</div>
										</div>
								
									
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


									<?php
									include "config.php";
									if(isset($_POST['btn_rgister']))
									{
										extract($_POST);

										//date_default_timezone_set("Asia/Kolkata");
										//$RegDate = date('d/m/Y');
										//$RegDate = date('Y-m-d');

										$img=md5(time());
									  	$name1=$_FILES['t_h_photo']['name'];
										$type=$_FILES['t_h_photo']['type'];
										$size=$_FILES['t_h_photo']['size'];
										$temp=$_FILES['t_h_photo']['tmp_name'];
										$img1="".$img.$name1;
										move_uploaded_file($temp,"taluka_head/taluka_head_photo/".$img1);

										$queryreg=mysqli_query($con,"insert into taluka_head_register (t_zp_email,t_h_name,t_h_gender, t_h_photo,t_h_mno,t_h_email,t_h_district,t_h_taluka,t_h_address, t_h_password,t_h_status,t_h_creation_timestamp) values ('".$_SESSION['zp_email']."','$t_h_name','$t_h_gender','$img1','$t_h_mno','$t_h_email','".$_SESSION['zp_district']."','$t_h_taluka','$t_h_address','$t_h_password','Approved',NOW())") or die(mysqli_error($con));

										if($queryreg)
										{
											
													echo "<script>";
													echo "alert('New BDO Registerd Successfully ');";
													echo "window.location.href='add_taluka_head.php';";
													echo "</script>";																		
										}
										else
										{
											echo "<script>";
											echo 'alert("BDO Not Registerd");';
											echo "window.location.href='add_taluka_head.php';";
											echo "</script>";
										}
									}
									?>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->




			
			



<?php

include ('tagarea.php');

?>


