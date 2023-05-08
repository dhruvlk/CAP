<form method="post">
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="stu"; // Database name 
$tbl_name="table1"; // Table name
$tbl_name2="table2"; // Table name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
echo
// Count table rows 
$count=mysql_num_rows($result);
?>
<table>
<?php
$i = 0; 
while($rows=mysql_fetch_array($result)){ 
?> 
<tr> 
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>" /></td>

<!--<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="y" /></td>-->
<td align="center"><input name="name[]" type="text" id="name" value="<?php echo $rows['name'];?>"></td>
<td align="center"><input name="lastname[]" type="text" id="lastname" value="<?php echo $rows['lastname'];?>"></td>
<td align="center"><input name="email[]" type="text" id="email" value="<?php echo $rows['email'];?>"></td>
</tr>

<?php
}
?>
</table>
<input type="submit" name="Submit" value="Submit">
</form>
<?php
if(isset($_POST['Submit']))
{
extract($_POST);
// Get values from form 
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

// Check if button name "Submit" is active, do this 
if($checkbox){
foreach($_POST['checkbox'] as $i) { 
$sql1="INSERT INTO $tbl_name2 (name, lastname, email)VALUES('{$_POST['name'][$i]}', '{$_POST['lastname'][$i]}', '{$_POST['email'][$i]}')";
$result1=mysql_query($sql1);
if($result1)
{
echo "<script>";
echo "alert('Inserted');";
echo "</script>";
}
}
}
}