<?php
session_start();
include('include/config.php');
if(isset($_POST['submit']))
{	
	// echo '<script>"no error till here"</script>';
$email=$_SESSION['email'];
$uname=$_SESSION['username'];

$name=$_POST['name'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$age=$_POST['age'];
$year=$_POST['year'];
$uni=$_POST['uni'];
$sql=mysqli_query($con,"insert into studentdetails values('$email','$name','$age','$gender','$phone','$year','$city','$uni','na')");
if($sql)
{
    //if successfull entry in database
    $sql1="update login set completed='completed' where email='$email'";
    $result=mysqli_query($con,$sql1);
    if($result){

    echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Registration success",
                text: "Registration success.Click OK to go to dashboard",
                icon: "success",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="home.php";
            });
        });
    </script>';
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<link
		href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	<script>
	</script>
</head>

<body>
	<div id="app">
		<?php /*include('include/sidebar.php');*/?>
		<div class="app-content">
			<?php /*include('include/header.php');*/?>

			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Please complete your Registration!</h1>
							</div>

						</div>
					</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Add User</h5>
											</div>
											<div class="panel-body">
												<form role="form" name="" method="post" enctype="multipart/form-data">

													<div class="form-group">
														<label for="username">
															 Name
														</label>
														<input type="text" name="name" class="form-control"
															placeholder="Enter your name" required="true">
													</div>
													<div class="form-group">
														<label for="contact">
															Contact no
														</label>
														<input type="text" name="phone" class="form-control"
															placeholder="Enter your contact no" required="true"
															maxlength="10" pattern="[0-9]+">
													</div>
													<div class="form-group">
														<label for="fess">
															 Age
														</label>
														<input type="text" name="age" class="form-control"
															placeholder="Enter your age" required="true">
													</div>
													<div class="form-group">
														<label class="block">
															Gender
														</label>
														<div class="clip-radio radio-primary">
															<input type="radio" id="rg-female" name="gender"
																value="female">
															<label for="rg-female">
																Female
															</label>
															<input type="radio" id="rg-male" name="gender" value="male">
															<label for="rg-male">
																Male
															</label>
														</div>
													</div>

													<div class="form-group">
														<label for="address">
															Current Location
														</label>
														<input type="text" name="city" class="form-control"
															placeholder="Enter your city" required="true">
											
													</div>
													<div class="form-group">
														<label for="address">
															University
														</label>
														<input type="text" name="uni" class="form-control"
															placeholder="Enter your university/institute" required="true">
											
													</div>
													<div class="form-group">
														<label for="year">
															Year of Graduation
														</label>
														<select name="year" class="form-control"
															placeholder="Enter your year of graduation" required="true">
															<?php
																for ($x = 1990; $x <= 2030; $x++) {
															?>
																<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
																
															<?php } ?>
														<!-- <option value="2015">Volvo</option>
														<option value="2016">Saab</option>
														<option value="2017">Fiat</option>
														<option value="2018">Audi</option> -->
									
														</select>
											
													</div>
													
													<button type="submit" name="submit" id="submit"
														class="btn btn-o btn-primary">
														Submit
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="panel panel-white">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
	<!-- end: FOOTER -->

	<!-- start: SETTINGS -->

	<!-- end: SETTINGS -->
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
	<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script src="vendor/autosize/autosize.min.js"></script>
	<script src="vendor/selectFx/classie.js"></script>
	<script src="vendor/selectFx/selectFx.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CLIP-TWO JAVASCRIPTS -->
	<script src="assets/js/main.js"></script>
	<!-- start: JavaScript Event Handlers for this page -->
	<script src="assets/js/form-elements.js"></script>
	<script>
		jQuery(document).ready(function () {
			Main.init();
			FormElements.init();
		});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>