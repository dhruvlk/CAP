
<?php

// Inialize session
session_start();

// Delete certain session
//unset($_SESSION['uname']);
unset($_SESSION['c_id']);
unset($_SESSION['c_name']);
unset($_SESSION['c_code']);
unset($_SESSION['c_designation']);
unset($_SESSION['c_mob_no']);
unset($_SESSION['c_phone']);
unset($_SESSION['c_email']);
unset($_SESSION['c_district']);
unset($_SESSION['c_taluka']);
unset($_SESSION['c_address']);
unset($_SESSION['c_approve_status']);
unset($_SESSION['c_creation_timestamp']);


// Delete all session variables
//session_destroy();

// Jump to login page
echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "index.php";';
echo '</script>'; 
?>
