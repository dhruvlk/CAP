<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<form method="post">
<select name="graph"  >
<option>---select--</option>
<option value="Saving">Saving</option>
<option value="Meeting">Meeting</option>
<option value="Loan Repayment">Loan Repayment</option>
<option value="Revenue">Revenue</option>
<option value="Training">Training</option>
</select>

<select name="year"  onChange="this.form.submit()" >
<option>---select--</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
</select>
</form>
<div id="container"></div>

<?php
session_start();
include('config.php');
if(isset($_POST['graph']))
{


if($_POST['graph']=='Loan Repayment')
{
 
 $m= date('m');
								echo "<br>";
								$y=$_POST['year'];
$A1="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=1 and shg_id='".$_GET['shg_id']."'";
$A_result1=mysqli_query($con,$A1)or die(mysqli_error($con));
$a_row1=mysqli_fetch_array($A_result1);
$a1= $a_row1['loan_repayment'];
$b1=explode("|",$a1);
$A_count1 = $b1[0];
//echo $A_count1."<br>";
 
$A2="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=2 and shg_id='".$_GET['shg_id']."'";
$A_result2=mysqli_query($con,$A2)or die(mysqli_error($con));
$a_row2=mysqli_fetch_array($A_result2);
$a2= $a_row2['loan_repayment'];
$b2=explode("|",$a2);
$A_count2 = $b2[0];
//echo $A_count1."<br>";

$A3="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=3 and shg_id='".$_GET['shg_id']."'";
$A_result3=mysqli_query($con,$A3)or die(mysqli_error($con));
$a_row3=mysqli_fetch_array($A_result3);
$a3= $a_row3['loan_repayment'];
$b3=explode("|",$a3);
$A_count3 =  $b3[0];
//echo $A_count1."<br>";

$A4="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=4 and shg_id='".$_GET['shg_id']."'";
$A_result4=mysqli_query($con,$A4)or die(mysqli_error($con));
$a_row4=mysqli_fetch_array($A_result4);
$a4= $a_row4['loan_repayment'];
$b4=explode("|",$a4);
$A_count4 = $b4[0];
//echo $A_count1."<br>";

$A5="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=5 and shg_id='".$_GET['shg_id']."'";
$A_result5=mysqli_query($con,$A5)or die(mysqli_error($con));
$a_row5=mysqli_fetch_array($A_result5);
$a5= $a_row5['loan_repayment'];
$b5=explode("|",$a5);
$A_count5 = $b5[0];
//echo $A_count1."<br>";

$A6="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=6 and shg_id='".$_GET['shg_id']."'";
$A_result6=mysqli_query($con,$A6)or die(mysqli_error($con));
$a_row6=mysqli_fetch_array($A_result6);
$a6= $a_row6['loan_repayment'];
$b6=explode("|",$a6);
$A_count6 =$b6[0];
//echo $A_count1."<br>";

$A7="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=7 and shg_id='".$_GET['shg_id']."'";
$A_result7=mysqli_query($con,$A7)or die(mysqli_error($con));
$a_row7=mysqli_fetch_array($A_result7);
$a7= $a_row7['loan_repayment'];
$b7=explode("|",$a7);
$A_count7 = $b7[0];
//echo $A_count1."<br>";

$A8="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=8 and shg_id=2";
$A_result8=mysqli_query($con,$A8)or die(mysqli_error($con));
$a_row8=mysqli_fetch_array($A_result8);
$a8= $a_row8['loan_repayment'];
$b8=explode("|",$a8);
$A_count8 = $b8[0];
echo $A_count8."<br>";

$A9="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=9 and shg_id='".$_GET['shg_id']."'";
$A_result9=mysqli_query($con,$A9)or die(mysqli_error($con));
$a_row9=mysqli_fetch_array($A_result9);
$a9= $a_row9['loan_repayment'];
$b9=explode("|",$a9);
$A_count9 = $b9[0];
//echo $A_count1."<br>";

$A10="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=10 and shg_id='".$_GET['shg_id']."'";
$A_result10=mysqli_query($con,$A10)or die(mysqli_error($con));
$a_row10=mysqli_fetch_array($A_result10);
$a10= $a_row10['loan_repayment'];
$b10=explode("|",$a10);
$A_count10 = $b10[0];
//echo $A_count1."<br>";
$A11="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=11 and shg_id='".$_GET['shg_id']."'";
$A_result11=mysqli_query($con,$A11)or die(mysqli_error($con));
$a_row11=mysqli_fetch_array($A_result11);
$a11= $a_row11['loan_repayment'];
$b11=explode("|",$a11);
$A_count11 = $b11[0];
//echo $A_count1."<br>";

$A12="select * from shg_monthly_update where enabler_id='".$_SESSION['enabler_id']."' and YEAR(creation_timestamp)= '".$y."' and MONTH(creation_timestamp)=12 and shg_id='".$_GET['shg_id']."'";
$A_result12=mysqli_query($con,$A12)or die(mysqli_error($con));
$a_row12=mysqli_fetch_array($A_result12);
$a12= $a_row12['loan_repayment'];
$b12=explode("|",$a12);
$A_count12 = $b12[0];
//echo $A_count1."<br>";

	
	$dataPoints1 = array(
	
	array("y" => $A_count1),
	array("y" => $A_count2),
	array("y" => $A_count3),
	array("y" => $A_count4),
	array("y" => $A_count5),
	array("y" => $A_count6),
	array("y" => $A_count7),
	array("y" => $A_count8),
	array("y" => $A_count9),
	array("y" => $A_count10),
	array("y" => $A_count11),
	array("y" => $A_count12),

						);
 

 
 ?>
 <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
 <?php
}


}
		
