<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Enabler - Dashboard</title>


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
							<li class="active">Enabler Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<!---------------------------------------
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div>
						<!-- /.nav-search ----------------------->
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
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
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
								Enabler -
								<small>
									
							<span style="font-size:20px"><?php echo $_GET['enabler_name']; ?>  </span>  <i class="ace-icon fa fa-angle-double-right"></i> Dashboard
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
								

									<div class="vspace-12-sm"></div>

									<div class="col-sm-8">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													SHG Status
												</h5>
												
																							
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<!--<div id="piechart-placeholder"></div>-->
													 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>

													 <div id="viewSelectWrap">
            <h4>View Select</h4>
           <label><input id="rdb1" type="radio" name="toggler" value="divID-1" style="cursor:pointer;" checked/>&nbsp;&nbsp;Producer & Non-Producer SHG</label>&nbsp;&nbsp;
		    <label><input id="rdb2" type="radio" name="toggler" value="divID-2" style="cursor:pointer;" />&nbsp;&nbsp;Bank Linkage</label>&nbsp;&nbsp;
            <label><input id="rdb3" type="radio" name="toggler" value="divID-3" style="cursor:pointer;" />&nbsp;&nbsp;Skill Training</label>&nbsp;&nbsp;
           <label><input id="rdb4" type="radio" name="toggler" value="divID-4" style="cursor:pointer;" />&nbsp;&nbsp;Market Linkage</label>&nbsp;&nbsp;
		
		</div>
		
		
		
		<div id="graphwrap" style="height: 410px;">
		 	
            <div id="divID-2" class="toHide" style="position:relative;margin-bottom:-400px;"></div>
           	
		    <div id="divID-3" class="toHide" style="position:relative;margin-bottom:-400px;"></div>
      
			<div id="divID-1" class="toHide" style="position:relative;margin-bottom:-400px;"></div>  
		     <div id="divID-4" class="toHide"  style="position:relative;top:-9999em;opacity:0;"></div>

	    </div>
		<?php /*?> <div id="graphwrap" style="height: 410px;">
            <div id="divID-1" class="toHide" style="position:relative;margin-bottom:-400px;"></div>
            <div id="divID-2" class="toHide" style="position:relative;top:-9999em;opacity:0;"></div>
        </div>

        <div id="viewSelectWrap">
            <h4>View Select</h4>
            <label><input id="rdb1" type="radio" name="toggler" value="divID-1" style="cursor:pointer;" checked/>1</label>
            <label><input id="rdb2" type="radio" name="toggler" value="divID-2" style="cursor:pointer;" />2</label>
			 <label><input id="rdb3" type="radio" name="toggler" value="divID-3" style="cursor:pointer;" />3</label>
        </div><?php */?>
		<?php
