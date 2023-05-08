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
<!----<div style="overflow:scroll">------->
<table id="example" class="display nowrap table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
            <tr>
			<th>Image</th>
              <th>Enabler Name</th> 
                <th>SHG Name</th>
                <th>Product Name</th>
                <th>Product Category</th>
				
			<th>Contact person</th>
				<th>Contact No</th>
				<!----	<th>Skill Training</th>
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
			
		$query="SELECT tbl_add_shg.shg_group_name,shg_product_detail.img,shg_product_detail.product_id,shg_product_detail.product_name,shg_product_detail.product_category,shg_product_detail.contact_person,shg_product_detail.contact_no,shg_product_detail.enabler_id,tbl_enabler.enabler_name,tbl_enabler.id FROM tbl_add_shg,shg_product_detail,tbl_enabler  where tbl_add_shg.shg_id=shg_product_detail.shg_id and shg_product_detail.org_id='".$_SESSION['org_id']."' and tbl_enabler.id=shg_product_detail.enabler_id";
		$res=mysqli_query($con,$query)or die (mysqli_query($con));
		//echo $query;
		while($row=mysqli_fetch_array($res))
		{
		extract($row);
		?>
            <tr>
			<td>
				<div>
									<ul class="ace-thumbnails clearfix">
										<li>
											<a href="enabler/product/<?php echo $img;?>" data-rel="colorbox">
												<img width="100" height="100"  src="enabler/product/<?php echo $img;?>" />
												<div class="text">
													<div class="inner">Click On Image</div>
												</div>
											</a>

											
										</li>
</ul></div>
				<?php /*?>
				    <a href="details.php?id=<?php echo $product_id; ?>&enabler_id=<?php echo $enabler_id; ?>" class="iframe_profile" title="View Product Details"><i class="ace-icon fa fa-eye bigger-130"></i></a>&nbsp;&nbsp;<?php */?>
					<?php /*?><a class="green" href="edit_shg_product.php?id=<?php echo $product_id; ?>" title="Edit">
						<i class="ace-icon fa fa-pencil bigger-130"></i>
					</a>&nbsp;&nbsp;<?php */?>
				</td>
				<td><?php echo $enabler_name; ?></td>
                <td><?php echo $shg_group_name; ?></td>
                <td><?php echo $product_name; ?></td>
                <td><?php echo $product_category; ?></td>
				
				
				<td><?php echo $contact_person; ?></td>
				<td><?php echo $contact_no; ?></td>
				<!--<td><?php //echo $intrested_activity; ?></td>
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
<!------------</div>------------>
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
		<?php include("footergallery.php"); ?>	
</body>
</html>
