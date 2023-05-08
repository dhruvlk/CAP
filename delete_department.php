<?php
	
								include "config.php";

								if(isset($_GET['d_id']))
								{
								  $query= 'delete from dept_reg where d_id="'.$_GET['d_id'].'" ' ; 
						          $result = mysqli_query($con,$query);
						         // $row = mysqli_fetch_array($result); 
								  if($result)
						                          {
													 echo '<script type="text/javascript">';
													 echo " alert('Department Deleted Successfully ! ');";
													 echo 'window.location.href = "view_department.php";'; 
													 echo '</script>';
								  
							                      }
								 else
								 				  {
													 echo '<script type="text/javascript">';
													 echo " alert('Error In Department Delete ! ');";
													 echo 'window.location.href = "view_department.php";'; 
													 echo '</script>';
								  
							                      }
								}
?>