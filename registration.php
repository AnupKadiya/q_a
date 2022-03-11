	<?php
include_once('connection.php');
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $adr = $_POST['address'];
    $gen = $_POST['gender'];
    $daob = $_POST['dob'];
    $phn = $_POST['phone'];
    
    $mail = $_POST['email'];
    $pwd = $_POST['password'];
    $conpwd = $_POST['password_again'];
   
   
    
  
    
    
    	
    $query = "INSERT INTO user_master(u_name,u_addr,u_gender,u_birthdate,u_ph,u_mail,u_pwd,u_con_pwd)
 values ('$name','$adr','$gen','$daob','$phn','$mail','$pwd','$conpwd');";
    $result1 = mysqli_query($conn, $query);
    if ($result1) {
        echo "<script>alert('Successfully Registered. You can login now');</script>";
        header('location:user-login.php');
    }
    
	}
    else{
		//$msg = "Please Fill The Form Appropriately !!";	
    }


?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}

</script>
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2>Q_A / User Registration</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" action="" onSubmit="return valid();">
						<fieldset>
							<legend>
								Sign Up
							</legend>
							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="name" value="" placeholder="Full Name" >
                                
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" value="" placeholder="Address" >
                                
							</div>
                           
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										Male
									</label>
								</div>
                                
                            </div>
                            <div>
                                <b> <label> Birthdate:</label></b>&nbsp &nbsp<input type="date" value="" class="" name="dob" id="dob">
                            </div><br>
                            

                            <div class="form-group">
                                <label><b>Phone Number</b></label>
                                <input type="text" class="form-control" placeholder="Phone number" value="" name="phone" minlength="10" maxlength="10">
                            
                            </div>
                            

                            <p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" value=""   placeholder="Email" >
									<i class="fa fa-envelope"></i> </span>
									 
                            
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" value="" minlength="6" placeholder="Password" >
									<i class="fa fa-lock"></i> </span>
                            
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control"  id="password_again" name="password_again" value="" minlength="6" placeholder="Password Again" >
									<i class="fa fa-lock"></i> </span>
                            
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										I agree
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="user-login.php">
										Log-in
									</a>
								</p>
								<span class="text-danger"><?php if (isset($msg)){echo $msg	;}?></span>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase">Question / Answer</span>
					</div>

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
			document.getElementById("blood").value = "<?php echo $bgroup; ?>";
            document.getElementById("area").value = "<?php echo $area; ?>";
            document.getElementById("dob").value = "<?php echo $daob; ?>";
            document.getElementById("rg-"+"<?php echo $gen; ?>").checked = true;
		</script>
		
	
		
	</body>
	<!-- end: BODY -->
</html>