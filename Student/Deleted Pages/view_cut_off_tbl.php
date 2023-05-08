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

	<!-- <center><h1>PANIPATTI</h1></center> -->
<div style="overflow: scroll;">
<table width="100%" border="1" cellspacing="0" class="display nowrap table-bordered table-hover" id="example">
        <thead>
            <tr>
              <th>Sr. No</th>
              <th>Department Name</th>
              <th>Caste Name</th>
              <th>Minimum Percentage</th>
              <th>Maximum Percentage</th>
              <th>Academic Year</th>             
              <th>Action</th>
            </tr>
            
        </thead>
		
		
        <tbody>
		<?php
		$query="select * from cut_off_reg where c_col_email='".$_SESSION['c_email']."' ORDER BY c_id DESC ";
		$res=mysqli_query($con,$query) or die(mysqli_error($con));
		$counter=0;
		while($row=mysqli_fetch_array($res))
		{
		extract($row)
		?>
		<tr>
				<td><?php echo ++$counter; ?></td>
				<td><?php echo $c_dept_name; ?></td>
				<td><?php echo $c_cas_name; ?></td>
				<td><?php echo $c_min_per; ?></td>
				<td><?php echo $c_max_per; ?></td>
				<td><?php echo $c_ac_year; ?></td>				
				<td align="center">
															
					
					<a class="green" href="edit_cut_off.php?c_id=<?php echo $c_id; ?>" title="Edit Cut Off">
<i class="ace-icon glyphicon glyphicon-edit bigger-130"></i>
					</a>
					&nbsp;
					<a class="red" onClick="return confirm('Are You Sure You Want To Delete This Cut Off Information ?');"  href="delete_cut_off.php?c_id=<?php echo $c_id; ?>" title="Delete Cut Off">
<i class="ace-icon glyphicon glyphicon-trash bigger-130"></i>
					</a>

				</td>
				
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
