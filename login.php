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

  <title>Login Page</title>

  <!-- Custom fonts for this template-->
  <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="dashboard/css/sb-admin.css" rel="stylesheet">
  <link href="dashboard/css/sb-admin.min.css" rel="stylesheet">

</head>

<body class="bg-dark" style="padding-top: 5%;">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="navbar-brand">
                <a href="index.php"><img src="images/logo3.png" height="50" width="60"></a>
            </div>
            <!--  -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Links -->
            <div class="navbar-collapse collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><button type="button" class="btn btn-outline-success">Mkulima</button></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><button type="button" class="btn btn-outline-success">Trends</button></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><button type="button" class="btn btn-outline-success">News</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><button type="button" class="btn btn-outline-success">Tenders</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php"><button type="button" class="btn btn-outline-success">Gallery</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#background"><button type="button" class="btn btn-outline-success">About Us</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact-us"><button type="button" class="btn btn-outline-success">Contact Us</button></a>
                    </li>
                </ul>
            </div>
        </nav>


  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Mkilima Login Page</div>

      <?php  if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error']; ?>
                </div>
      <?php unset($_SESSION['error']); }  ?>

      <div class="card-body">

        <form action="dashboard/test2.php" method="post" id="login-form">

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
            <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
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
