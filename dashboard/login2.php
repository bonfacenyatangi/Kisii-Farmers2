<?php 
 session_start();
//echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="dashboard/css/sb-admin.css" rel="stylesheet">
  <link href="dashboard/css/sb-admin.min.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Mkilima Login Page</div>

      <?php  if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error']; ?>
                </div>
      <?php unset($_SESSION['error']); }  ?>

      <div class="card-body">
        <form action="test2.php" method="post" id="login-form">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name="login2-btn" class="btn btn-primary btn-block btn-lg">Login</button>
          </div>
        </form>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
          <a class="d-block small" href="dashboard/forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Ending the sessions -->

<?php 
session_destroy();
?>

</body>

</html>

  <!-- Bootstrap core JavaScript-->
<script src="dashboard/vendor/jquery/jquery.min.js"></script>
<script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- <script type="text/javascript" src="../plugins/bootstrap/js/bootstrapValidator.js"></script> -->
<script type="text/javascript" src="plugins/popper/popper.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>


<!--  -->