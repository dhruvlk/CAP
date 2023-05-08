<?php
	
								include "config.php";

								if(isset($_GET['c_id']))
								{
								  $query= 'delete from college_reg where c_id="'.$_GET['c_id'].'" ' ; 
						          $result = mysqli_query($con,$query);
						         // $row = mysqli_fetch_array($result); 
								  if($result)
						                          {
													 echo '<script type="text/javascript">';
													 echo " alert('College Deleted Successfully ! ');";
													 echo 'window.location.href = "new_registered_c.php";'; 
													 echo '</script>';
								  
							                      }
								 else
								 				  {
													 echo '<script type="text/javascript">';
													 echo " alert('Error In College Delete ! ');";
													 echo 'window.location.href = "new_registered_c.php";'; 
													 echo '</script>';
								  
							                      }
								}
?>