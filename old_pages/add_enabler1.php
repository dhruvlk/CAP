<?php
include("start.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>jQuery UI - Ace Admin</title>
<?php
include("header.php");
?>
		<meta name="description" content="Restyling jQuery UI Widgets and Elements" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>



		

				
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
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">UI &amp; Elements</a>
							</li>
							<li class="active">jQuery UI</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
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
								jQuery UI
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Restyling jQuery UI Widgets and Elements
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-calendar-o smaller-90"></i>
											Datepicker
										</h3>

										<div class="row">
											<div class="col-xs-6">
												<div class="input-group input-group-sm">
													<input type="text" id="datepicker" class="form-control" />
													<span class="input-group-addon">
														<i class="ace-icon fa fa-calendar"></i>
													</span>
												</div>
											</div>
										</div>
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-list-alt smaller-90"></i>
											Dialogs
										</h3>
										<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm">Confirm Dialog</a>
										<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Modal Dialog</a>

										<div id="dialog-message" class="hide">
											<p>
												This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.
											</p>

											<div class="hr hr-12 hr-double"></div>

											<p>
												Currently using
												<b>36% of your storage space</b>.
											</p>
										</div><!-- #dialog-message -->

										<div id="dialog-confirm" class="hide">
											<div class="alert alert-info bigger-110">
												These items will be permanently deleted and cannot be recovered.
											</div>

											<div class="space-6"></div>

											<p class="bigger-110 bolder center grey">
												<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
												Are you sure?
											</p>
										</div><!-- #dialog-confirm -->
									</div><!-- ./span -->
								</div><!-- ./row -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-terminal smaller-90"></i>
											Autocomplete
										</h3>

										<div class="row">
											<div class="col-sm-8 col-md-7">
												<input id="tags" type="text" class="form-control" />
												<div class="space-4"></div>

												<input id="search" type="text" class="form-control" placeholder="Type 'a' or 'h'" />
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12">
												<h3 class="header blue lighter smaller">
													<i class="ace-icon fa fa-info smaller-90"></i>
													Tooltip
												</h3>

												<div class="bigger-110">
													<p>
														<a class="grey" id="show-option" href="#" title="slide down on show">
															<i class="ace-icon fa fa-hand-o-right"></i>
															slide down on show
														</a>
													</p>

													<p>
														<a class="blue" id="hide-option" href="#" title="explode on hide">
															<i class="ace-icon fa fa-hand-o-right"></i>
															explode on hide
														</a>
													</p>

													<p>
														<a class="pink" id="open-event" href="#" title="move down on show">
															<i class="ace-icon fa fa-hand-o-right"></i>
															move down on show
														</a>
													</p>
												</div>
											</div>
										</div><!-- ./row -->
									</div><!-- ./col -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-bars smaller-90"></i>
											Menu
										</h3>

										<ul id="menu">
											<li class="ui-state-disabled">Aberdeen</li>
											<li>Ada</li>
											<li>Adamsville</li>
											<li>Addyston</li>

											<li>
												Delphi
												<ul>
													<li class="ui-state-disabled">Ada</li>
													<li>Saarland</li>
													<li>Salzburg</li>
												</ul>
											</li>
											<li>Saarland</li>

											<li>
												Salzburg
												<ul>
													<li>
														Delphi
														<ul>
															<li>Ada</li>
															<li>Saarland</li>
															<li>Salzburg</li>
														</ul>
													</li>

													<li>
														Delphi
														<ul>
															<li>Ada</li>
															<li>Saarland</li>
															<li>Salzburg</li>
														</ul>
													</li>
													<li>Perch</li>
												</ul>
											</li>
											<li class="ui-state-disabled">Amesville</li>
										</ul>
									</div><!-- ./col -->
								</div><!-- ./row -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-retweet smaller-90"></i>
											Spinner
										</h3>

										<input id="spinner" name="value" type="text" />
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-arrows-h smaller-90"></i>
											Slider
										</h3>

										<p>
											Please see
											<a href="form-elements.html">form elements page</a>
											for more slider examples.
										</p>

										<div class="space-4"></div>

										<div id="slider"></div>
									</div><!-- ./col -->
								</div><!-- ./row -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-list smaller-90"></i>
											Sortable Accordion
										</h3>

										<div id="accordion" class="accordion-style2">
											<div class="group">
												<h3 class="accordion-header">Section 1</h3>

												<div>
													<p>
														Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
			amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
													</p>
												</div>
											</div>

											<div class="group">
												<h3 class="accordion-header">Section 2</h3>

												<div>
													<p>
														Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
			purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
			velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
			suscipit faucibus urna.
													</p>
												</div>
											</div>

											<div class="group">
												<h3 class="accordion-header">Section 3</h3>

												<div>
													<p>
														Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
			Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
			ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
			lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
													</p>

													<ul>
														<li>List item one</li>
														<li>List item two</li>
														<li>List item three</li>
													</ul>
												</div>
											</div>
										</div><!-- #accordion -->
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-folder-o smaller-90"></i>
											Tabs
										</h3>

										<div id="tabs">
											<ul>
												<li>
													<a href="#tabs-1">Nunc tincidunt</a>
												</li>

												<li>
													<a href="#tabs-2">Proin dolor</a>
												</li>

												<li>
													<a href="#tabs-3">Aenean lacinia</a>
												</li>
											</ul>

											<div id="tabs-1">
												<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Duis orci. Aliquam sodales tortor vitae ipsum. Ut et mauris vel pede varius sollicitudin.</p>
											</div>

											<div id="tabs-2">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla..</p>
											</div>

											<div id="tabs-3">
												<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Praesent eu risus hendrerit ligula tempus pretium.</p>
											</div>
										</div>
									</div><!-- ./col -->
								</div><!-- ./row -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-spinner"></i>
											Progressbar
										</h3>

										<div id="progressbar"></div>
									</div><!-- ./col -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-spinner"></i>
											Selectmenu
										</h3>
										<label for="number" class="block">Select a number</label>

										<select name="number" id="number">
											<option>1</option>
											<option selected="selected">2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div><!-- ./row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php
			include("footer1.php");
			?>
	</body>
</html>
