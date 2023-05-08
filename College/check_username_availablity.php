<?php
include('config.php');
if($_REQUEST)
{
	$username 	= $_REQUEST['username'];
	$query = "select * from taluka_head_register where t_h_email = '".strtolower($username)."'";
	$results = mysqli_query($con,$query) or die('ok');
	
	if(mysqli_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error"> &nbsp; &nbsp; &nbsp;<b>Already Taken</b></div>';
	}
	else
	{
		echo '<div id="Success">&nbsp; &nbsp;&nbsp;<b>Available</b></div>';
	}
	
}?>