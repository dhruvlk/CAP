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

	<!-- <center><h1>AROGYA</h1></center> -->
<div style="overflow: scroll;">
<table id="example" class="display nowrap table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th width="7%" rowspan="2">Sr. No.</th>
              <th width="7%" rowspan="2">Taluka</th>
              <th width="16%" rowspan="2">Gram Panchayat</th>
              <th colspan="3">Recieveables</th>
              <th colspan="3">Total Collection</th>
              <th width="6%" rowspan="2">Total</th>
              <th width="6%" rowspan="2">Per</th>
              <th width="6%" rowspan="2">Remark</th>
            </tr>
            <tr>
                <th width="9%">Previous</th>
                <th width="8%">Current</th>
                <th width="5%">Total</th>
				<th width="14%">Previous Coll.</th>
				<th width="13%">Curretn Coll.</th>
				<th width="10%">Total Coll.</th>
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
		// $query="select * from taluka_head_register where t_zp_email='".$_SESSION['zp_email']."' ORDER BY t_h_id DESC ";
		// $res=mysqli_query($con,$query)or die (mysqli_query($con));
		// $counter=0;
		// while($row=mysqli_fetch_array($res))
		// {
		// extract($row)
		?>
          <?php
		// }
		?>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Palghar</td>
				<td>133</td>
				<td>496235</td>
				<td>7226220</td>
				<td>7722455</td>
				<td>496235</td>
				<td>2383960</td>
				<td>2880195</td>
				<td>4842260</td>
				<td>37.30</td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Dahanu</td>
				<td>85</td>
				<td>89967</td>
				<td>3456724</td>
				<td>3546691</td>
				<td>14507</td>
				<td>1706232</td>
				<td>1720739</td>
				<td>1825952</td>
				<td>48.52</td>
				<td></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Vasai</td>
				<td>31</td>
				<td>18804</td>
				<td>1356930</td>
				<td>1375734</td>
				<td>15518</td>
				<td>580733</td>
				<td>596251</td>
				<td>779483</td>
				<td>43.34</td>
				<td></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Talasari</td>
				<td>21</td>
				<td>0</td>
				<td>634665</td>
				<td>634665</td>
				<td>0</td>
				<td>285228</td>
				<td>285228</td>
				<td>349437</td>
				<td>44.94</td>
				<td></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Wada</td>
				<td>84</td>
				<td>15522</td>
				<td>1097007</td>
				<td>1112529</td>
				<td>15522</td>
				<td>574217</td>
				<td>589739</td>
				<td>522790</td>
				<td>53.01</td>
				<td></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Vikramgad</td>
				<td>42</td>
				<td>18587</td>
				<td>998118</td>
				<td>1016705</td>
				<td>6505</td>
				<td>512014</td>
				<td>518519</td>
				<td>498186</td>
				<td>51.00</td>
				<td></td>
			</tr>
			<tr>
				<td>7</td>
				<td>Javhar</td>
				<td>50</td>
				<td>96851</td>
				<td>619722</td>
				<td>716573</td>
				<td>34201</td>
				<td>227546</td>
				<td>261747</td>
				<td>454826</td>
				<td>36.53</td>
				<td></td>
			</tr>
			<tr>
				<td>8</td>
				<td>Mokhada</td>
				<td>27</td>
				<td>0</td>
				<td>328056</td>
				<td>328056</td>
				<td>0</td>
				<td>158279</td>
				<td>158279</td>
				<td>169777</td>
				<td>48.25</td>
				<td></td>
			</tr>
			<tr>
				<!-- <td colspan="2">Total</td> -->
				<td>Total</td>
				<td></td>
				<td>473</td>
				<td>735966</td>
				<td>15717442</td>
				<td>16453408</td>
				<td>582488</td>
			    <td>6428209</td>
				<td>7010697</td>
				<td>9442711</td>
				<td>42.61</td>
				<td></td>
				
			</tr>
			
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
