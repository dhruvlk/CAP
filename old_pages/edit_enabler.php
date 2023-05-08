<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Organization - Edit Enabler</title>
		
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		
		
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
								Enabler
							</li>
							<li>
								<a href="view_enabler.php">View Enabler</a>
							</li>
							<li>
								Edit Enabler Information
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
											Enabler
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												Edit Enabler Profile
											</small>
										</h1>
									</div><!-- /.page-header -->
								
								<?php
								if(isset($_GET['id']))
								{
								$sql='select * from tbl_enabler where id="'.$_GET['id'].'"';
								$result=mysqli_query($con,$sql)or die(mysqli_error($con));
								$row=mysqli_fetch_array($result);
								extract($row);
								?>
									<form class="form-horizontal" role="form" method="post">
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Enabler Name </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="enabler_name" placeholder="Enter Enabler Name" class="col-xs-10 col-sm-5" pattern="[A-Za-z\s]+" title="Characters Only" value="<?php echo $enabler_name; ?>" required />
											</div>
									    </div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile Number </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="enabler_mno" maxlength="10" placeholder="Enter Enabler Mobile No" class="col-xs-10 col-sm-5"  pattern="[7-9]{1}[0-9]{9}" title="Only Number Start With 7,8,9" value="<?php echo $enabler_mno; ?>"required />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email Id </label>

											<div class="col-sm-9">
												<input type="email" id="form-field-1" name="enabler_email" value="<?php echo $enabler_email; ?>"  placeholder="Enter Enabler Email" class="col-xs-10 col-sm-5" required readonly />
											</div>
									    </div>
										<?php /*?><div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Enabler Address</label>

											<div class="col-sm-9">
												<textarea id="form-field-1" name="enabler_address"  placeholder="Enter Enabler Address" class="col-xs-10 col-sm-5" required /><?php echo $enabler_address; ?></textarea>
											</div>
									    </div><?php */?>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Joining Org </label>

											<div class="col-sm-9">
												<input type="text" id="datepicker" name="date_of_joining" maxlength="10" placeholder="Enter Enabler Date Of Joining Organization" class="col-xs-10 col-sm-5" value="<?php echo $date_of_joining; ?>" required />
											</div>
									    </div>
										
										
										
										<?php /*?><div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="enabler_username"  placeholder="Enter Enabler Username" class="col-xs-10 col-sm-5" required />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

											<div class="col-sm-9">
												<input type="password" id="password" name="enabler_password"  placeholder="Enter Enabler Password" class="col-xs-10 col-sm-5" required />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Confirm Password </label>

											<div class="col-sm-9">
												<input type="password" id="confirm_password" name="enabler_confirmpassword"  placeholder="Enter Enabler Confirm Password" class="col-xs-10 col-sm-5" required />
											</div>
									    </div><?php */?>
										
								
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
											<div class="col-sm-9">
											<input type="submit" name="btn_update" value="Update" class="btn btn-success"/>
											&nbsp;&nbsp;
											<input type="reset" name="clear" value="Cancel" class="btn btn-danger" onClick="history.go(-1);"/>
											</div>
										</div>
								
									
									</form>
									<?php
									}
									
									?>
									<!--------------------------update Query ------------>
									<?php
									if(isset($_POST['btn_update']))
									{
									extract($_POST);
									$query="update tbl_enabler set enabler_name='$enabler_name',enabler_mno='$enabler_mno',enabler_email='$enabler_email',date_of_joining='$date_of_joining' where id='".$_GET['id']."'";
									$res=mysqli_query($con,$query);
									if($res)
									  {
									    echo "<script>";
										echo "alert('Enabler Profile Updated Successfully');";
										echo "window.location.href='view_enabler.php';";
										echo "</script>";
									  }
									  else
									  {
									    echo "<script>";
										echo "alert('Error! Enabler Not updated');";
										echo "window.location.href='view_enabler.php';";
										echo "</script>";
									  }
									}
									?>
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
									

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->




			
			



<?php

include ('footer_date.php');

?>


