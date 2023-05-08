<?php
//$conn = mysql_connect("localhost","root","");
//mysql_select_db("db_bandhan",$conn);
include("config.php");
$filename = "product.csv";
$fp = fopen('php://output', 'w');

//$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='db_bandhan' AND TABLE_NAME='shg_product_detail'";
//$result = mysqli_query($con,$query);
//while ($row = mysqli_fetch_row($result)) {
//	$header[] = $row[0];
//}	
$title=array("product_name","product_category","img","contact_person","contact_no");

$header = $title;
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT product_name,product_category,img,contact_person,contact_no FROM shg_product_detail where shg_id='".$_GET['shg_id']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>