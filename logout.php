
<?php

// Inialize session
session_start();

// Delete certain session
//unset($_SESSION['uname']);
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['a_designation']);
unset($_SESSION['a_email']);

// Delete all session variables
//session_destroy();

// Jump to login page
echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "index.php";';
echo '</script>'; 
?>
