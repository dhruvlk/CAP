<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Student Profile - Dashboard</title>

		

		<?php
		
		include "header.php";
		
		?>
		
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
								Student
							</li>
							<li class="active">Profile</li>
						</ul><!-- /.breadcrumb -->

						<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
						
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
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off"/>
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
								Student
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Profile
								</small>
							</h1>
						</div><!-- /.page-header -->

	
								
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->				
<?php
  if(isset($_GET['s_id']))
  {
  		  include "config.php";
          $query= mysqli_query($con,"select * from student_reg where s_id='".$_GET['s_id']."'") ;
         // $result = mysqli_query($con,$query);
          $row = mysqli_fetch_array($query);
  
  
?>

								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >
									<!-- <h4>Student Details</h4><br> -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Gender </label>
										<div class="col-sm-9">
											
											<select name="s_gender" class="col-xs-10 col-sm-5" required >
                                                <option value="<?php echo $row['s_gender']?>" ><?php echo $row['s_gender']?></option>
                                                    <option value="">-------------Select-------------</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <!-- <option value="Female">Ms</option> -->
                                                     
                                            </select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Caste </label>
										<div class="col-sm-9">
											
											<select name="s_caste" class="col-xs-10 col-sm-5" required >
                                                <option value="<?php echo $row['s_caste']?>" ><?php echo $row['s_caste']?></option>
                                                    <option value="">-------------Select Caste-------------</option>
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
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Student Name</label>

										<div class="col-sm-9">
											<input type="text" name="s_name" id="form-field-2" placeholder="Enter Student Name" class="col-xs-10 col-sm-5" value="<?php echo $row['s_name']?>"  required />
											<!-- <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Enter Report Name Here</span>
											</span> -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Enrollment No</label>

										<div class="col-sm-9">
											<input type="text" name="s_enroll_no" id="form-field-2" placeholder="Enter Student Enrollment No" class="col-xs-10 col-sm-5" maxlength="10" value="<?php echo $row['s_enroll_no']?>"  required />
											<!-- <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Enter Report Name Here</span>
											</span> -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Percentage</label>

										<div class="col-sm-9">
											<input type="text" name="s_per" id="form-field-2" placeholder="Enter Student Percentage" class="col-xs-10 col-sm-5" value="<?php echo $row['s_per']?>"  required />
											<!-- <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Enter Report Name Here</span>
											</span> -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Passing Year</label>

										<div class="col-sm-9">
											<input type="text" name="s_pass_year" id="form-field-2" placeholder="Enter Passing Year" class="col-xs-10 col-sm-5" value="<?php echo $row['s_pass_year']?>"  required />							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">College Name</label>

										<div class="col-sm-9">
											<input type="text" name="s_clg_name" id="form-field-2" placeholder="Enter Collage Name" class="col-xs-10 col-sm-5" value="<?php echo $row['s_clg_name']?>" required />							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">University Name</label>

										<div class="col-sm-9">
											<input type="text" name="s_uni_name" id="form-field-2" placeholder="Enter University Name" class="col-xs-10 col-sm-5" value="<?php echo $row['s_uni_name']?>" required />							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Mobile No</label>

										<div class="col-sm-9">
											<input type="text" name="s_mob_no" id="form-field-2" placeholder="Enter Mobile Name" class="col-xs-10 col-sm-5" value="<?php echo $row['s_mob_no']?>"  required />							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Email</label>

										<div class="col-sm-9">
											<input type="text" name="s_email" id="form-field-2" placeholder="Enter Mobile Name" class="col-xs-10 col-sm-5" value="<?php echo $row['s_email']?>"  readonly />							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Department</label>

										<div class="col-sm-9">
											<select name="s_dept_name" class="col-xs-10 col-sm-5" required >
                                                <option value="<?php echo $row['s_dept_name']?>" ><?php echo $row['s_dept_name']?></option>
                                                    <option value="">-------------Select-------------</option>
                                                    <?php
                                                     $select1=mysqli_query($con,"select Distinct dept_name from dept_reg ") or die(mysqli_error($con));
													 	 while($sele1=mysqli_fetch_array($select1))
													 	{
														echo"<option value=\"{$sele1['dept_name']}\">{$sele1['dept_name']}</option>";
														}
													?>	 
                                                     
                                            </select>							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">State</label>

										<div class="col-sm-9">
											<select name="s_state" class="col-xs-10 col-sm-5" required >
                                                <option value="<?php echo $row['s_state']?>" ><?php echo $row['s_state']?></option>
                                                    <option value="">-------------Select State-------------</option>
                                                    <?php
                                                     $selects=mysqli_query($con,"select Distinct state from statecity ") or die(mysqli_error($con));
													 	 while($seles=mysqli_fetch_array($selects))
													 	{
														echo"<option value=\"{$seles['state']}\">{$seles['state']}</option>";
														}
													?>	 
                                                     
                                            </select>							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">District</label>

										<div class="col-sm-9">
											<select name="s_district" class="col-xs-10 col-sm-5" id="district_vt" required >
                                                <option value="<?php echo $row['s_district']?>" ><?php echo $row['s_district']?></option>
                                                    <option value="">-------------Select District-------------</option>
                                                    <?php
                                                     $selects=mysqli_query($con,"select Distinct Name from district WHERE parent_id='0' ") or die(mysqli_error($con));
													 	 while($seles=mysqli_fetch_array($selects))
													 	{
														echo"<option value=\"{$seles['Name']}\">{$seles['Name']}</option>";
														}
													?>	 
                                                     
                                            </select>							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Taluka</label>

										<div class="col-sm-9">
											<select name="s_taluka" class="col-xs-10 col-sm-5" id="taluka_vt" required >
                                                <option value="<?php echo $row['s_taluka']?>" ><?php echo $row['s_taluka']?></option>
                                                    <option value="">-------------Select Taluka-------------</option>
                                                    
                                                     
                                            </select>							
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Address</label>

										<div class="col-sm-9">
											<textarea name="s_address" id="form-field-2" placeholder="Enter Address of Student" class="col-xs-10 col-sm-5"  required ><?php echo $row['s_address']?></textarea>						
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Student Photo </label>

										<div class="col-sm-9">
											<!-- <input type="file" name="ownerphoto" id="form-field-2" placeholder="Select Photo For Uploading" class="col-xs-10 col-sm-5" required /> -->

											<?php 
											if($row['s_photo']!='')
											{ ?>
												<img src="student_photo/<?php echo $row['s_photo'] ?>" height="120" width="110"  /><br><br>	
											<?php	
											} 
											else
											{
											?>										
											<img src="assets/images/avatars/profile-pic.jpg" height="120" width="110"  /><br><br>
											<?php
											}
											?>
											<input type="file" name="s_photo" id="form-field-2" placeholder="Select Photo For Uploading" class="col-xs-10 col-sm-5"  />


											<!-- <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Select Report</span>
											</span> -->
											<br><br>
										</div>
										
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-success" type="submit" name="btn-update" >
												<i class="ace-icon fa fa-check bigger-110"></i>
												Update
											</button>

											<a href="profile.php">
											<button class="btn btn-danger" type="button" name="cancel" >
												<i class="ace-icon fa fa-check bigger-110"></i>
												Close
											</button>
											</a>

											<!-- &nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button> -->
										</div>
									
									</div>
									
									
								</form>
<?php

}

