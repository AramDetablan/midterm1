<?php require_once "controllerUserData.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!--  <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="fpassword.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                 
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-otp" value="Submit">
                    </div>
                         <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Resend">
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>