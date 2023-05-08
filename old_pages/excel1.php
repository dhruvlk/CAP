<?php
session_start();
//$conn = mysql_connect("localhost","root","");
//mysql_select_db("db_bandhan",$conn);
include("config.php");
$filename = "shg_profile.csv";
$fp = fopen('php://output', 'w');

//$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='db_bandhan' AND TABLE_NAME='tbl_add_shg'";
//$result = mysqli_query($con,$query);
//while ($row = mysqli_fetch_row($result)) {
//	$header[] = $row[0];
//}	
$title=array("shg_group_name","total_member","shg_formation_date","shg_amount_of_saving","shg_district","shg_taluka","shg_village_name","shg_bank_linkage","shg_market_linkage","shg_current_activity","skill_training","past_activity","intrested_activity","basic_concept","financial_literacy","functional_literacy","business_development");
$header = $title;
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "select shg_group_name, total_member,shg_formation_date,shg_amount_of_saving,shg_district,shg_taluka,shg_village_name,shg_bank_linkage,shg_market_linkage,shg_current_activity,skill_training,past_activity,intrested_activity,basic_concept,financial_literacy,functional_literacy,business_development from tbl_add_shg where shg_id='".$_GET['shg_id']."' and org_id='".$_SESSION['org_id']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>