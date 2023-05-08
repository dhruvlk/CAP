<?php
session_start();
@ob_start();
//echo $_SESSION['org_id'];
//include("config.php");
if(!isset($_SESSION['id']))
{
	echo "<script>";
	echo "window.location.href='index.php';";
	echo "</script>";
}
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
