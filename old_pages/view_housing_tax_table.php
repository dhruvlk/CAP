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

	<!-- <center><h1>GHARPATTI</h1></center> -->
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
				<td>26716189</td>
				<td>296939217</td>
				<td>323655406</td>
				<td>26716189</td>
				<td>108433854</td>
				<td>135149843</td>
				<td>188505563</td>
				<td>41.76</td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Dahanu</td>
				<td>85</td>
				<td>1619668</td>
				<td>54286313</td>
				<td>55905981</td>
				<td>1040408</td>
				<td>26478564</td>
				<td>27518972</td>
				<td>28387009</td>
				<td>49.22</td>
				<td></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Vasai</td>
				<td>31</td>
				<td>890821</td>
				<td>36223128</td>
				<td>37113949</td>
				<td>838510</td>
				<td>16726190</td>
				<td>17564700</td>
				<td>19549249</td>
				<td>47.33</td>
				<td></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Talasari</td>
				<td>21</td>
				<td>0</td>
				<td>12528925</td>
				<td>12528925</td>
				<td>0</td>
				<td>5835315</td>
				<td>5835315</td>
				<td>6693610</td>
				<td>46.57</td>
				<td></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Wada</td>
				<td>84</td>
				<td>1768885</td>
				<td>85235835</td>
				<td>87004720</td>
				<td>176885</td>
				<td>53787306</td>
				<td>53964191</td>
				<td>33040529</td>
				<td>62.02</td>
				<td></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Vikramgad</td>
				<td>42</td>
				<td>800002</td>
				<td>13989708</td>
				<td>14789710</td>
				<td>280000</td>
				<td>7247455</td>
				<td>7527455</td>
				<td>7262255</td>
				<td>50.90</td>
				<td></td>
			</tr>
			<tr>
				<td>7</td>
				<td>Javhar</td>
				<td>50</td>
				<td>928360</td>
				<td>7518516</td>
				<td>8446876</td>
				<td>355351</td>
				<td>2693156</td>
				<td>3048507</td>
				<td>5398369</td>
				<td>36.00</td>
				<td></td>
			</tr>
			<tr>
				<td>8</td>
				<td>Mokhada</td>
				<td>27</td>
				<td>0</td>
				<td>3216830</td>
				<td>3216830</td>
				<td>0</td>
				<td>1652320</td>
				<td>1652320</td>
				<td>1564510</td>
				<td>51.36</td>
				<td></td>
			</tr>

			<tr>
				<!-- <td colspan="2">Total</td> -->
				<td>Total</td>
				<td></td>				
				<td>473</td>
				<td>32723925</td>
				<td>509938472</td>
				<td>542662397</td>
				<td>29407343</td>
				<td>222853960</td>
				<td>252261303</td>
				<td>290401094</td>
				<td>46.49</td>
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
