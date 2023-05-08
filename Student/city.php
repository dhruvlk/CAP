<?php
include "config.php"; 
if(isset($_POST["city_name"])){

	  $city = $_POST['city_name'];
	
?>
		<option value="">--Select Main Area--</option>
<?php	
$main="select * from tbl_main_area where fld_city_id='".$city."' order by fld_main_area_name asc";
	   $select=mysqli_query($connect,$main) or die(mysqli_error($connect));
	 while($sele=mysqli_fetch_array($select))
	{
?>		
			
				<option value="<?php echo $sele['fld_main_area_id']; ?>"><?php echo $sele['fld_main_area_name']; ?></option>
<?php			
	}	 
}

?>


<?php
$con=mysqli_connect("localhost","root","","location") or die(mysqli_error($con));

	if(isset($_POST["state"]))

	{
		$str = $_POST['state'];


		$select1=mysqli_query($con,"select * from location where parent_id='".$str."' and location_type='2' ") or die(mysqli_error($con));
?>


		<option value="">-- Select City--</option>

		<?php

			while($row=mysqli_fetch_array($select1))
			{

				
		?>

		<option value="<?php echo $row['location_id'];?>"><?php echo $row['name'];?></option>

		<?php

		}	 
		
	}
?>