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
								BDO
							</li>
							<li>
								View BDO
							</li>
							<li>
								Update BDO Information
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
												 BDO Profile
											</small>
										</h1>
									</div><!-- /.page-header -->
								
								<?php 
		if(isset($_GET['t_h_id']))
		{
		  
          $query= mysqli_query($con,"select * from taluka_head_register where t_h_id='{$_GET['t_h_id']}' ") ; 
         // $result = mysqli_query($con,$query);
          $row = mysqli_fetch_array($query); 
		//  extract($_POST);
		?>
								
								
								
								
									<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Taluka Head Name <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="t_h_name" placeholder="Enter Taluka Head Full Name" class="col-xs-10 col-sm-5"  title="Characters Only" value="<?php echo $row['t_h_name'];?>" required />
											</div>
									    </div>

									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Gender <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input name="t_h_gender" type="radio" value="Male"<?php if($row['t_h_gender']=="Male"){ echo "checked";}?> class="ace" />
															<span class="lbl"> Male </span>
															&nbsp;&nbsp;
												<input name="t_h_gender" type="radio" value="Female"<?php if($row['t_h_gender']=="Female"){ echo "checked";}?> class="ace" />
															<span class="lbl"> Female </span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Photo <span style="color:red">&nbsp;&nbsp;*</span></label>									

											<div class="col-sm-9">
												<img src="taluka_head/taluka_head_photo/<?php echo $row['t_h_photo'] ?>" height="120" width="110"  /><br><br>

												<input type="file" name="t_h_photo" id="form-field-2" placeholder="Select Photo For Uploading" class="col-xs-10 col-sm-5"  />
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile Number<span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="t_h_mno" maxlength="10" placeholder="Enter 10 Digit Mobile No. Start With 7,8,9" class="col-xs-10 col-sm-5"  pattern="[7-9]{1}[0-9]{9}" title="Only Number Start With 7,8,9" value="<?php echo $row['t_h_mno'];?>" required />
											</div>
									    </div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email Id<span style="color:red">&nbsp;&nbsp;*</span> </label>

											<div class="col-sm-9">
												<input type="email" id="username" name="t_h_email"  placeholder="xyz@email.com" class="col-xs-10 col-sm-5" onblur="return check_username();" value="<?php echo $row['t_h_email'];?>" required />
												
					<!--<div id="Info"></div>
					<span id="Loading"><img src="loader.gif" alt="" /></span>
					-->						</div>
											<!-- <div id="Info"></div>
					<span id="Loading"><img src="loader.gif" alt="" /></span> -->
									    </div>

									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> District <span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<input type="text" id="form-field-1" name="t_h_district" placeholder="Enter Taluka Head District" class="col-xs-10 col-sm-5" pattern="[A-Za-z\s]+" title="Characters Only" value="<?php echo $row['t_h_district'];?>" readonly />
											</div>
									    </div>



									    <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Select Taluka<span style="color:red">&nbsp;&nbsp;*</span></label>

											<div class="col-sm-9">
												<select name="t_h_taluka" class="c col-xs-10 col-sm-5" id="form-field-2" required >
													<option value="<?php echo $row['t_h_taluka']; ?>"><?php echo $row['t_h_taluka']; ?></option>
													<option>Select Taluka</option>
	                                            <?php
								                    // $con = mysqli_connect("localhost","root","root","drop") or die(mysqli_error());
	                                            	include "config.php";
								                    $query = mysqli_query($con,"select DISTINCT Name from district WHERE parent_id='1' AND taluka_id='".$row['t_h_district']."' ") or die(mysqli_error($con));
								                    while($row1=mysqli_fetch_assoc($query)){
								                        extract($row1);

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
												<textarea id="form-field-1" name="t_h_address" placeholder="Enter Taluka Head Address" class="col-xs-10 col-sm-5" value="<?php echo $row['t_h_address'];?>" required ><?php echo $row['t_h_address']; ?></textarea>
											</div>
									    </div>

										
										
										
										
								
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
							 extract($_POST);

	$name1=$_FILES['t_h_photo']['name'];
	$size=$_FILES['t_h_photo']['size'];
	$type=$_FILES['t_h_photo']['type'];

	$temp=$_FILES['t_h_photo']['tmp_name'];

		if($name1)
        {
                    $upload_dir = 'taluka_head/taluka_head_photo/';
                    $img=md5(time());
                    //$imgExt = strtolower(pathinfo($name1,PATHINFO_EXTENSION)); // get image extension
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                    $t_h_photo ="".$img.$name1;;
                    unlink($upload_dir.$row['t_h_photo']);
                    move_uploaded_file($temp,$upload_dir.$t_h_photo);
        }
        else
        {

                    $t_h_photo=$row['t_h_photo'];           
        }

        				

				$upquery= 'update taluka_head_register set
                          t_h_name="'.$_POST['t_h_name'].'" ,
                          t_h_gender="'.$_POST['t_h_gender'].'" ,                          
                          t_h_photo="'.$t_h_photo.'",
                          t_h_mno="'.$_POST['t_h_mno'].'" ,
                          t_h_email="'.$_POST['t_h_email'].'",                   
                          t_h_taluka="'.$_POST['t_h_taluka'].'",                      
                          t_h_address="'.$_POST['t_h_address'].'",                    
                          t_h_modification_timestamp=NOW()                    
                                                          
                          where t_h_id="'.$_GET['t_h_id'].'" ' ;

                          //reg_date="'.$_POST['reg_date'].'" ,
                          //valid_date="'.$_POST['valid_date'].'""

                          $upresult = mysqli_query($con,$upquery)or die(mysqli_error($con));
                          
                          if($upresult)
                          {
							 echo '<script type="text/javascript">';
							 echo " alert('BDO Information Updated Successfully !!! ');";
							 echo 'window.location.href = "view_t_head.php";'; 
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