include("config.php");
//session_start();
	//-------------------------------------Producer Non-Producer-------------------------
				
		
													$producer="select * from tbl_add_shg where NOT shg_current_activity = 'No' and enabler_id='".$_GET['id']."' and delete_status='Active'";
													$res=mysqli_query($con,$producer) or die(mysqli_error($con));
													$producer_count=mysqli_num_rows($res);
													//echo $producer_count;
													?>
													<?php
													$nonproducer="select * from tbl_add_shg where  shg_current_activity = 'No' and enabler_id='".$_GET['id']."'and delete_status='Active'";
													$res1=mysqli_query($con,$nonproducer) or die(mysqli_error($con));
													$nonproducer_count=mysqli_num_rows($res1);
													//echo $producer_count;
													?>
													 <?php
        $dataPoints = array(
            array("y" => $producer_count, "name" => "Number Of Producer SHG","url"=> "view_producer_shg1.php?id=".$_GET['id']),
			array("y" => $nonproducer_count, "name" => "Number Of Non Producer SHG","url"=> "view_noproducer_shg1.php?id=".$_GET['id']),
			
        );
		
		//-------------------------------------End Producer Non-Producer-------------------------
		
		//-------------------------------------Bank Linkage-------------------------
													$bank_linkage="select * from tbl_add_shg where NOT shg_bank_linkage = 'No' and enabler_id='".$_GET['id']."'and delete_status='Active'";
													$res=mysqli_query($con,$bank_linkage) or die(mysqli_error($con));
													$bank_linkage=mysqli_num_rows($res);
													//echo $bank_linkage;
													?>
													<?php
													$nobank_linkage="select * from tbl_add_shg where  shg_bank_linkage = 'No' and enabler_id='".$_GET['id']."'and delete_status='Active'";
													$res1=mysqli_query($con,$nobank_linkage) or die(mysqli_error($con));
													$nobank_linkage=mysqli_num_rows($res1);
													//echo $nobank_linkage;
													?>
													 <?php
        $dataPoints2 = array(
            array("y" => $bank_linkage, "name" => "SHG With Bank Linkage","url"=> "view_bank_linkage_shg1.php?id=".$_GET['id']),
			array("y" => $nobank_linkage, "name" => "SHG Without Bank Linkage","url"=> "view_nobank_linkage_shg1.php?id=".$_GET['id']),
			
        );
		
		
		//-------------------------------------End bank Linkage-------------------------
		//-------------------------------------Skill Training-------------------------
			
												$skill_training="select * from tbl_add_shg where NOT skill_training = 'No' and enabler_id='".$_GET['id']."'and delete_status='Active'";
													$res=mysqli_query($con,$skill_training) or die(mysqli_error($con));
													$skill_training_count=mysqli_num_rows($res);
													//echo $producer_count;
													?>
													<?php
													$noskill_training="select * from tbl_add_shg where  skill_training = 'No' and enabler_id='".$_GET['id']."'and delete_status='Active'";
													$res1=mysqli_query($con,$noskill_training) or die(mysqli_error($con));
													$nonskill_training_count=mysqli_num_rows($res1);
												//	echo $producer_count;
													?>
													 <?php
        $dataPoints3 = array(
            array("y" => $skill_training_count, "name" => "SHG With Skill Training","url"=> "view_skilltraining_shg1.php?id=".$_GET['id']),
			array("y" => $nonskill_training_count, "name" => "SHG Without Skill Training","url"=> "view_noskilltraining_shg1.php?id=".$_GET['id']),
			
        );




//-------------------------------------End Skill training-------------------------   

//-------------------------------------Market Linkage-------------------------
													$market_linkage="select * from tbl_add_shg where NOT shg_market_linkage = 'No' and enabler_id='".$_GET['id']."' and delete_status='Active'";
													$res=mysqli_query($con,$market_linkage) or die(mysqli_error($con));
													$market_linkage=mysqli_num_rows($res);
													//echo $bank_linkage;
													?>
													<?php
													$nomarket_linkage="select * from tbl_add_shg where  shg_market_linkage = 'No' and enabler_id='".$_GET['id']."' and delete_status='Active'";
													$res1=mysqli_query($con,$nomarket_linkage) or die(mysqli_error($con));
													$nomarket_linkage=mysqli_num_rows($res1);
													//echo $nobank_linkage;
													?>
													 <?php
        $dataPoints4 = array(
            array("y" => $market_linkage, "name" => "SHG With Market Linkage","url"=> "view_marketlinkage_shg1.php?id=".$_GET['id']),
			array("y" => $nomarket_linkage, "name" => "SHG Without Market Linkage","url"=> "view_nomarketlinkage_shg1.php?id=".$_GET['id']),
			
        );
		
		
		//-------------------------------------End Market Linkage-------------------------
 ?>

