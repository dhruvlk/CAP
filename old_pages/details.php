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
								 <a href="" onClick="history.go(-2);">View SHG</a>
							</li>
							<li>
								<a href = "javascript:history.back()">View SHG Profile & Member</a>
							</li>							
							<li>
								View SHG Product
							</li>
							
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

						<div class="page-header">
							<h1>
								Enabler -
								<small>
									<?php
									$q="select * from tbl_enabler where id='".$_GET['enabler_id']."'";
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
						</div><!-- /.page-header -->


<div class="row">
							<div class="col-xs-12">
							
						<!--<a href="add_member.php?shg_id=<?php echo $_GET['shg_id']; ?>" class="btn btn-success"><i class="fa fa-user"></i> Add Member</a>	<a href="add_product.php?shg_id=<?php echo $_GET['shg_id']; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</a>-->
</div></div>


						<div class="row">
							<div class="col-xs-12">
							
								<!-- PAGE CONTENT BEGINS -->
								
								

								<?php
								$query="select * from shg_product_detail where product_id='".$_GET['id']."'";
								//echo $quey;
								$res=mysqli_query($con,$query) or die(mysqli_error($con));
								$row=mysqli_fetch_array($res);
								extract($row);
								?>
								<div class="profile-user-info profile-user-info-striped">
<div class="profile-info-row">
<div class="profile-info-name" style="width:200px"><b>Product Name</b> </div>

<div class="profile-info-value">
																									<!------<span class="editable" id="username">alexdoe</span>-------->
																									<span><?php echo $product_name; ?></span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"><b>Product Category</b></div>
<div class="profile-info-value">
																									<span><?php echo $product_category; ?></span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> <b>Contact Person</b></div>
<div class="profile-info-value">
																									<!-----<span class="editable" id="age">38</span>----->
																									<span><?php echo $contact_person;?></span>
</div>
</div>

																							<div class="profile-info-row">
																								<div class="profile-info-name"> <b>contact_no</b></div>

																								<div class="profile-info-value">
																									<!------<span class="editable" id="signup">2010/06/20</span>----->
																									<span><?php echo $contact_no;?></span>
																								</div>
																							</div>

																					
																							</div>
<div align="center"><a href = "javascript:history.back()" class="btn btn-danger">Back </a></div>
							

								

								
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
