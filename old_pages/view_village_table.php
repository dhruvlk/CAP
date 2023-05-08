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
              <th width="7%" rowspan="2">Sr. No.</th>
              <th width="7%" rowspan="2">Village</th>
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
				<td>Dindori</td>
				<td>6615537</td>
				<td>48219532</td>
				<td>54835069</td>
				<td>6615537</td>
				<td>27463885</td>
				<td>33979422</td>
				<td>30255647</td>
				<td>61.97</td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jalgaon</td>
				<td>190156</td>
				<td>6646164</td>
				<td>6836320</td>
				<td>74082</td>
				<td>2940683</td>
				<td>3014765</td>
				<td>3821555</td>
				<td>44.10</td>
				<td></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Nandgaon</td>
				<td>119605</td>
				<td>3627948</td>
				<td>3747553</td>
				<td>16401</td>
				<td>1798228</td>
				<td>1814629</td>
				<td>1932924</td>
				<td>48.42</td>
				<td></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Dhakambe</td>
				<td>0</td>
				<td>2463796</td>
				<td>2463796</td>
				<td>0</td>
				<td>937952</td>
				<td>937952</td>
				<td>1525844</td>
				<td>38.07</td>
				<td></td>
			</tr>
			<tr>
				<td>5</td>
				<td>M.bad</td>
				<td>238194</td>
				<td>3194275</td>
				<td>3432469</td>
				<td>83650</td>
				<td>1756409</td>
				<td>1840059</td>
				<td>1592410</td>
				<td>53.61</td>
				<td></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Matori</td>
				<td>101596</td>
				<td>2108426</td>
				<td>2210022</td>
				<td>35559</td>
				<td>1047351</td>
				<td>1082910</td>
				<td>1127112</td>
				<td>49.00</td>
				<td></td>
			</tr>
			<tr>
				<td>7</td>
				<td>Mungsara</td>
				<td>187430</td>
				<td>2326267</td>
				<td>2513697</td>
				<td>80540</td>
				<td>868386</td>
				<td>948926</td>
				<td>1564771</td>
				<td>37.75</td>
				<td></td>
			</tr>
			<tr>
				<td>8</td>
				<td>Mokhada</td>
				<td>0</td>
				<td>1390630</td>
				<td>1390630</td>
				<td>0</td>
				<td>759844</td>
				<td>759844</td>
				<td>630786</td>
				<td>54.64</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">Total</td>
				<td>7452518</td>
				<td>69977038</td>
				<td>77429556</td>
				<td>6805769</td>
				<td>37572738</td>
				<td>44378507</td>
				<td>33051049</td>
				<td>57.31</td>
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
