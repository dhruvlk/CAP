<?php
include("config.php");
?>

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
<script  src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

</head>

<body><br />
<table id="example" class="display nowrap table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email ID</th>
				<th>Taluka</th>
                <th>Photo</th>                
				<th>Actions</th>
			</tr>
        </thead>
		
		<!-------------------------
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email ID</th>
				<th>Enabler Taluka</th>
                <th>Date Of Joining</th>
				<th>Enabler Profile Status</th>
				<th>Actions</th>
            </tr>
        </tfoot>
		---------------------------->
        <tbody>
		<?php
		$query="select * from taluka_head_register where t_zp_email='".$_SESSION['zp_email']."' ORDER BY t_h_id DESC ";
		$res=mysqli_query($con,$query)or die (mysqli_query($con));
		$counter=0;
		while($row=mysqli_fetch_array($res))
		{
		extract($row)
		?>
            <tr>
            	<td><?php echo ++$counter ?></td>
                <td><?php echo $t_h_name ?></td>
                <td><?php echo $t_h_mno ?></td>
                <td><?php echo $t_h_email ?></td>
				<td><?php echo $t_h_taluka ?></td>
				<td><img src="taluka_head/taluka_head_photo/<?php echo $t_h_photo ?>" height="80" width="75" /></td>
                
				<td align="center">
				
				    <a class="blue" href="t_h_dashboard.php?t_h_id=<?php echo $t_h_id; ?>" title="View BDO Dashboard">
						<i class="menu-icon fa fa-tachometer bigger-130"></i>
					</a>&nbsp;&nbsp; 					
					<a class="green" href="edit_t_head.php?t_h_id=<?php echo $t_h_id; ?>" title="Edit BDO ">
						<i class="ace-icon fa fa-pencil bigger-130"></i>
					</a>&nbsp;&nbsp; 
					<a class="red" onClick="return confirm('Are You Sure You Want To Delete This BDO ?');"  href="#" title="Active">
						<i class="ace-icon fa  fa-trash  bigger-130"></i>
					</a>
				</td>
            </tr>
		<?php
		}
		?>
			
			
		</tbody>
</table>
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
