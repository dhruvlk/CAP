<?php
	
								include "config.php";

								if(isset($_GET['cas_id']))
								{
								  $query= 'delete from caste_reg where cas_id="'.$_GET['cas_id'].'" ' ; 
						          $result = mysqli_query($con,$query);
						         // $row = mysqli_fetch_array($result); 
								  if($result)
						                          {
													 echo '<script type="text/javascript">';
													 echo " alert('Caste Deleted Successfully ! ');";
													 echo 'window.location.href = "view_caste.php";'; 
													 echo '</script>';
								  
							                      }
								 else
								 				  {
													 echo '<script type="text/javascript">';
													 echo " alert('Error In Caste Delete ! ');";
													 echo 'window.location.href = "view_caste.php";'; 
													 echo '</script>';
								  
							                      }
								}
?>