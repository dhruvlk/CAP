
<?php

// Inialize session
session_start();

// Delete certain session
//unset($_SESSION['uname']);
unset($_SESSION['s_id']);
unset($_SESSION['s_gender']);
unset($_SESSION['s_caste']);
unset($_SESSION['s_per']);
unset($_SESSION['s_pass_year']);
unset($_SESSION['s_clg_name']);
unset($_SESSION['s_uni_name']);
unset($_SESSION['s_mob_no']);
unset($_SESSION['s_email']);
unset($_SESSION['s_dept_name']);
unset($_SESSION['s_state']);
unset($_SESSION['s_district']);
unset($_SESSION['s_taluka']);
unset($_SESSION['s_address']);
unset($_SESSION['s_state']);
unset($_SESSION['s_approve_status']);
unset($_SESSION['s_creation_time_stamp']);


// Delete all session variables
//session_destroy();

// Jump to login page
echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "index.php";';
echo '</script>'; 
?>
