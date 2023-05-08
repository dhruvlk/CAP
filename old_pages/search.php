<?php
   session_start();
   include("config.php");
    
	  //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = mysqli_query($con,"select * from tbl_add_shg where shg_group_name like '%".$searchTerm."%' and org_id='".$_SESSION['org_id']."' and delete_status='Active' ORDER BY shg_group_name ASC");
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row['shg_group_name'];
    }
    
    //return json data
    echo json_encode($data);
?>