<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Organization Profile - Bandhan</title>
		
		
		
		
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
								<a href="">Home</a>
							</li>
							<li>
								Settings
							</li>
							<li>
								Organization Profile
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
								
						 <div class="btn-group pull-right" >
											
											<a href="update_profile.php" class="btn btn-sm btn-yellow">Edit Profile</a>	
							</div><!-- /.btn-group -->
							<form>			
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
	                             <div>
									<div id="user-profile-1" class="user-profile row">
										<div class="tabbable">
											<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
					
														<!-------------
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="assets/images/avatars/profile-pic.jpg" />
															</span>

															<div class="space space-4"></div>

															
														</div><!-- /.col ------------->
													

														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle"><?php echo $row['org_name'];?></span>

																
															</h4>
														
														<!-----
															<div class="profile-user-info" >
															
																<div class="profile-info-row" >
																	<div class="profile-info-name" style="width: 214px;"> Oraganization Name </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_name'];?></span>
																	</div>
																</div>
												
															
																<div class="profile-info-row">
																	<div class="profile-info-name"> Authority Name </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_auth_name'];?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Designation </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_designation'];?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Department </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_department'];?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Mobile No </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_mob_no'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Phone No </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_phone'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Email </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_email'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Address </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_address'];?></span>
																	</div>
																</div>

																
															</div>
															-------->

															<div class="hr hr-8 dotted"></div>
															
															
															<div class="profile-user-info profile-user-info-striped">
															
																<div class="profile-info-row">
																	<div class="profile-info-name" style="width:150px"> Oraganization Name </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_name'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Authority Name </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_auth_name'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Designation </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_designation'];?></span>
																	</div>
																</div>
																																					
																<div class="profile-info-row">
																	<div class="profile-info-name"> Department </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_department'];?></span>
																	</div>
																</div>

																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Mobile No </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_mob_no'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Phone No </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_phone'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Email </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_email'];?></span>
																	</div>
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"> Address </div>

																	<div class="profile-info-value">
																		<span><?php echo $row['org_address'];?></span>
																	</div>
																</div>

										

												
															</div>
											
											
											
															
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space-20"></div>

													<div class="row">
													

														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																

																
															</div>
														</div>
													</div>
												</div><!-- /#home -->

								</div>
                               
								
</form>		
								
								
									
								
<?php

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


