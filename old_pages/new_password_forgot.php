<?php 
include("config.php");
if($_POST['password']!=""):
    $pass_encrypt=md5(mysqli_real_escape_string($con,$_POST['password']));
    $user_id=mysqli_real_escape_string($con,$_POST['id']);
    $fetch=mysqli_query($con,"UPDATE `tbl_organization` SET `org_password` = '$pass_encrypt',`active_code`='' WHERE id='$user_id'");
    if($fetch): echo 1;  
    else : echo 0;
    endif;
else :
    header("Location:index.php");
endif;
?>
