

<!doctype html>
<html lang="en">
  <head>
  	<title>User Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<center><h2><?php

						if (isset($_REQUEST['msg'])){
							if($_REQUEST['msg'] == 'sd'){
								echo "A new Password will be sent to your mail after Admin's approval";
							}
							
						}

						?></h2>
					<h2 style="color: green"><?php

						if (isset($_REQUEST['msg'])){
							if($_REQUEST['msg'] == 'dn'){
								echo "Registration Successfull. Now You can Login";
							}
							
						}

						?></h2></center> 
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">User Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Log In</h3>
		      	<center><h3><?php

						if (isset($_REQUEST['msg'])){
							if($_REQUEST['msg'] == 'null'){
								echo "ID/Password missing";
							}
							elseif ($_REQUEST['msg'] == 'null2') {
								echo "Wrong ID/Password";
							}
							elseif ($_REQUEST['msg'] == 'deactive') {
								echo "Your account has not been Activated by Admin";
							}
							elseif($_REQUEST['msg'] == 'err'){
								echo "Please Login First";
							}
						}

						?></h3>
						</center> 
						<form method='post' action="../php/logincheck.php" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="User ID" name="userID" >
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" >
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="lbtn">Login</button>
	            </div>
				<div class="form-group">
				<a class="form-control btn btn-primary rounded submit px-3" href="../SignUp/">Sign Up</a>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50">
						<a href="auth_pass_recovery_boxed.php">Forgot Password</a>
									</label>
								</div>
								
	            </div>
	          </form>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

