<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<head>



	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

	<body>

	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> Forgot Password </h2>
			<form action="forgotPassword.php" method="post" autocomplete="off">
					<div class="form-group">
						<label> Username </label>
						<input type="text" name="username" class="form-control"  placeholder="Enter Your Username "required>
						    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
					</div>
				
					<button type="submit" class="btn btn-primary" name="next"  > Next</button>

</body>
</html>