?>


<script src="https://code.highcharts.com/highcharts.js"></script>
													<script src="https://code.highcharts.com/modules/data.js"></script>
													<script src="https://code.highcharts.com/modules/drilldown.js"></script>

			
						<script type="text/javascript">


										// Create the chart
											Highcharts.chart('container1', {
													chart: {
															type: 'column'
															},
													title: {
															text: 'Shg Monthly Updation '
															},
													subtitle: {
															text: 'Saving'
														},
																				/*
																				xAxis: {
																					type: 'category'
																				},*/
																				
			xAxis : { categories : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']  },
																				
												yAxis: {
														allowDecimals: false,
														title: {
																	text: 'Total saving Per Month'
																}

														},
												legend: {
														enabled: false
														},
											plotOptions: {
												    series: {
														     borderWidth: 0,
														     dataLabels: {
																	       enabled: true,
																	       format: '{point.y:.0f}'
																	     },
																		   point: {
                   /* events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }*/
                }
														      }
															},

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script>
																					
																		
																		
																		<script type="text/javascript">


										// Create the chart
											Highcharts.chart('container2', {
													chart: {
															type: 'column'
															},
													title: {
															text: 'Shg Monthly Updation '
															},
													subtitle: {
															text: 'SHG Meeting'
														},
																				/*
																				xAxis: {
																					type: 'category'
																				},*/
																				
			xAxis : { categories : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']  },
																				
												yAxis: {
														allowDecimals: false,
														title: {
																	text: 'Number Of Meeting'
																}

														},
												legend: {
														enabled: false
														},
											plotOptions: {
												    series: {
														     borderWidth: 0,
														     dataLabels: {
																	       enabled: true,
																	       format: '{point.y:.0f}'
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

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script>
																					
																					
																					
																					<!--Loan Repayment-->
																					<script type="text/javascript">


										// Create the chart
											Highcharts.chart('container3', {
													chart: {
															type: 'column'
															},
													title: {
															text: 'Shg Monthly Updation '
															},
													subtitle: {
															text: 'SHG Meeting'
														},
																				/*
																				xAxis: {
																					type: 'category'
																				},*/
																				
			xAxis : { categories : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']  },
																				
												yAxis: {
														allowDecimals: false,
														title: {
																	text: 'Number Of Meeting'
																}

														},
														
												legend: {
														enabled: false
														},
											plotOptions: {
												    series: {
														     borderWidth: 0,
														     dataLabels: {
																	       enabled: true,
																	       format: '{point.y:.0f}'
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

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script>
																					
																		