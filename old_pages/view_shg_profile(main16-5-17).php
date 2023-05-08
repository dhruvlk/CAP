<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Enabler View SHG Member - Bandhan </title>
		<link rel="stylesheet" href="colorbox-master/example3/colorbox.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="colorbox-master/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function()
			{
				//Examples of how to assign the Colorbox event to elements
				$(".iframe_profile").colorbox({iframe:true, width:"80%", height:"80%"});
			})
			</script>
		<?php
		include("header.php");
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
							<li>Enabler</li>
							<li>SHG</li>
							<li>
								 <a href="" onClick="history.go(-1);">View SHG</a>
							</li>
							<li>
								View SHG Profile
							</li>
							<li class="active">View SHG Member</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<!--<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>-->
						</div><!-- /.nav-search -->
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

						<!--<div class="page-header">
							<h1>
								SHG
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									View SHG Profile
								</small>
							</h1>
						</div>--><!-- /.page-header -->


<?php /*?><div class="row">
							<div class="col-xs-12">
							
						<a href="add_member.php?shg_id=<?php echo $_GET['shg_id']; ?>" class="btn btn-success"><i class="fa fa-user"></i> Add Member</a>	<a href="add_product.php?shg_id=<?php echo $_GET['shg_id']; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</a>
</div></div>
<?php */?>

						<div class="row">
							<div class="col-xs-12">
							
								<!-- PAGE CONTENT BEGINS -->
								
								


<div class="row">
									<div class="col-md-8">
										<div class="page-header">
							<h1>
								Enabler -
								<small>
									<?php
									$q="select * from tbl_enabler where id='".$_GET['id']."'";
									$r=mysqli_query($con,$q);
									$row=mysqli_fetch_array($r);
									extract($row);
									?>
									
									<span style="font-size:20px">
									<?php echo $enabler_name; ?>  </span> 
									<i class="ace-icon fa fa-angle-double-right"></i>
								SHG
								
									<i class="ace-icon fa fa-angle-double-right"></i>
									View SHG Profile
								</small>
							</h1>
						</div>																		<div class="space-20"></div>
										
										<?php
								$query="select * from tbl_add_shg where shg_id='".$_GET['shg_id']."' and enabler_id='".$_GET['id']."'";
								$res=mysqli_query($con,$query);
								$row=mysqli_fetch_array($res);
								extract($row);
								?>

			<div class="col-md-6">
										


<div class="profile-user-info profile-user-info-striped">


<div class="profile-info-row" >
<div class="profile-info-name" style="width:222px"><b>Name Of SHG</b></div>
<div class="profile-info-value">
																									<span><?php echo $shg_group_name; ?></span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> <b>Total Number Of Members In SHG</b></div>
<div class="profile-info-value">
																									<!-----<span class="editable" id="age">38</span>----->
																									<span><?php echo $total_member;?></span>
</div>
</div>

																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Date Of Formation</b></div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="signup">2010/06/20</span>----->
																									<span><?php echo $shg_formation_date;?></span>
																								</div>
																							</div>

																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Amount Of Saving</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $shg_amount_of_saving; ?></span>
																								</div>
																							</div>

																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>District</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $shg_district; ?></span>
																								</div>
																							</div>
																							
																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Block Name /Taluka</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $shg_taluka;?></span>
																								</div>
																							</div>
																							
																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Village Name</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $shg_village_name; ?></span>
																								</div>
																							</div>
																							
																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Bank Linkage</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $shg_bank_linkage; ?></span>
																								</div>
																							</div>
																							
																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Market Linkage</b></div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $shg_market_linkage; ?></span>
																								</div>
																							</div>
																							

							</div>										</div>

