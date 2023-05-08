<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Organization - Dashboard</title>


		<?php
		
		include "header.php";
		
		?>
		
		
		
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
						<div class="nav-search" id="nav-search">
							<form class="form-search" id="jsform" action="result.php" method="post">
								
								<span class="input-icon">
								 <input type="text" placeholder="Search By SHG Name ..." class="nav-search-input" name="search" id="skills" style="width:175px" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
							
<script>
$(function() {
    $( "#skills" ).autocomplete({
        source: 'search.php'
    });
});
</script>
<script type="text/javascript">
 $("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("#jsform").submit();
    }
});
</script>
					</div>
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off"/>
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Organization
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Dashboard
								</small>
							</h1>
						</div><!-- /.page-header -->

	
								
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								
								
								<!---------------------------------------------------------
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Welcome to
									<strong class="green">
										Ace
										<small>(v1.4)</small>
									</strong>,
	лёгкий, многофункциональный и простой в использовании шаблон для админки на bootstrap 3.3.6. Загрузить исходники с <a href="https://github.com/bopoda/ace">github</a> (with minified ace js/css files).
								</div>
								------------------------------------------------------------->

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-7 infobox-container">
									<!--------
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">32</span>
												<div class="infobox-content">comments + 2 reviews</div>
											</div>

											
										</div>
									---------------------->
<?php

$query="select * from tbl_enabler where org_id='".$_SESSION['org_id']."' and delete_status='Active'";
$res=mysqli_query($con,$query);
$enabler_count=mysqli_num_rows($res);

$query1="select * from tbl_add_shg where org_id='".$_SESSION['org_id']."' and delete_status='Active'";
$res1=mysqli_query($con,$query1);
$shg_count=mysqli_num_rows($res1);
?>										<div>
											<a href="view_enabler.php" title="View Enabler"><span class="btn btn-app btn-sm btn-light  no-hover" style="width:150px; padding-left:8px">
												<span class="line-height-1 bigger-170 blue"> <?php echo $enabler_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> Total No.of Enabler </span>
											</span></a>
																																
											<a href="view_shg1.php" title="View SHG"><span class="btn btn-app btn-sm btn-pink  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 "> <?php echo $shg_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> Total No.of SHG </span>
											</span></a>
											<?php
$query2="select * from member_details where org_id='".$_SESSION['org_id']."' and delete_status='Active'";
$res2=mysqli_query($con,$query2);
$member_count=mysqli_num_rows($res2);
?>		
											<a href="view_shg_womens1.php" title="View SHG Womens"><span class="btn btn-app btn-sm btn-yellow  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 "><?php echo $member_count; ?></span>
													<br />
												<span class="line-height-1 smaller-90"> Total No. of Womens </span>
											</span></a>
											<?php
$query5="select * from shg_product_detail where org_id='".$_SESSION['org_id']."'";
$res5=mysqli_query($con,$query5);
$product_count=mysqli_num_rows($res5);
?>	
											
											<a href="view_shg_product1.php" title="View SHG Product"><span class="btn btn-app btn-sm btn-primary  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 "> <?php echo $product_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> SHG Product </span>
											</span>	</a>
											
											<!--<span class="btn btn-app btn-sm btn-light  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 blue"> 00 </span>
													<br />
												<span class="line-height-1 smaller-90"> New SHG </span>
											</span>
											
											
										-->
										
										
										<div style="padding-top:8px">
											<!--<span class="btn btn-app btn-sm btn-light  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 blue"> 00 </span>
													<br />
												<span class="line-height-1 smaller-90"> Revived SHG </span>
											</span>-->
											
											<?php
$query3="select shg_status from tbl_add_shg where org_id='".$_SESSION['org_id']."' and shg_status='APL' and delete_status='Active'";
//echo $query4;
$res3=mysqli_query($con,$query3);


$apl_count=mysqli_num_rows($res3);
//echo '<br>'.$apl_count;
?>	
											
											<a href="view_apl_shg1.php" title="View APL SHG"><span class="btn btn-app btn-sm btn-purple  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $apl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> APL SHG </span>
											</span></a>
											
											<?php
$query4="select shg_status from tbl_add_shg where org_id='".$_SESSION['org_id']."' and shg_status='BPL' and delete_status='Active'";

$res4=mysqli_query($con,$query4);


