<?php
	include "config.php";
	if(isset($_GET['c_id']))
	{
		$sql='update college_reg set c_approve_status="Approved" where c_id="'.$_GET['c_id'].'"';

		$result=mysqli_query($con,$sql)or die(mysqli_error($con));

$res='select c_email from college_reg where c_id="'.$_GET['c_id'].'"';
$reu=mysqli_query($con,$res)or die(mysqli_error($con));
$row=mysqli_fetch_array($reu);
$email=$row['c_email'];

$to = "admin@gmail.com";
$subject = "Mail From website";
$txt ="Your college is approved";
$head = "From: ".$email."" . "\r\n".
"CC: somebodsyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$head);
    echo "mail send successfully";
		    echo "<script>";
		    echo "alert('mail send successfully');";
			echo "alert('College Approved Successfully');";
			echo "window.location.href='new_registered_c.php';";
			echo "</script>";
		}
		else
		{
			echo "<script>";
			echo "alert('Error! College Not Approved');";
			echo "window.location.href='new_registered_c.php';";
			echo "</script>";
		}
	}
?>