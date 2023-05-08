<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Organization View SHG Member - Bandhan</title>

			<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script  src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script  src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
<script  src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
<script  src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script  src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
<link rel="stylesheet"  href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" />

</head>

<body><br />
<div style="overflow:scroll;">
<table id="example" class="display nowrap table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>Action</th>
<th>SHG Name</th>
<th>Total Member</th>
<th>Date of Foormation</th>
<th>Current Activity</th>
<th>Taluka</th>
<th>Village Name</th>

               
			</tr>
        </thead>
		<!--------------
        <tfoot>
            <tr>
				<th>Sr.No.</th>
                <th>Member Name</th>
                <th>Date Of Birth</th>
                <th>Mobile No</th>
                <th>Member Caste</th>
                <th>Member Category</th>
                <th>Actions</th>
				
            </tr>
        </tfoot>
		--------------------->
        <tbody>
            <?php
		$query="select * from tbl_add_shg where shg_group_name like '%".$_POST['search']."%' and org_id='".$_SESSION['org_id']."' and delete_status='Active'";
		$res=mysqli_query($con,$query)or die (mysqli_query($con));
		//echo $query;
		$counter=0;
		while($row=mysqli_fetch_array($res))
		{
		extract($row);
		?>
            <tr>
				
				<td><!--<a class='blue' href='view_shg_profile.php?shg_id=<?php //echo $row['shg_id'];?>' title='View'>
							<i class='menu-icon fa fa-tachometer bigger-130'></i></a>&nbsp;&nbsp;-->
					<a class="blue" href="view_shg_profile.php?shg_id=<?php echo $shg_id; ?>&id=<?php echo $enabler_id; ?>"   title="View">
					<i class='menu-icon fa fa-tachometer bigger-130'></i></a>&nbsp;&nbsp;
					</td>
					<td><?php echo $row['shg_group_name']; ?></td>
	<td><?php echo $row['total_member']; ?></td>
	<td><?php echo $row['shg_formation_date'];?></td>
	<td><?php echo $row['shg_current_activity'];?></td>
	<td><?php echo $row['shg_taluka'];?></td>
	<td><?php echo $row['shg_village_name'];?></td>

                
            </tr>
		<?php
		}
		?>
			
		</tbody>
</table>
</div>
			<script>
			$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }
					 
        ]
    } );
} );
			</script>
			
</body>
</html>