$bpl_count=mysqli_num_rows($res4);
//echo '<br>'.$bpl_count;
?>	
											<a href="view_bpl_shg1.php" title="View BPL SHG"><span class="btn btn-app btn-sm btn-warning  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $bpl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> BPL SHG </span>
											</span>	</a>
										
											<?php
$query3="select member_category from member_details where org_id='".$_SESSION['org_id']."' and member_category='APL' and delete_status='Active'";
//echo $query4;
$res3=mysqli_query($con,$query3);


$apl_count=mysqli_num_rows($res3);
//echo '<br>'.$apl_count;
?>	
											
											<a href="view_apl1.php" title="View APL"><span class="btn btn-app btn-sm btn-grey  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 "> <?php echo $apl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> APL Womens </span>
											</span></a>
											
											<?php
$query4="select member_category from member_details where org_id='".$_SESSION['org_id']."' and member_category='BPL' and delete_status='Active'";

$res4=mysqli_query($con,$query4);


$bpl_count=mysqli_num_rows($res4);
//echo '<br>'.$bpl_count;
?>	
											<a href="view_bpl1.php" title="View BPL"><span class="btn btn-app btn-sm btn-success  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 "> <?php echo $bpl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> BPL Womens </span>
											</span>	</a>
											
										</div>
										</div>
										
									
											
									
										

										<div class="space-6"></div>

										

										
									</div>

									<div class="vspace-12-sm"></div>
</div>
									<!--<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Traffic Sources
												</h5>-->
												
												<!---------------------------------------------------------
												<div class="widget-toolbar no-border">
													<div class="inline dropdown-hover">
														<button class="btn btn-minier btn-primary">
															This Week
															<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
														</button>

														<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
															<li class="active">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
																	This Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	This Month
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Month
																</a>
															</li>
														</ul>
													</div>
												</div>
												-------------------------------------------------------->
												
											<!--</div>-->

											<!--<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder"></div>-->
													
													<!------------------------------------------------------------------------
													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
																&nbsp; likes
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
																&nbsp; tweets
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
																&nbsp; pins
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
													------------------------------------------------------------------------------>
													
											<!--</div><!-- /.widget-main -->
											<!--</div><!-- /.widget-body -->
										<?php /*?></div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><?php */?><!-- /.row -->

								<!--<div class="hr hr32 hr-dotted"></div>-->

								<!--<div class="row">
									<div class="col-sm-5">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													Popular Domains
												</h4>-->
												
												<!----------------------------------------------------
												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
												-------------------------------------------------------->
											<?php /*?></div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>name
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>price
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>status
																</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>internet.com</td>

																<td>
																	<small>
																		<s class="red">$29.99</s>
																	</small>
																	<b class="green">$19.99</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-info arrowed-right arrowed-in">on sale</span>
																</td>
															</tr>

															<tr>
																<td>online.com</td>

																<td>
																	<b class="blue">$16.45</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">approved</span>
																</td>
															</tr>

															<tr>
																<td>newnet.com</td>

																<td>
																	<b class="blue">$15.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">pending</span>
																</td>
															</tr>

															<tr>
																<td>web.com</td>

																<td>
																	<small>
																		<s class="red">$24.99</s>
																	</small>
																	<b class="green">$19.95</b>
																</td>

																<td class="hidden-480">
																	<span class="label arrowed">
																		<s>out of stock</s>
																	</span>
																</td>
															</tr>

															<tr>
																<td>domain.com</td>

																<td>
																	<b class="blue">$12.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-warning arrowed arrowed-right">SOLD</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

									<div class="col-sm-7">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-signal"></i>
													Sale Stats
												</h4><?php */?>

												<!------------------------------------------------------------
												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
												-------------------------------------------------------------->
											<?php /*?></div>

											<div class="widget-body">
												<div class="widget-main padding-4">
													<div id="sales-charts"></div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row --><?php */?>

								<!--<div class="hr hr32 hr-dotted"></div>
-->
								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div style="overflow:scroll">
								<div class="col-sm-12">
								<div class="widget-box" style="width:1100px; height:500px;">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													ABC Category SHG
												</h5>
												
																							
											</div>

											<div class="widget-body">
												<div class="widget-main">
								
								<?php
								include("org_ABCchart4.php");
								?>
									
									
									</div></div></div>
										</div><!---col 8 div>-->
									</div><!--div scroll-->
									</div>

									
								</div><!-- /.row -->
						
						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php

include ('profilefooter.php');

?>
	</body>
</html>
