<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Organization - Update Profile</title>
		
		
		
		
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
								Update Organization Profile
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
											Home
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												 Oraganization Profile
											</small>
										</h1>
									</div><!-- /.page-header -->
								
								<?php 
		if(isset($_SESSION['org_id']))
		{
		  
          $query= mysqli_query($con,"select * from tbl_organization where id='{$_SESSION['org_id']}' ") ; 
         // $result = mysqli_query($con,$query);
          $row = mysqli_fetch_array($query); 
		//  extract($_POST);
		?>
								
								
								
								
									<form class="form-horizontal" role="form" method="post">
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Organization Name </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" pattern="[A-Za-z\s]+" title="Characters Only" class="col-xs-10 col-sm-5" name="org_name" placeholder="Organization Name" value="<?php echo $row['org_name'];?>" required  />
											</div>
									    </div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Authority Name </label>

											<div class="col-sm-9">
												<input type="text" class="col-xs-10 col-sm-5" pattern="[A-Za-z\s]+" title="Characters Only" name="org_auth_name" placeholder="Authority Name" value="<?php echo $row['org_auth_name'];?>" required  />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Designation </label>

											<div class="col-sm-9">
												<input type="text" class="col-xs-10 col-sm-5" pattern="[A-Za-z\s]+" title="Characters Only" name="org_designation" placeholder="Designation" value="<?php echo $row['org_designation'];?>" required  />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Department </label>

											<div class="col-sm-9">
												<input type="text"  pattern="[A-Za-z\s]+" title="Characters Only" class="col-xs-10 col-sm-5" name="org_department" placeholder="Department" value="<?php echo $row['org_department'];?>" required  />
											</div>
									    </div>
										
										
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile No </label>

											<div class="col-sm-9">
												<input type="text" class="col-xs-10 col-sm-5" name="org_mob_no" maxlength="10" placeholder="Mobile No" value="<?php echo $row['org_mob_no'];?>" pattern="[7-9]{1}[0-9]{9}" title="Only Number Start With 7,8,9" required  />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Phone No </label>

											<div class="col-sm-9">
												<input type="text" class="col-xs-10 col-sm-5" name="org_phone" maxlength="13" placeholder="Phone No Phone No 0253-333-2345" pattern="^\d{4}-\d{3}-\d{4}$" value="<?php echo $row['org_phone'];?>" required  />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

											<div class="col-sm-9">
												<input type="email" class="col-xs-10 col-sm-5" name="org_email" placeholder="Email" value="<?php echo $row['org_email'];?>" required  />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address Of Organization </label>

											<div class="col-sm-9">
												<textarea class="col-xs-10 col-sm-5" id="form-field-8" name="org_address" placeholder="Address Of Organization" value="<?php echo $row['org_address'];?>" required ><?php echo $row['org_address'];?></textarea>
											</div>
									    </div>
										
										<!-----
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

											<div class="col-sm-9">
												<input type="text" class="col-xs-10 col-sm-5" name="org_user_name" placeholder="Username" value="<?php //echo $row['org_user_name'];?>" required readonly />
											</div>
									    </div>
										------->
										
										<!------
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

											<div class="col-sm-9">
												<input type="password" class="col-xs-10 col-sm-5" name="org_password" placeholder="Password" required />
											</div>
									    </div>
										------->
										
										
								
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
											<div class="col-sm-9">
											<input type="submit" name="btnupdate" value="Update Profile" class="btn btn-success"/>
											&nbsp;&nbsp;
											<a href="home.php" class="btn btn-danger">Cancel</a>
											</div>
										</div>
								
									
									</form>
								
<?php

		}

?>

								

								     
<?php
						//include "connection.php";
						if(isset($_POST['btnupdate']))
						 {
							 //$q=mysqli_query($con,"");
							$updateprofile= 'update  tbl_organization set 
                         
							  org_name="'.$_POST['org_name'].'" ,
							  org_auth_name="'.$_POST['org_auth_name'].'" ,
							  org_designation="'.$_POST['org_designation'].'" ,
							  org_department="'.$_POST['org_department'].'" ,
							  org_mob_no="'.$_POST['org_mob_no'].'",
							  org_phone="'.$_POST['org_phone'].'",
							  org_email="'.$_POST['org_email'].'",
							  org_address="'.$_POST['org_address'].'",
							  org_modification_timestamp=NOW()
							  where id="'.$_SESSION['org_id'].'"' ;
                          $cresult = mysqli_query($con,$updateprofile); 
                          if($cresult)
                          {
							 echo '<script type="text/javascript">';
							 echo " alert('Organization Information Updated Successfully !!! ');";
							 echo 'window.location.href = "home.php";'; 
							 echo '</script>';
		  
	                      }
	                     else
	                     {
		                       die(mysqli_error($con));
		                       //echo $cQry;
		  
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

include ('footer.php');

?>


