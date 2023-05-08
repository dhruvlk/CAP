<?php 
include("config.php");
//$db = new mysqli('localhost', 'root', '', 'db_bandhan');
    if($_GET['enabler_id']!="" && $_GET['key']!=""):
        $enabler_id=mysqli_real_escape_string($con,$_GET['enabler_id']);
        $active_code=mysqli_real_escape_string($con,$_GET['key']);
        $fetch=mysqli_query($con,"SELECT * FROM `tbl_enabler` WHERE id='$enabler_id' AND `active_code` = '$active_code'");
        $count=mysqli_num_rows($fetch);
        if($count!=1) :
          header("Location:index.php");
        endif;
    else :
        header("Location:index.php");
    endif;
?>
<?php /*?>
<html>
<head>
  <title>Forget Password Recevory in php </title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<style type="text/css">
.error{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: #D65C4F;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }

</style>
</head>
<body>  
        <div class="modal-dialog">
        <h2>Forget Password Recevory in php</h2>
        
        <div class="modal-content col-md-8">
        <div class="modal-header">
        <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Change New Password</h4>
        </div><?php */?>
		
		
		<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Enabler Change Password - Bandhan</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		 <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<style type="text/css">
.error{
margin-top: 6px;
margin-bottom: 0;
color: #000;
background-color: #D65C4F;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
}
#error_result
{
 color:#000;
  }

</style>
	</head>

	<body class="login-layout light-login">
    		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Bandhan</span>
									<span class="white" id="id-text2">For India</span>
								</h1>
								<!--<h4 class="blue" id="id-company-text">&copy; Bandhan For India</h4>-->
							</div>

							<div class="space-6"></div>

							 <div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Change Your Password
											</h4>

											<div class="space-6"></div>
        <form method="post" autocomplete="off" id="password_form">
          <fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
                <input type="password" placeholder="New Password" id="passwords" name="password"  class="form-control required">
           <i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
          <label class="block clearfix">
														<span class="block input-icon input-icon-right">
              <input type="password" id="cpassword" placeholder="Re-enter New Password" name="cpassword" title="Password is mismatch" equalto="#passwords" class="form-control required" value="">
			  <i class="ace-icon fa fa-lock"></i>
            </span>
													</label>

													<div class="space"></div>

													<div class="clearfix" align="center">
          <!-- end Add popup  -->  
          <div id="error_result"></div>
            <input type="hidden" name="id" value="<?php echo $enabler_id; ?>" id="id">
            <button type="submit" id="btn-pwd" class="btn btn-primary"><i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Submit</span>
														</button>
        </form>          
        </div>        
        </div> 
       <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- demo ads -->
<!--<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:50px"
     data-ad-client="ca-pub-9665679251236729"
     data-ad-slot="6794107020"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> --> 
</body>
</html>
<script>  
  $(document).ready(function(){
    $(document).on('click','#btn-pwd',function(){
      var url = "new_password.php";       
      if($('#password_form').valid()){
        $('#error_result').html('<img src="ajax.gif" align="absmiddle"> Please wait...');  
        $.ajax({
        type: "POST",
        url: url,
        data: $("#password_form").serialize(),
          success: function(data) {                    
            if(data==1)
            {
              $('#error_result').html('Password reset successfully.');
              window.setTimeout(function() {
             window.location.href = 'enabler/index.php?sucess=1';
              }, 1000);
            } 
            else
            {
              $('#error_result').html('Password reset failed. Enter again.');              
            }
          }
        });
      }
      return false;
    });
});
</script>
		
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
										
										
										<!------
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>
										-------->	
										
										<!-------
											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													Register Here
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										--------->
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New Organization Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter Your Organization Details To Begin: </p>

											
					
											
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<!--<script src="assets/js/jquery-2.1.4.min.js"></script>-->

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		
	</body>
</html>