<script>
$(function() {
 <!--------------Apply cOLOR---------------->
  Highcharts.setOptions({
     colors: ['#50B432', '#ED561B']
    });
    var chart;
<!-------------END APPLY COLOR---------------------->	
    $('[name=toggler]').click(function () {
        $('.toHide').css({
            top: '-9999em',
            opacity: 0
        });
        var chartToShow = $(this).val();
        $('#' + chartToShow).css({
            top: 0,
            opacity: 1
        });
    });
	

    $('#divID-1').highcharts({
        
		
		 chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
            text: 'Producer and Non Producer SHG',
            align: 'center',
            y: 390 
        <!--text: 'No of Producer and Non Producer SHG Of Enabler'-->
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
    },
   /* plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
			
               
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:.0f} ',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
			
        }
    },
      */ 
	   plotOptions: {
            series: {
                cursor: 'pointer',
				dataLabels: {
                    enabled: true,
                   
                   format: '<b>{point.name}</b>: {point.y:.0f} ',
                },
                point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
            }
        },
	   series: [{
        name: 'Brands',
        colorByPoint: true,
       data:<?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	  
    }]
    });
    $('#divID-2').highcharts({
        chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ' SHG With Bank Linkage',
		 align: 'center',
            y: 390 
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
    },
   /* plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:.0f} ',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
				events:{
                	   click: function (event, i) {
                     alert(event.point.name);
                 

                  }
              },
               
            }
        }
    },*/plotOptions: {
            series: {
                cursor: 'pointer',
				dataLabels: {
                    enabled: true,
                   
                   format: '<b>{point.name}</b>: {point.y:.0f} ',
                },
                point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
            }
        },
        series: [{
        name: 'Brands',
        colorByPoint: true,
        data:<?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
    }]
    });
	$('#divID-3').highcharts({
        chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'SHG With Skill Training',
		 align: 'center',
            y: 390 
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
    },
    /*plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:.0f} ',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },*/
	plotOptions: {
            series: {
                cursor: 'pointer',
				dataLabels: {
                    enabled: true,
                   
                   format: '<b>{point.name}</b>: {point.y:.0f} ',
                },
                point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
            }
        },
        series: [{
        name: 'Brands',
        colorByPoint: true,
        data:<?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
    }]
    });
	$('#divID-4').highcharts({
        chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ' SHG With Market Linkage ',
		 align: 'center',
            y: 390 
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
    },
   /* plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:.0f} ',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },*/
	plotOptions: {
            series: {
                cursor: 'pointer',
				dataLabels: {
                    enabled: true,
                   
                   format: '<b>{point.name}</b>: {point.y:.0f} ',
                },
                point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
            }
        },
        series: [{
        name: 'Brands',
        colorByPoint: true,
        data:<?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
    }]
    });

});
</script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

													
<!-----------------------------------------End Bank Linkage Script--------------------->	
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
													
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
										<div class="space-6"></div>

									<div class="col-sm-4 infobox-container">
									
<?php

$query="select * from tbl_enabler where enabler_id='".$_GET['id']."' and delete_status='Active'";
$res=mysqli_query($con,$query);
$enabler_count=mysqli_num_rows($res);

$query1="select * from tbl_add_shg where enabler_id='".$_GET['id']."' and delete_status='Active'";
$res1=mysqli_query($con,$query1);
$shg_count=mysqli_num_rows($res1);
?>										<div>
											<!--<span class="btn btn-app btn-sm btn-light  no-hover" style="width:150px; padding-left:8px">
												<span class="line-height-1 bigger-170 blue"> <?php //echo $enabler_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> Total No.of Enabler </span>
											</span>-->
																																
										<a href="view_shg.php?enabler_name=<?php echo $_GET['enabler_name'] ?>&id=<?php echo $_GET['id']; ?>" title="View SHG">	<span class="btn btn-app btn-sm btn-pink  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $shg_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> Total No.of SHG </span>
											</span></a>
											<?php
$query2="select * from member_details where enabler_id='".$_GET['id']."' and delete_status='Active'";
$res2=mysqli_query($con,$query2);
$member_count=mysqli_num_rows($res2);
?>		
											<a href="view_shg_womens.php?enabler_name=<?php echo $_GET['enabler_name'] ?>&id=<?php echo $_GET['id']; ?>" title="View Total SHG Womens"><span class="btn btn-app btn-sm btn-yellow  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												
												<span class="line-height-1 bigger-170 "><?php echo $member_count; ?></span>
													<br />
												<span class="line-height-1 smaller-90"> Total No. of Womens </span>
											</span></a>
											
											<!--<span class="btn btn-app btn-sm btn-light  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 blue"> 00 </span>
													<br />
												<span class="line-height-1 smaller-90"> New SHG </span>
											</span>
											
											
										-->
										<div style="padding-top:8px">
										
										<?php
