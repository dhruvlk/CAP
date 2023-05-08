
<?php

// Inialize session
session_start();

// Delete certain session
//unset($_SESSION['uname']);
unset($_SESSION['org_id']);
unset($_SESSION['org_name']);
unset($_SESSION['org_auth_name']);
unset($_SESSION['org_designation']);
unset($_SESSION['org_department']);
unset($_SESSION['org_mob_no']);
unset($_SESSION['org_phone']);
unset($_SESSION['org_email']);
unset($_SESSION['org_address']);
unset($_SESSION['org_user_name']);
// Delete all session variables
//session_destroy();

// Jump to login page
echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "index.php";';
echo '</script>'; 
?>
