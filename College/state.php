

<?php

 include "config.php"; 
 //echo $_POST["c_district"];

if(isset($_POST["c_district"]))
{
    // Capture selected country
   // $type= $_POST["c"];
	 $str1 = $_POST['c_district'];	 

	// echo $str1;
	
	   $select=mysqli_query($con,"select * from district where parent_id='1' AND taluka_id='".$str1."'") or die(mysqli_error($con));
	   echo "<option>-------Select Taluka------</option>";
	 while($sele=mysqli_fetch_array($select))
	{
	echo"<option value=\"{$sele['Name']}\">{$sele['Name']}</option>";

	}	 
		
}



?>