$query3="select shg_status from tbl_add_shg where enabler_id='".$_GET['id']."' and shg_status='APL' and delete_status='Active'";
//echo $query4;
$res3=mysqli_query($con,$query3);


$apl_count=mysqli_num_rows($res3);
//echo '<br>'.$apl_count;
?>	
											
											<a href="view_apl_shg.php?enabler_name=<?php echo $_GET['enabler_name'] ?>&id=<?php echo $_GET['id'];?>" title="View APL SHG"><span class="btn btn-app btn-sm btn-purple  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $apl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> APL SHG </span>
											</span></a>
											
											<?php
$query4="select shg_status from tbl_add_shg where enabler_id='".$_GET['id']."' and shg_status='BPL' and delete_status='Active'";

$res4=mysqli_query($con,$query4);


$bpl_count=mysqli_num_rows($res4);
//echo '<br>'.$bpl_count;
?>	
											<a href="view_bpl_shg.php?enabler_name=<?php echo $_GET['enabler_name'] ?>&id=<?php echo $_GET['id'];?>" title="View BPL SHG"><span class="btn btn-app btn-sm btn-warning  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $bpl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> BPL SHG </span>
											</span>	</a>
											
											<!--<span class="btn btn-app btn-sm btn-light  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 blue"> 00 </span>
													<br />
												<span class="line-height-1 smaller-90"> Revived SHG </span>
											</span>-->
											</div>
											
										
										<div style="padding-top:8px">
											<!--<span class="btn btn-app btn-sm btn-light  no-hover" style="width:150px">
												<span class="line-height-1 bigger-170 blue"> 00 </span>
													<br />
												<span class="line-height-1 smaller-90"> Revived SHG </span>
											</span>-->
											
											
										
											<?php /*?><?php
$query3="select member_category from member_details where enabler_id='".$_GET['id']."' and member_category='APL' and delete_status='Active'";
//echo $query4;
$res3=mysqli_query($con,$query3);


$apl_count=mysqli_num_rows($res3);
//echo '<br>'.$apl_count;
?>	
											
											<a href="view_apl.php?enabler_name=<?php echo $_GET['enabler_name'] ?>&id=<?php echo $_GET['id']; ?>" title="View APL Womens of SHG"><span class="btn btn-app btn-sm btn-grey  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $apl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> APL Womens</span>
											</span></a>
											
											<?php
$query4="select member_category,delete_status from member_details where enabler_id='".$_GET['id']."' and member_category='BPL' and delete_status='Active'";

$res4=mysqli_query($con,$query4);


$bpl_count=mysqli_num_rows($res4);
//echo '<br>'.$bpl_count;
?>	
											<a href="view_bpl.php?enabler_name=<?php echo $_GET['enabler_name'] ?>&id=<?php echo $_GET['id']; ?>" title="View BPL Womens of SHG"><span class="btn btn-app btn-sm btn-success  no-hover" style="width:150px">
											<!--<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $bpl_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> BPL Womens </span>
											</span>	</a><?php */?>
											<?php
