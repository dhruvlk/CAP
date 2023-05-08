<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>College Admin - Change Password</title>
		
		
		
<?php

include ('header.php');

?>


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
								<a href="home.php">Home</a>
							</li>
							
							<li>
								Settings
							</li>
							
							<li>
								Change Password
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
									
									<div class="col-xs-12 col-sm-4" ></div>
									<div class="col-xs-12 col-sm-4" >
											<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">College Admin Change Password</h4>
													<!------
													<div class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</div>
													-------->
												</div>

												<div class="widget-body">
													<div class="widget-main">
														
														<form method="post">
													
														<div style="padding-bottom:20px">
														
															<label for="form-field-8">Old Password <span style="color:red">*</span> </label>
															
															<input type="password" class="form-control" id="form-field-8" placeholder="Enter Old Password" name="pass" required />
														</div>
														
													<!---	<hr> -->
													
														<div style="padding-bottom:20px">
															<label for="form-field-8">New Password <span style="color:red">*</span> </label>	
															
															<input type="password" class="form-control" name="pass1" placeholder="Enter New Password" id="password"  pattern=".{6,}"title="Minimum Lenght Of Password is 6 character" required />
													
													<!---	<hr>  ---->
													
														</div>
														
														<div style="padding-bottom:20px">
															<label for="form-field-8">Confirm Password <span style="color:red">*</span> </label>
													
															<input type="password" class="form-control" placeholder="Re-enter New Password" id="confirm_password" name="pass2" required />
															
														</div>	
															
													<!---	<hr> ----> 
														
														<center>
														<input type="submit" name="btn_update" class="btn btn-success" value="Submit">
														<input type="reset" name="" class="btn btn-danger" value="Reset">
														</center>
														

														

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
														 
if(isset($_POST['btn_update']))
{
	
	 $query = 'select * from college_reg where  c_password="'.$_POST['pass'].'" and c_id ="'.$_SESSION['c_id'].'" ';

//include('conclass.php');
//$con=new conclass();
//$res=$con->exec_query($query);
//echo $query;
$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0)
{
if (false === $res) {
    echo mysql_error();}
if(strlen($_POST['pass1']) >= 5 )
	{
		if($_POST['pass1']==$_POST['pass2'])
		{
		$query1='update college_reg set c_password="'.$_POST['pass1'].'" where c_id ="'.$_SESSION['c_id'].'" ';	
$res=mysqli_query($con,$query1);

		  echo '<script type="text/javascript">'; 
          echo 'alert("Password is changed");'; 
	      echo 'window.location.href = "home.php";'; 
          echo '</script>';
		}
		else
		{
		echo '<script type="text/javascript">';
	    echo 'alert(" password is not matched...  try again");'; 
	    echo 'window.location.href = "change_password.php";'; 
        echo '</script>';
		}
	}
else 
{
	echo '<script type="text/javascript">';
	echo 'alert(" password is greater than 6");'; 
	echo 'window.location.href = "change_password.php";'; 
    echo '</script>';
}
}
else
{
	echo '<script type="text/javascript">';
	echo 'alert("Old password is not matched...  try again");'; 
	// $query1;
	//echo 'window.location.href = "change_password.php";'; 
    echo '</script>';
			

}
		   }
?>
														
													</div>
												</div>
											</div>
										</div><!-- /.span -->

									
									
									<div class="col-xs-12 col-sm-4" ></div>
									
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->








<?php

include ('footer.php');

?>