<div class="col-xs-6">
									
							
													

																						<div class="profile-user-info profile-user-info-striped">
																							<div class="profile-info-row">
																								<div class="profile-info-name" style="width:200px"><b><b>Current Activity</b></b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="username">alexdoe</span>-------->
																									<span><?php echo $shg_current_activity; ?></span>
																								</div>
																							</div>

																							<div class="profile-info-row">
																								<div class="profile-info-name"><b>Skill Trainings</b></div>
																								<div class="profile-info-value">
<!----------
																									<i class="fa fa-map-marker light-orange bigger-110"></i>
																									<span class="editable" id="country">Netherlands</span>
																									<span class="editable" id="city">Amsterdam</span>
																									----->
																									<span><?php echo $skill_training; ?></span>
																								</div>
																							</div>

																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Past Activity</b></div>

																								<div class="profile-info-value">
																									<!-----<span class="editable" id="age">38</span>----->
																									<span><?php echo $past_activity;?></span>
																								</div>
																							</div>

																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Intrested Activity</b></div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="signup">2010/06/20</span>----->
																									<span><?php echo $intrested_activity; ?></span>
																								</div>
																							</div>

																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Basic Concept of SHG</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $basic_concept; ?></span>
																								</div>
																							</div>

																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Financial Literacy</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $financial_literacy; ?></span>
																								</div>
																							</div>
																							
																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Functional Literacy</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $functional_literacy;?></span>
																								</div>
																							</div>
																							
																							
																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>Business Entreprenuership Development</b> </div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="login">3 hours ago</span>----->
																									<span><?php echo $business_development;?></span>
																								</div>
																							</div>
																							
																						</div>
																						</div>	
																		</div>	<!---</div class="md-8">---->
								<div class="col-md-4">
								<div class="page-header">
							<h1>
								SHG
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									View SHG Product
								</small>
							</h1>
						</div>
								<div class="space-20"></div>
								<table class="table table-bordered">
					<tr>
					<th>Product Name</th>
					<th>Product Details</th>
					</tr>
								<?php
							
					$res = mysqli_query($con,"SELECT * FROM shg_product_detail where shg_id='".$_GET['shg_id']."' ");
						while($row = @mysqli_fetch_array($res))
							{
							extract($row);
							?>
        
       				
					<tr><td><?php echo $product_name;  ?></td><td><a href="details.php?id=<?php echo $product_id; ?> &enabler_id=<?php echo $enabler_id; ?>" class="iframe_profile" title="View Product Details"><i class="ace-icon fa fa-eye bigger-130"></i></a>&nbsp;&nbsp;
					<!--<a class="green" href="edit_shg_product.php?id=<?php echo $product_id; ?>" title="Edit">
						<i class="ace-icon fa fa-pencil bigger-130"></i>
					</a>&nbsp;&nbsp;
-->					<!--<a class="red" onClick="return confirm('Are You Sure You Want To Dactivate This SHG ?');"  href="delete_shg_product.php?id=<?php echo $product_id; ?>" title="Deactivate">
						<i class="ace-icon fa fa-trash-o bigger-130"></i>
					</a>-->
					</td></tr>
					
	 				 	 <?php
							}
	
							?>
							</table>	
</div>
</div>
								<br>
								<div class="col-xs-12">
									<div class="page-header">
										<h1>
											SHG
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												View SHG Member
											</small>
										</h1>
									</div>
						
						
						
										  
										  <p>Click Here To See The SHG Member Details.</p>
										  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">SHG Member Details</button>
											  <div id="demo" class="collapse">
												
												<!------------------------------------------->
													<?php
													include("view_shg_member.php");
													?>
						
													
												<div style="float:right">
												<?php /*?><a href="add_member.php?shg_id=<?php echo $_GET['shg_id']; ?>" class="btn btn-success"><i class="fa fa-user"></i> Add Member</a>	<a href="add_product.php?shg_id=<?php echo $_GET['shg_id']; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</a><?php */?>
												</div>
											  </div>
										
									
										
										
								</div><!--col-xs12 -->
								
								

							

								

								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php
			include("member_footer.php");
			?>
	</body>
</html>
