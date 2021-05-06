
<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title> Login and registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


?>
<body>

	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> Login Here </h2>
				<form action="login.php" method="post">
					<div class="form-group">
						<label> Username </label>
						<input type="text" name="username" class="form-control"  placeholder="Enter Your Username "required>
					</div>
						<div class="form-group">
						<label> Password </label>
						<input type="password" name="password" class="form-control"  placeholder="Enter Your Password"required>
					</div>	
					<button type="submit" id="login" class="btn btn-primary" name="login"  > Login </button>
<br><br><br><br><br><br><br>
					   <a href="forgotPassword.php">Forgot password?</a>

			
</form>



						

			</form>
			</div>


	
		<div class="col-md-6 login-right">
				<h2> Register Here </h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label> Username </label>
						<input type="text" name="username" class="form-control" placeholder="Enter Your Username " required>
					</div>
						<div class="form-group">
						<label> Password </label>
						<input type="password" name="password" class="form-control"  placeholder="Enter Your Password "required>
					</div>

					<div class="form-group">
						<label> Confirm Password </label>
						<input type="password" name="cpassword" class="form-control"  placeholder="Enter Your Confirm Password "required>
					</div>

						<div class="form-group">
						<label> Email </label>
						<input type="text" name="email" class="form-control"  placeholder="Enter Your Email "required>
					</div>
					<button type="submit" class="btn btn-primary" name="register"> Register </button>

</form>
	</div>


</body>


</html>