$query5="select * from shg_product_detail where enabler_id='".$_GET['id']."'";
$res5=mysqli_query($con,$query5);
$product_count=mysqli_num_rows($res5);
?>	
											
											<a href="view_shg_product.php?enabler_name=<?php echo $_GET['enabler_name'] ?>&id=<?php echo $_GET['id']; ?>" title="View SHG Product"><span class="btn btn-app btn-sm btn-primary  no-hover" style="width:150px">
										<!--	<i class="menu-icon fa fa-group fa-2x"></i><br>-->
												<span class="line-height-1 bigger-170 "> <?php echo $product_count; ?> </span>
													<br />
												<span class="line-height-1 smaller-90"> SHG Product </span>
											</span>	</a>
										</div>
										</div>
										
									
											
									
										

										<div class="space-6"></div>

										

										
									</div>
								</div><!-- /.row -->
								
								
								<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-sm-8">
								<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													ABC Category SHG
												</h5>
												
																							
											</div>

											<div class="widget-body">
												<div class="widget-main">
								
								<?php
								include("ABCchart4.php");
								?>
									
									
									</div></div></div>
										</div><!---col 8 div>-->
									</div>

									
								</div><!-- /.row -->





								<div class="hr hr32 hr-dotted"></div>

								<div class="row">
									<div class="col-sm-8">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													SHG Backword Linkage Statistics
												</h4>
												
											</div>
											<br>
											
											<script src="https://code.highcharts.com/highcharts.js"></script>
													<script src="https://code.highcharts.com/modules/data.js"></script>
													<script src="https://code.highcharts.com/modules/drilldown.js"></script>
														
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#basic_concept">
																<i class="green ace-icon fa fa-bar-chart bigger-125"></i>
																Basic Concept of SHG
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#financial">
																<i class="purple ace-icon fa fa-bar-chart bigger-125"></i>
																Financial Literacy
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#functional">
																<i class="blue ace-icon fa fa-bar-chart bigger-125"></i>
																Functional Literacy
															</a>
														</li>
														<li>
															<a data-toggle="tab" href="#business">
																<i class="orange ace-icon fa fa-fa fa-bar-chart bigger-125"></i>
																Business Development
															</a>
														</li>
													</ul>
<div class="tab-content profile-edit-tab-content">
												
													
<div id="basic_concept" class="tab-pane in active" style="height:400px">
<div class="space-20"></div>

<?php

														$basic_concept_shg="select basic_concept from tbl_add_shg where enabler_id='".$_GET['id']."' and basic_concept='Yet_to_start' and delete_status='Active'";
														$res=mysqli_query($con,$basic_concept_shg) or die(mysqli_error($con));
														$basic_concept_shg_count=mysqli_num_rows($res);


