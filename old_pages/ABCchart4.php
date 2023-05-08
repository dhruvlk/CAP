<?php 
//include('config.php');
//session_start();
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div style="float:right">
<form action="" method="POST">
    <select name="myselect" id="myselect" onChange="this.form.submit()">
        <option>---select----</option>
		<option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
    </select>
</form>
</div>
<?php
if(isset($_POST['myselect']))
{
$y=$_POST['myselect'];
//echo $_POST['myselect'];							
$A1="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)=1 and shg_category='A'";
$A_result1=mysqli_query($con,$A1)or die(mysqli_error($con));
$A_count1=mysqli_num_rows($A_result1);
//echo $A_count1."<br>";

$A2="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)=2 and shg_category='A'";
$A_result2=mysqli_query($con,$A2)or die(mysqli_error($con));
$A_count2=mysqli_num_rows($A_result2);
//echo $A_count2."<br>";

$A3="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='3' and shg_category='A'";
$A_result3=mysqli_query($con,$A3)or die(mysqli_error($con));
$A_count3=mysqli_num_rows($A_result3);
//echo $A_count3."<br>";

$A4="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='4' and shg_category='A'";
$A_result4=mysqli_query($con,$A4)or die(mysqli_error($con));
$A_count4=mysqli_num_rows($A_result4);
//echo $A_count4."<br>";

$A5="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='5' and shg_category='A'";
$A_result5=mysqli_query($con,$A5)or die(mysqli_error($con));
$A_count5=mysqli_num_rows($A_result5);
//echo $A_count5."<br>";

$A6="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='6' and shg_category='A'";
$A_result6=mysqli_query($con,$A6)or die(mysqli_error($con));
$A_count6=mysqli_num_rows($A_result6);
//echo $A_count6."<br>";
$A7="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='7' and shg_category='A'";
$A_result7=mysqli_query($con,$A7)or die(mysqli_error($con));
$A_count7=mysqli_num_rows($A_result7);
//echo $A_count7."<br>";
$A8="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='8' and shg_category='A'";
$A_result8=mysqli_query($con,$A8)or die(mysqli_error($con));
$A_count8=mysqli_num_rows($A_result8);
//echo $A_count8."<br>";

$A9="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='9' and shg_category='A'";
$A_result9=mysqli_query($con,$A9)or die(mysqli_error($con));
$A_count9=mysqli_num_rows($A_result9);
//echo $A_count9."<br>";

$A10="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='10' and shg_category='A'";
$A_result10=mysqli_query($con,$A10)or die(mysqli_error($con));
$A_count10=mysqli_num_rows($A_result10);
//echo $A_count10."<br>";

$A11="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='11' and shg_category='A'";
$A_result11=mysqli_query($con,$A11)or die(mysqli_error($con));
$A_count11=mysqli_num_rows($A_result11);
//echo $A_count11."<br>";

$A12="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='12' and shg_category='A'";
$A_result12=mysqli_query($con,$A12)or die(mysqli_error($con));
$A_count12=mysqli_num_rows($A_result12);
//echo $A_count12."<br>";
?>


<?php
$B1="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)=1 and shg_category='B'";
$B_result1=mysqli_query($con,$B1)or die(mysqli_error($con));
$B_count1=mysqli_num_rows($B_result1);
//echo $A_count1."<br>";

$B2="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)=2 and shg_category='B'";
$B_result2=mysqli_query($con,$B2)or die(mysqli_error($con));
$B_count2=mysqli_num_rows($B_result2);
//echo $A_count2."<br>";

$B3="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='3' and shg_category='B'";
$B_result3=mysqli_query($con,$B3)or die(mysqli_error($con));
$B_count3=mysqli_num_rows($B_result3);
//echo $A_count3."<br>";

$B4="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='4' and shg_category='B'";
$B_result4=mysqli_query($con,$B4)or die(mysqli_error($con));
$B_count4=mysqli_num_rows($B_result4);
//echo $A_count4."<br>";

$B5="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='5' and shg_category='B'";
$B_result5=mysqli_query($con,$B5)or die(mysqli_error($con));
$B_count5=mysqli_num_rows($B_result5);
//echo $A_count5."<br>";

$B6="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='6' and shg_category='B'";
$B_result6=mysqli_query($con,$B6)or die(mysqli_error($con));
$B_count6=mysqli_num_rows($B_result6);
//echo $A_count6."<br>";
$B7="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='7' and shg_category='B'";
$B_result7=mysqli_query($con,$B7)or die(mysqli_error($con));
$B_count7=mysqli_num_rows($B_result7);
//echo $A_count7."<br>";
$B8="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='8' and shg_category='B'";
$B_result8=mysqli_query($con,$B8)or die(mysqli_error($con));
$B_count8=mysqli_num_rows($B_result8);
//echo $A_count8."<br>";

$B9="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='9' and shg_category='B'";
$B_result9=mysqli_query($con,$B9)or die(mysqli_error($con));
$B_count9=mysqli_num_rows($B_result9);
//echo $A_count9."<br>";

$B10="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='10' and shg_category='B'";
$B_result10=mysqli_query($con,$B10)or die(mysqli_error($con));
$B_count10=mysqli_num_rows($B_result10);
//echo $A_count10."<br>";

$B11="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='11' and shg_category='B'";
$B_result11=mysqli_query($con,$B11)or die(mysqli_error($con));
$B_count11=mysqli_num_rows($B_result11);
//echo $A_count11."<br>";

$B12="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='12' and shg_category='B'";
$B_result12=mysqli_query($con,$B12)or die(mysqli_error($con));
$B_count12=mysqli_num_rows($B_result12);
//echo $A_count12."<br>";
?>
<?php
$C1="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)=1 and shg_category='C'";
$C_result1=mysqli_query($con,$C1)or die(mysqli_error($con));
$C_count1=mysqli_num_rows($C_result1);
//echo $A_count1."<br>";


$C2="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)=2 and shg_category='C'";
$C_result2=mysqli_query($con,$C2)or die(mysqli_error($con));
$C_count2=mysqli_num_rows($C_result2);
//echo $A_count2."<br>";

$C3="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='3' and shg_category='C'";
$C_result3=mysqli_query($con,$C3)or die(mysqli_error($con));
$C_count3=mysqli_num_rows($C_result3);
//echo $A_count3."<br>";

$C4="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='4' and shg_category='C'";
$C_result4=mysqli_query($con,$C4)or die(mysqli_error($con));
$C_count4=mysqli_num_rows($C_result4);
//echo $A_count4."<br>";

$C5="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='5' and shg_category='C'";
$C_result5=mysqli_query($con,$C5)or die(mysqli_error($con));
$C_count5=mysqli_num_rows($C_result5);
//echo $A_count5."<br>";

$C6="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='6' and shg_category='C'";
$C_result6=mysqli_query($con,$C6)or die(mysqli_error($con));
$C_count6=mysqli_num_rows($C_result6);
//echo $A_count6."<br>";
$C7="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='7' and shg_category='C'";
$C_result7=mysqli_query($con,$C7)or die(mysqli_error($con));
$C_count7=mysqli_num_rows($C_result7);
//echo $A_count7."<br>";
$C8="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='8' and shg_category='C'";
$C_result8=mysqli_query($con,$C8)or die(mysqli_error($con));
$C_count8=mysqli_num_rows($C_result8);
//echo $A_count8."<br>";

$C9="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='9' and shg_category='C'";
$C_result9=mysqli_query($con,$C9)or die(mysqli_error($con));
$C_count9=mysqli_num_rows($C_result9);
//echo $A_count9."<br>";

$C10="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='10' and shg_category='C'";
$C_result10=mysqli_query($con,$C10)or die(mysqli_error($con));
$C_count10=mysqli_num_rows($C_result10);
//echo $A_count10."<br>";

$C11="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='11' and shg_category='C'";
$C_result11=mysqli_query($con,$C11)or die(mysqli_error($con));
$C_count11=mysqli_num_rows($C_result11);
//echo $A_count11."<br>";

$C12="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$_POST['myselect']."' and MONTH(creation_timestamp)='12' and shg_category='C'";
$C_result12=mysqli_query($con,$C12)or die(mysqli_error($con));
$C_count12=mysqli_num_rows($C_result12);
//echo $A_count12."<br>";
?>

							<div id="container10" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
							<?php
}
else
{


//$m= date('m');
								//echo "<br>";
								$y=date('Y');
$A1="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=1 and shg_category='A'";
$A_result1=mysqli_query($con,$A1)or die(mysqli_error($con));
$A_count1=mysqli_num_rows($A_result1);
//echo $A_count1."<br>";

$A2="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=2 and shg_category='A'";
$A_result2=mysqli_query($con,$A2)or die(mysqli_error($con));
$A_count2=mysqli_num_rows($A_result2);
//echo $A_count2."<br>";

$A3="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='3' and shg_category='A'";
$A_result3=mysqli_query($con,$A3)or die(mysqli_error($con));
$A_count3=mysqli_num_rows($A_result3);
//echo $A_count3."<br>";

$A4="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='4' and shg_category='A'";
$A_result4=mysqli_query($con,$A4)or die(mysqli_error($con));
$A_count4=mysqli_num_rows($A_result4);
//echo $A_count4."<br>";

$A5="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='5' and shg_category='A'";
$A_result5=mysqli_query($con,$A5)or die(mysqli_error($con));
$A_count5=mysqli_num_rows($A_result5);
//echo $A_count5."<br>";

$A6="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='6' and shg_category='A'";
$A_result6=mysqli_query($con,$A6)or die(mysqli_error($con));
$A_count6=mysqli_num_rows($A_result6);
//echo $A_count6."<br>";
$A7="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='7' and shg_category='A'";
$A_result7=mysqli_query($con,$A7)or die(mysqli_error($con));
$A_count7=mysqli_num_rows($A_result7);
//echo $A_count7."<br>";
$A8="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='8' and shg_category='A'";
$A_result8=mysqli_query($con,$A8)or die(mysqli_error($con));
$A_count8=mysqli_num_rows($A_result8);
//echo $A_count8."<br>";

$A9="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='9' and shg_category='A'";
$A_result9=mysqli_query($con,$A9)or die(mysqli_error($con));
$A_count9=mysqli_num_rows($A_result9);
//echo $A_count9."<br>";

$A10="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='10' and shg_category='A'";
$A_result10=mysqli_query($con,$A10)or die(mysqli_error($con));
$A_count10=mysqli_num_rows($A_result10);
//echo $A_count10."<br>";

$A11="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='11' and shg_category='A'";
$A_result11=mysqli_query($con,$A11)or die(mysqli_error($con));
$A_count11=mysqli_num_rows($A_result11);
//echo $A_count11."<br>";

$A12="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='12' and shg_category='A'";
$A_result12=mysqli_query($con,$A12)or die(mysqli_error($con));
$A_count12=mysqli_num_rows($A_result12);
//echo $A_count12."<br>";
?>


<?php
$B1="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=1 and shg_category='B'";
$B_result1=mysqli_query($con,$B1)or die(mysqli_error($con));
$B_count1=mysqli_num_rows($B_result1);
//echo $A_count1."<br>";

$B2="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=2 and shg_category='B'";
$B_result2=mysqli_query($con,$B2)or die(mysqli_error($con));
$B_count2=mysqli_num_rows($B_result2);
//echo $A_count2."<br>";

$B3="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='3' and shg_category='B'";
$B_result3=mysqli_query($con,$B3)or die(mysqli_error($con));
$B_count3=mysqli_num_rows($B_result3);
//echo $A_count3."<br>";

$B4="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='4' and shg_category='B'";
$B_result4=mysqli_query($con,$B4)or die(mysqli_error($con));
$B_count4=mysqli_num_rows($B_result4);
//echo $A_count4."<br>";

$B5="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='5' and shg_category='B'";
$B_result5=mysqli_query($con,$B5)or die(mysqli_error($con));
$B_count5=mysqli_num_rows($B_result5);
//echo $A_count5."<br>";

$B6="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='6' and shg_category='B'";
$B_result6=mysqli_query($con,$B6)or die(mysqli_error($con));
$B_count6=mysqli_num_rows($B_result6);
//echo $A_count6."<br>";
$B7="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='7' and shg_category='B'";
$B_result7=mysqli_query($con,$B7)or die(mysqli_error($con));
$B_count7=mysqli_num_rows($B_result7);
//echo $A_count7."<br>";
$B8="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='8' and shg_category='B'";
$B_result8=mysqli_query($con,$B8)or die(mysqli_error($con));
$B_count8=mysqli_num_rows($B_result8);
//echo $A_count8."<br>";

$B9="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='9' and shg_category='B'";
$B_result9=mysqli_query($con,$B9)or die(mysqli_error($con));
$B_count9=mysqli_num_rows($B_result9);
//echo $A_count9."<br>";

$B10="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='10' and shg_category='B'";
$B_result10=mysqli_query($con,$B10)or die(mysqli_error($con));
$B_count10=mysqli_num_rows($B_result10);
//echo $A_count10."<br>";

$B11="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='11' and shg_category='B'";
$B_result11=mysqli_query($con,$B11)or die(mysqli_error($con));
$B_count11=mysqli_num_rows($B_result11);
//echo $A_count11."<br>";

$B12="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='12' and shg_category='B'";
$B_result12=mysqli_query($con,$B12)or die(mysqli_error($con));
$B_count12=mysqli_num_rows($B_result12);
//echo $A_count12."<br>";
?>
<?php
$C1="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=1 and shg_category='C'";
$C_result1=mysqli_query($con,$C1)or die(mysqli_error($con));
$C_count1=mysqli_num_rows($C_result1);
//echo $A_count1."<br>";


$C2="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=2 and shg_category='C'";
$C_result2=mysqli_query($con,$C2)or die(mysqli_error($con));
$C_count2=mysqli_num_rows($C_result2);
//echo $A_count2."<br>";

$C3="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='3' and shg_category='C'";
$C_result3=mysqli_query($con,$C3)or die(mysqli_error($con));
$C_count3=mysqli_num_rows($C_result3);
//echo $A_count3."<br>";

$C4="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='4' and shg_category='C'";
$C_result4=mysqli_query($con,$C4)or die(mysqli_error($con));
$C_count4=mysqli_num_rows($C_result4);
//echo $A_count4."<br>";

$C5="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='5' and shg_category='C'";
$C_result5=mysqli_query($con,$C5)or die(mysqli_error($con));
$C_count5=mysqli_num_rows($C_result5);
//echo $A_count5."<br>";

$C6="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='6' and shg_category='C'";
$C_result6=mysqli_query($con,$C6)or die(mysqli_error($con));
$C_count6=mysqli_num_rows($C_result6);
//echo $A_count6."<br>";
$C7="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='7' and shg_category='C'";
$C_result7=mysqli_query($con,$C7)or die(mysqli_error($con));
$C_count7=mysqli_num_rows($C_result7);
//echo $A_count7."<br>";
$C8="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='8' and shg_category='C'";
$C_result8=mysqli_query($con,$C8)or die(mysqli_error($con));
$C_count8=mysqli_num_rows($C_result8);
//echo $A_count8."<br>";

$C9="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='9' and shg_category='C'";
$C_result9=mysqli_query($con,$C9)or die(mysqli_error($con));
$C_count9=mysqli_num_rows($C_result9);
//echo $A_count9."<br>";

$C10="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='10' and shg_category='C'";
$C_result10=mysqli_query($con,$C10)or die(mysqli_error($con));
$C_count10=mysqli_num_rows($C_result10);
//echo $A_count10."<br>";

$C11="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='11' and shg_category='C'";
$C_result11=mysqli_query($con,$C11)or die(mysqli_error($con));
$C_count11=mysqli_num_rows($C_result11);
//echo $A_count11."<br>";

$C12="select * from shg_monthly_update where enabler_id='".$_GET['id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)='12' and shg_category='C'";
$C_result12=mysqli_query($con,$C12)or die(mysqli_error($con));
$C_count12=mysqli_num_rows($C_result12);
//echo $A_count12."<br>";


?>
<div id="container10" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
<?php

}
?>

<?php
$dataPoints1 = array(
	
	array("y" => $A_count1, "url"=> "A_category_shg.php?year=".$y."&month=1"."&id=".$_GET['id']),
	array("y" => $A_count2, "url"=> "A_category_shg.php?year=".$y."&month=2"."&id=".$_GET['id']),
	array("y" => $A_count3, "url"=> "A_category_shg.php?year=".$y."&month=3"."&id=".$_GET['id']),
	array("y" => $A_count4, "url"=> "A_category_shg.php?year=".$y."&month=4"."&id=".$_GET['id']),
	array("y" => $A_count5, "url"=> "A_category_shg.php?year=".$y."&month=5"."&id=".$_GET['id']),
	array("y" => $A_count6, "url"=> "A_category_shg.php?year=".$y."&month=6"."&id=".$_GET['id']),
	array("y" => $A_count7, "url"=> "A_category_shg.php?year=".$y."&month=7"."&id=".$_GET['id']),
	array("y" => $A_count8, "url"=> "A_category_shg.php?year=".$y."&month=8"."&id=".$_GET['id']),
	array("y" => $A_count9, "url"=> "A_category_shg.php?year=".$y."&month=9"."&id=".$_GET['id']),
	array("y" => $A_count10, "url"=> "A_category_shg.php?year=".$y."&month=10"."&id=".$_GET['id']),
	array("y" => $A_count11, "url"=> "A_category_shg.php?year=".$y."&month=11"."&id=".$_GET['id']),
	array("y" => $A_count12, "url"=> "A_category_shg.php?year=".$y."&month=12"."&id=".$_GET['id']),

						);
							//print_r($dataPoints1);
	
	$dataPoints2 = array(
	array("y" => $B_count1, "url"=> "B_category_shg.php?year=".$y."&month=1"."&id=".$_GET['id']),
	array("y" => $B_count2, "url"=> "B_category_shg.php?year=".$y."&month=2"."&id=".$_GET['id']),
	array("y" => $B_count3, "url"=> "B_category_shg.php?year=".$y."&month=3"."&id=".$_GET['id']),
	array("y" => $B_count4, "url"=> "B_category_shg.php?year=".$y."&month=4"."&id=".$_GET['id']),
	array("y" => $B_count5, "url"=> "B_category_shg.php?year=".$y."&month=5"."&id=".$_GET['id']),
	array("y" => $B_count6, "url"=> "B_category_shg.php?year=".$y."&month=6"."&id=".$_GET['id']),
	array("y" => $B_count7, "url"=> "B_category_shg.php?year=".$y."&month=7"."&id=".$_GET['id']),
	array("y" => $B_count8, "url"=> "B_category_shg.php?year=".$y."&month=8"."&id=".$_GET['id']),
	array("y" => $B_count9, "url"=> "B_category_shg.php?year=".$y."&month=9"."&id=".$_GET['id']),
	array("y" => $B_count10, "url"=> "B_category_shg.php?year=".$y."&month=10"."&id=".$_GET['id']),
	array("y" => $B_count11, "url"=> "B_category_shg.php?year=".$y."&month=11"."&id=".$_GET['id']),
	array("y" => $B_count12, "url"=> "B_category_shg.php?year=".$y."&month=12"."&id=".$_GET['id']),
						);
							$dataPoints3 = array(
    array("y" => $C_count1, "url"=> "C_category_shg.php?year=".$y."&month=1"."&id=".$_GET['id']),
	array("y" => $C_count2, "url"=> "C_category_shg.php?year=".$y."&month=2"."&id=".$_GET['id']),
	array("y" => $C_count3, "url"=> "C_category_shg.php?year=".$y."&month=3"."&id=".$_GET['id']),
	array("y" => $C_count4, "url"=> "C_category_shg.php?year=".$y."&month=4"."&id=".$_GET['id']),
	array("y" => $C_count5, "url"=> "C_category_shg.php?year=".$y."&month=5"."&id=".$_GET['id']),
	array("y" => $C_count6, "url"=> "C_category_shg.php?year=".$y."&month=6"."&id=".$_GET['id']),
	array("y" => $C_count7, "url"=> "C_category_shg.php?year=".$y."&month=7"."&id=".$_GET['id']),
	array("y" => $C_count8, "url"=> "C_category_shg.php?year=".$y."&month=8"."&id=".$_GET['id']),
	array("y" => $C_count9, "url"=> "C_category_shg.php?year=".$y."&month=9"."&id=".$_GET['id']),
	array("y" => $C_count10, "url"=> "C_category_shg.php?year=".$y."&month=10"."&id=".$_GET['id']),
	array("y" => $C_count11, "url"=> "C_category_shg.php?year=".$y."&month=11"."&id=".$_GET['id']),
	array("y" => $C_count12, "url"=> "C_category_shg.php?year=".$y."&month=12"."&id=".$_GET['id']),
							);
							?>
			
<script>
Highcharts.chart('container10', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'ABC Category Of SHG'
    },
    subtitle: {
        text: 'Source: Monthly SHG Category'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
	
        min: 0,
		allowDecimals: false,
        title: {
            text: 'No of SHG'
        }
    },
	
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
   /* plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        },
		point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
    },*/
	plotOptions: {
					series: {
					borderWidth: 0,
					/*dataLabels: {
					enabled: true,
				    format: '{point.y:.0f}'
								},*/
					column: {
            		pointPadding: 0.2,
            		borderWidth: 0
       				 },
					point: {
                   events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
														      }
															},
    series: [{
        name: 'A',
        data: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
    }, {
        name: 'B',
        data: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
    }, {
        name: 'C',
        data: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
       }]
});
</script>