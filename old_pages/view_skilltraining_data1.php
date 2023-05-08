<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

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
<div style="overflow:scroll">
<table id="example" class="display nowrap table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
            <tr>
			<th>Actions</th>
               <!--- <th>SHG Type</th>  ---->
                <th>SHG Name</th>
                <th>Total Member</th>
                <th>Date Of Formation</th>
				<th>Current Activity</th>
               <!--- <th>Saving Amount</th> ---->
               <!-- <th>State</th>-->
			<!----	<th>District</th>---->
				<th>Taluka</th>
				<th>Village Name</th>
				<th>Skill Training</th>
			<!----	<th>Bank Linkage</th>
				<th>Market Linkage</th>
				
				<th>Past Activity</th>
				<th>Intrested Activity</th>
				<th>Basic Concept</th>
				<th>Financial Literacy</th>
				<th>Functional Literacy</th>
				<th>Business Development</th>---->
				
			</tr>
        </thead>
		<!------------
        <tfoot>
            <tr>
				<th>Actions</th>
                <th>SHG Type</th>
                <th>SHG Name</th>
                <th>Total Member</th>
                <th>Date Of Formation</th>
                <th>Saving Amount</th>
                <th>State</th>
				<th>District</th>
				<th>Taluka</th>
				<th>Village Name</th>
				<th>Bank Linkage</th>
				<th>Market Linkage</th>
				<th>Current Activity</th>
				<th>Skill Training</th>
				<th>Past Activity</th>
				<th>Intrested Activity</th>
				<th>Basic Concept</th>
				<th>Financial Literacy</th>
				<th>Functional Literacy</th>
				<th>Business Development</th>
				
            </tr>
        </tfoot>
		----------------->
        <tbody>
            <?php
			
		$query="select * from tbl_add_shg where NOT skill_training = 'No' and org_id='".$_SESSION['org_id']."' and enabler_id='".$_GET['id']."' and delete_status='Active'";
		$res=mysqli_query($con,$query)or die (mysqli_query($con));
		//echo $query;
		while($row=mysqli_fetch_array($res))
		{
		extract($row);
		?>
            <tr>
			<td>
			 <a class="blue" href="view_shg_profile.php?shg_id=<?php echo $shg_id; ?>&id=<?php echo $_GET['id']; ?>"   title="View">
						<i class="menu-icon fa fa-tachometer bigger-130"></i>
					</a>&nbsp;&nbsp;
			</td>
			<?php /*?><td>
				
				    <a class="blue" href="view_shg_profile.php?shg_id=<?php echo $shg_id; ?>"   title="View">
						<i class="menu-icon fa fa-tachometer bigger-130"></i>
					</a>&nbsp;&nbsp;
					<a class="green" href="edit_shg.php?shg_id=<?php echo $shg_id; ?>" title="Edit">
						<i class="ace-icon fa fa-pencil bigger-130"></i>
					</a>&nbsp;&nbsp;
					<a class="red" onClick="return confirm('Are You Sure You Want To Dactivate This SHG ?');"  href="delete_shg.php?shg_id=<?php echo $shg_id; ?>" title="Deactivate">
						<i class="ace-icon fa fa-trash-o bigger-130"></i>
					</a>
				</td><?php */?>
               <!----- <td><?php //echo $shg_type; ?></td>----------->
                <td><?php echo $shg_group_name; ?></td>
                <td><?php echo $total_member; ?></td>
				<td><?php echo $shg_formation_date; ?></td>
				<td><?php echo $shg_current_activity; ?></td>
               <!------ <td><?php //echo $shg_amount_of_saving; ?></td>----------->
                <?php /*?><td><?php echo $shg_state; ?></td><?php */?>
				<!----<td><?php //echo $shg_district; ?></td>------->
				<td><?php echo $shg_taluka; ?></td>
				<td><?php echo $shg_village_name; ?></td> 
				<td><?php echo $skill_training; ?></td>
                <!------------
				<td><?php //echo $shg_bank_linkage; ?></td>
				<td><?php echo $shg_market_linkage; ?></td>
				
				
				<td><?php //echo $past_activity; ?></td>
				<td><?php //echo $intrested_activity; ?></td>
				<td><?php //echo $basic_concept; ?></td>
				<td><?php //echo $financial_literacy; ?></td>
				<td><?php //echo $functional_literacy; ?></td>
				<td><?php //echo $business_development; ?></td>----------->
				
				  
				
            </tr>
		<?php
		}
		?>
			
		</tbody>
</table>
</div><!-------Scroll--------->
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