$basic_concept_shg1="select basic_concept from tbl_add_shg where enabler_id='".$_GET['id']."' and basic_concept='Beginner' and delete_status='Active'";
														$res1=mysqli_query($con,$basic_concept_shg1) or die(mysqli_error($con));
														$basic_concept_shg_count1=mysqli_num_rows($res1);
														$basic_concept_shg2="select basic_concept from tbl_add_shg where enabler_id='".$_GET['id']."' and basic_concept='Intermediate' and delete_status='Active'";
														$res2=mysqli_query($con,$basic_concept_shg2) or die(mysqli_error($con));
														$basic_concept_shg_count2=mysqli_num_rows($res2);
														$basic_concept_shg3="select basic_concept from tbl_add_shg where enabler_id='".$_GET['id']."' and basic_concept='Literate' and delete_status='Active'";
														$res3=mysqli_query($con,$basic_concept_shg3) or die(mysqli_error($con));
														$basic_concept_shg_count3=mysqli_num_rows($res3);
														?>
														<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
															
															
														<?php
																		$dataPoints = array(
																			array("y" => $basic_concept_shg_count, "label" => "Yet To Start" ,"url"=> "yet_to_start1.php?id=".$_GET['id']),
																			array("y" => $basic_concept_shg_count1, "label" => "Beginner","url"=> "beginner1.php?id=".$_GET['id']),
																			array("y" => $basic_concept_shg_count2, "label" => "Intermediate","url"=> "intermediate1.php?id=".$_GET['id']),
																			array("y" => $basic_concept_shg_count3, "label" => "Literate","url"=> "literate1.php?id=".$_GET['id']),
																		   
																		);
																	?>
		
		
									<script type="text/javascript">

										// Create the chart
											Highcharts.chart('container', {
													chart: {
															type: 'column'
															},
													title: {
															text: 'SHG Backword Linkage Statistics'
															},
													subtitle: {
															text: 'Basic Concept of SHG.'
														},
																				/*
																				xAxis: {
																					type: 'category'
																				},*/
																				
			xAxis : { categories : [ 'Yet To Start','Beginner','Intermediate','Literate']   },
																				
												yAxis: {
												allowDecimals: false,
														title: {
																	text: 'Total Number of SHG'
																}

														},
												legend: {
														enabled: false
														},
											plotOptions: {
												    series: {
														     borderWidth: 0,
														     dataLabels: {
																	       enabled: true,
																	       format: '{point.y:.0f}'
																	     },
															  point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
														      }
															},
															

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script>
						
</div>
											
<div id="financial" class="tab-pane ">
<div class="space-20"></div>

<?php
														$financial_literacy_shg="select financial_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and financial_literacy='Yet_to_start' and delete_status='Active'";
														$res=mysqli_query($con,$financial_literacy_shg) or die(mysqli_error($con));
														$financial_literacy_shg_count=mysqli_num_rows($res);


$financial_literacy_shg1="select financial_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and financial_literacy='Beginner' and delete_status='Active'";
														$res1=mysqli_query($con,$financial_literacy_shg1) or die(mysqli_error($con));
														$financial_literacy_shg_count1=mysqli_num_rows($res1);
														$financial_literacy_shg2="select financial_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and financial_literacy='Intermediate' and delete_status='Active'";
														$res2=mysqli_query($con,$financial_literacy_shg2) or die(mysqli_error($con));
														$financial_literacy_shg_count2=mysqli_num_rows($res2);
														$financial_literacy_shg3="select financial_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and financial_literacy='Literate' and delete_status='Active'";
														$res3=mysqli_query($con,$financial_literacy_shg3) or die(mysqli_error($con));
														$financial_literacy_shg_count3=mysqli_num_rows($res3);
														?>
														<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
															
															
														<?php
																		$dataPoints1 = array(
																			array("y" => $financial_literacy_shg_count, "label" => "Yet To Start" ,"url"=> "financial_yet_to_start1.php?id=".$_GET['id']),
																			array("y" => $financial_literacy_shg_count1, "label" => "Beginner","url"=> "financial_beginner1.php?id=".$_GET['id']),
																			array("y" => $financial_literacy_shg_count2, "label" => "Intermediate","url"=> "financial_intermediate1.php?id=".$_GET['id']),
																			array("y" => $financial_literacy_shg_count3, "label" => "Literate","url"=> "financial_literate1.php?id=".$_GET['id']),
																		   
																		);
																	?>
		
		
									<script type="text/javascript">

										// Create the chart
											Highcharts.chart('container1', {
													chart: {
															type: 'column'
															},
													title: {
															text: 'SHG Backword Linkage Statistics'
															},
													subtitle: {
															text: 'Financial Literacy of SHG.'
														},
																				/*
																				xAxis: {
																					type: 'category'
																				},*/
																				
			xAxis : { categories : [ 'Yet To Start','Beginner','Intermediate','Literate']   },
																				
												yAxis: {
														allowDecimals: false,
														title: {
																	text: 'Total Number of SHG'
																}

														},
												legend: {
														enabled: false
														},
											plotOptions: {
												    series: {
														     borderWidth: 0,
														     dataLabels: {
																	       enabled: true,
																	       format: '{point.y:.0f}'
																	     },
																		   point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
														      }
															},

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script>


</div>
											
<div id="functional" class="tab-pane ">
<div class="space-20"></div>
<?php
														$functional_literacy_shg="select functional_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and functional_literacy='Yet_to_start' and delete_status='Active'";
														$res=mysqli_query($con,$functional_literacy_shg) or die(mysqli_error($con));
														$functional_literacy_shg_count=mysqli_num_rows($res);


$functional_literacy_shg1="select functional_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and functional_literacy='Beginner' and delete_status='Active'";
														$res1=mysqli_query($con,$functional_literacy_shg1) or die(mysqli_error($con));
														$functional_literacy_shg_count1=mysqli_num_rows($res1);
														$functional_literacy_shg2="select functional_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and functional_literacy='Intermediate' and delete_status='Active'";
														$res2=mysqli_query($con,$functional_literacy_shg2) or die(mysqli_error($con));
														$functional_literacy_shg_count2=mysqli_num_rows($res2);
														$functional_literacy_shg3="select functional_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and functional_literacy='Literate' and delete_status='Active'";
														$res3=mysqli_query($con,$functional_literacy_shg3) or die(mysqli_error($con));
														$functional_literacy_shg_count3=mysqli_num_rows($res3);
														?>
														<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
															
															
														<?php
																		$dataPoints2 = array(
																			array("y" => $functional_literacy_shg_count, "label" => "Yet To Start" ,"url"=> "functional_yet_to_start1.php?id=".$_GET['id']),
																			array("y" => $functional_literacy_shg_count1, "label" => "Beginner" ,"url"=> "functional_beginner1.php?id=".$_GET['id']),
																			array("y" => $functional_literacy_shg_count2, "label" => "Intermediate" ,"url"=> "functional_intermediate1.php?id=".$_GET['id']),
																			array("y" => $functional_literacy_shg_count3, "label" => "Literate" ,"url"=> "functional_literate1.php?id=".$_GET['id']),
																		   
																		);
																	?>
		
		
									<script type="text/javascript">

										// Create the chart
											Highcharts.chart('container2', {
													chart: {
															type: 'column'
															},
													title: {
															text: 'SHG Backword Linkage Statistics'
															},
													subtitle: {
															text: 'Functional Literacy of SHG.'
														},
																				/*
																				xAxis: {
																					type: 'category'
																				},*/
																				
			xAxis : { categories : [ 'Yet To Start','Beginner','Intermediate','Literate']   },
																				
												yAxis: {
														allowDecimals: false,
														title: {
																	text: 'Total Number of SHG'
																}

														},
												legend: {
														enabled: false
														},
											plotOptions: {
												    series: {
														     borderWidth: 0,
														     dataLabels: {
																	       enabled: true,
																	       format: '{point.y:.0f}'
																	     },
																		   point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
														      }
															},

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script>

</div>
											
<div id="business" class="tab-pane ">
<div class="space-20"></div>

<?php
														$business_development_shg="select business_development from tbl_add_shg where enabler_id='".$_GET['id']."' and business_development='Yet_to_start' and delete_status='Active'";
														$res=mysqli_query($con,$business_development_shg) or die(mysqli_error($con));
														$business_development_shg_count=mysqli_num_rows($res);


$business_development_shg1="select business_development from tbl_add_shg where enabler_id='".$_GET['id']."' and business_development='Beginner' and delete_status='Active'";
														$res1=mysqli_query($con,$business_development_shg1) or die(mysqli_error($con));
														$business_development_shg_count1=mysqli_num_rows($res1);
														$business_development_shg2="select business_development from tbl_add_shg where enabler_id='".$_GET['id']."' and business_development='Intermediate' and delete_status='Active'";
														$res2=mysqli_query($con,$business_development_shg2) or die(mysqli_error($con));
														$business_development_shg_count2=mysqli_num_rows($res2);
														$business_development_shg3="select business_development from tbl_add_shg where enabler_id='".$_GET['id']."' and business_development='Literate' and delete_status='Active'";
														$res3=mysqli_query($con,$business_development_shg3) or die(mysqli_error($con));
														$business_development_shg_count3=mysqli_num_rows($res3);
														?>
														<div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
															
															
														<?php
																		$dataPoints3 = array(
																			array("y" => $business_development_shg_count, "label" => "Yet To Start","url"=> "business_yet_to_start1.php?id=".$_GET['id']),
																			array("y" => $business_development_shg_count1, "label" => "Beginner","url"=> "business_beginner1.php?id=".$_GET['id']),
																			array("y" => $business_development_shg_count2, "label" => "Intermediate","url"=> "business_intermediate1.php?id=".$_GET['id']),
																			array("y" => $business_development_shg_count3, "label" => "Literate","url"=> "business_literate1.php?id=".$_GET['id']),
																		   
																		);
																	?>
		
		
									<script type="text/javascript">

										// Create the chart
											Highcharts.chart('container3', {
													chart: {
															type: 'column'
															},
													title: {
															text: 'SHG Backword Linkage Statistics'
															},
													subtitle: {
															text: 'Business Entreprenuership Development.'
														},
																				/*
																				xAxis: {
																					type: 'category'
																				},*/
																				
			xAxis : { categories : [ 'Yet To Start','Beginner','Intermediate','Literate']   },
																				
												yAxis: {
														allowDecimals: false,
														title: {
																	text: 'Total Number of SHG'
																}

														},
												legend: {
														enabled: false
														},
											plotOptions: {
												    series: {
														     borderWidth: 0,
														     dataLabels: {
																	       enabled: true,
																	       format: '{point.y:.0f}'
																	     },
																		   point: {
                    events: {
                        click: function () {
                            location.href = this.options.url;
                        }
                    }
                }
														      }
															},

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script>
</div>


</div></div>
												
												
											
											
											
											
												
														<?php /*?><script src="https://code.highcharts.com/highcharts.js"></script>
													<script src="https://code.highcharts.com/modules/data.js"></script>
													<script src="https://code.highcharts.com/modules/drilldown.js"></script>
														<?php
														$basic_concept_shg="select basic_concept from tbl_add_shg where enabler_id='".$_GET['id']."' and basic_concept='Yes'";
														$res=mysqli_query($con,$basic_concept_shg) or die(mysqli_error($con));
														$basic_concept_shg_count=mysqli_num_rows($res);


														$financial_literacy="select financial_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and financial_literacy='Yes'";
														$res1=mysqli_query($con,$financial_literacy) or die(mysqli_error($con));
														$financial_literacy_count=mysqli_num_rows($res1);

														$functional_literacy="select functional_literacy from tbl_add_shg where enabler_id='".$_GET['id']."' and functional_literacy='Yes'";
														$res2=mysqli_query($con,$functional_literacy) or die(mysqli_error($con));
														$functional_literacy_count=mysqli_num_rows($res2);

														$business_development="select business_development from tbl_add_shg where enabler_id='".$_GET['id']."' and business_development='Yes'";
														$res3=mysqli_query($con,$business_development) or die(mysqli_error($con));
														$business_development_count=mysqli_num_rows($res3);

														?>

															<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
															<?php
															/*
															echo $basic_concept_shg_count;
															echo $financial_literacy_count;
															echo $functional_literacy_count;
															echo $business_development_count;
															
															?>

																<?php
																		$dataPoints = array(
																			array("y" => $basic_concept_shg_count, "label" => "Basic Concept of SHG"),
																			array("y" => $financial_literacy_count, "label" => "Financial Literacy"),
																			array("y" => $functional_literacy_count, "label" => "Functional Literacy"),
																			array("y" => $business_development_count, "label" => "Business Development"),
																		   
																		);
																	?>
																	

																					<script type="text/javascript">

																			// Create the chart
																			Highcharts.chart('container', {
																				chart: {
																					type: 'column'
																				},
																				title: {
																					text: 'SHG Backword Linkage Statistics'
																				},
																				subtitle: {
																					text: 'SHG Backword Linkage Statistics.'
																				},
																				/*
																				xAxis: {
																					type: 'category'
																				},
																				
																				xAxis : { categories : [ 'Basic Concept of SHG','Financial Literacy','Functional Literacy','Business Development']   },
																				
																				yAxis: {
																					title: {
																						text: 'Total Number of SHG'
																					}

																				},
																				legend: {
																					enabled: false
																				},
																				plotOptions: {
																					series: {
																						borderWidth: 0,
																						dataLabels: {
																							enabled: true,
																							format: '{point.y:.0f}'
																						}
																					}
																				},

																				tooltip: {
																					headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
																					pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of Total<br/>'
																				},

																				series: [{
																					name: 'SHG',
																					colorByPoint: true,
																					data:<?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
																				}],
																				
																			});
																					</script><?php */?>

											
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

									
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Bandhan</span>
							For India &copy; 2016-2017
						</span>
							
						&nbsp; &nbsp;
						<!--------------------------------------------------------------------------
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
						------------------------------------------------------------------------------>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<!-----------------------For No Conflict(user more than 1 jquery) ----------------------->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script>
    var $i = jQuery.noConflict();
    //alert($i.fn.jquery);
</script> 
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script>
    var $j = jQuery.noConflict();
    //alert($j.fn.jquery);
</script> 


		<!--[if !IE]> -->
		<?php /*?><script src="assets/js/jquery-2.1.4.min.js"></script><?php */?>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
