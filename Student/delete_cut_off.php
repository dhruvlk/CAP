<?php
	
								include "config.php";

								if(isset($_GET['c_id']))
								{
								  $query= 'delete from cut_off_reg where c_id="'.$_GET['c_id'].'" ' ; 
						          $result = mysqli_query($con,$query);
						         // $row = mysqli_fetch_array($result); 
								  if($result)
						                          {
													 echo '<script type="text/javascript">';
													 echo " alert('Cut Off Deleted Successfully ! ');";
													 echo 'window.location.href = "view_cut_off.php";'; 
													 echo '</script>';
								  
							                      }
								 else
								 				  {
													 echo '<script type="text/javascript">';
													 echo " alert('Error In Cut Off Delete ! ');";
													 echo 'window.location.href = "view_cut_off.php";'; 
													 echo '</script>';
								  
							                      }
								}
?>