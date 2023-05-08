<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin - Update Caste</title>




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
								Caste
							</li>
							<li>
								Update Caste
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
												 Update Caste
											</small>
										</h1>
									</div><!-- /.page-header -->

								<?php
		if(isset($_GET['cas_id']))
		{

          $query= mysqli_query($con,"select * from caste_reg where cas_id='{$_GET['cas_id']}' ") ;
         // $result = mysqli_query($con,$query);
          $row = mysqli_fetch_array($query);
		//  extract($_POST);
		?>




									<form class="form-horizontal" role="form" method="post">

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Caste Name </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" title="Characters Only" class="col-xs-10 col-sm-5" name="cas_name" placeholder="Enter Caste Name" value="<?php echo $row['cas_name'];?>" required  />
											</div>
									    </div>




										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
											<div class="col-sm-9">
											<input type="submit" name="btnupdate" value="Update Caste" class="btn btn-success"/>
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
							$updateprofile= 'update  caste_reg set

							  cas_name="'.$_POST['cas_name'].'"

							  where cas_id="'.$_GET['cas_id'].'"' ;
                          $cresult = mysqli_query($con,$updateprofile);
                          if($cresult)
                          {
							 echo '<script type="text/javascript">';
							 echo " alert('Caste Information Updated Successfully !!! ');";
							 echo 'window.location.href = "view_caste.php";';
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