?>
<?php

include "config.php";

if(isset($_POST['btn-update']))
{
    extract($_POST);
	$name1=$_FILES['s_photo']['name'];
	$size=$_FILES['s_photo']['size'];
	$type=$_FILES['s_photo']['type'];

	$temp=$_FILES['s_photo']['tmp_name'];

		if($name1)
        {
                    $upload_dir = 'student_photo/';
                    $imgExt = strtolower(pathinfo($name1,PATHINFO_EXTENSION)); // get image extension
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                    $s_photo = rand(1000,1000000).".".$imgExt;
                    unlink($upload_dir.$row['s_photo']);
                    move_uploaded_file($temp,$upload_dir.$s_photo);
        }
        else
        {

                    $s_photo=$row['s_photo'];           
        }



				$upquery= 'update student_reg set
                          s_gender="'.$_POST['s_gender'].'" ,
                          s_caste="'.$_POST['s_caste'].'" ,
                          s_name="'.$_POST['s_name'].'" ,
                          s_enroll_no="'.$_POST['s_enroll_no'].'" ,
                          s_per="'.$_POST['s_per'].'" ,
                          s_pass_year="'.$_POST['s_pass_year'].'" ,
                          s_clg_name="'.$_POST['s_clg_name'].'" ,
                          s_uni_name="'.$_POST['s_uni_name'].'" ,
                          s_mob_no="'.$_POST['s_mob_no'].'" ,
                          s_email="'.$_POST['s_email'].'" ,
                          s_dept_name="'.$_POST['s_dept_name'].'" ,
                          s_state="'.$_POST['s_state'].'" ,
                          s_district="'.$_POST['s_district'].'" ,
                          s_taluka="'.$_POST['s_taluka'].'" ,
                          s_address="'.$_POST['s_address'].'" ,                         
                          s_photo="'.$s_photo.'"
                                                                                      
                          where s_id="'.$_GET['s_id'].'" ' ;

                          //reg_date="'.$_POST['reg_date'].'" ,
                          //valid_date="'.$_POST['valid_date'].'""

                          $upresult = mysqli_query($con,$upquery);
                          if($upresult)
							{
							    echo "<script>";
								echo "alert('Student Profile Updated Successfully');";
								echo "window.location.href='profile.php';";
								echo "</script>";
							}
							else
							{
								echo "<script>";
								echo "alert('Error! Student Profile Not Updated');";
								echo "window.location.href='profile.php';";
								echo "</script>";
							}
}




?>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
						<br>
						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php

include ('profilefooter.php');

?>
	</body>
</html>
