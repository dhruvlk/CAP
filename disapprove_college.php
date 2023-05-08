<?php
	include "config.php";
	if(isset($_GET['c_id']))
	{
		$sql='update college_reg set c_approve_status="Disapproved" where c_id="'.$_GET['c_id'].'"';
		$result=mysqli_query($con,$sql)or die(mysqli_error($con));
								
		if($result)
		{
		    echo "<script>";
			echo "alert('College Disapproved Successfully');";
			echo "window.location.href='new_registered_c.php';";
			echo "</script>";
		}
		else
		{
			echo "<script>";
			echo "alert('Error! College Not Disapproved');";
			echo "window.location.href='new_registered_c.php';";
			echo "</script>";
		}
	}
?>