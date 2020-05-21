<?php

// session_start();

include '../connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Page</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/sb-admin.min.css" rel="stylesheet">

</head>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="navbar-brand">
                <a href="../index.php"><img src="../images/logo3.png" height="50" width="60"></a>
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

<body class="bg-dark" style="padding-top: 2.5%;">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>

       <!-- Display the Errors here -->
                    

      <div class="card-body">

        <form action="register.php" method="post" id="signup-form">

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="first_name
                  " id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="last_name" id="lastName" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="farmer_number" id="farmer_number" class="form-control" placeholder="Farmer's Number" required="required">
                  <label for="farmer_number">Farmer's Number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="national_ID" id="national_ID" class="form-control" placeholder="National ID" required="required">
                  <label for="national_ID">National ID</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="b_center_number" id="b_center_number" class="form-control" placeholder="Buying Center Number" required="required">
                  <label for="b_center_number">Buying Center Number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="tel_number" id="tel_number" class="form-control" placeholder="Mobile phone number" required="required">
                  <label for="tel_number">Mobile phone number</label>
                </div>
              </div>
             </div>
          </div>

  <div class="form-group">
    <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                  <label for="password">Password</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required="required">
                  <label for="password">Confirm Password</label>
                </div>
            </div>

          </div>
  </div>

          <button type="submit" class="btn btn-primary btn-block btn-lg" name="signup-btn" href="#">Register</button>
        </form>

    <!-- PHP code here -->
    <!-- <?php 
    if (isset($_POST['signup-btn'])) {
        // echo '<script>alert("Button has been  Clicked")</script>';

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $tel_number = $_POST['tel_number'];
        $national_ID = $_POST['national_ID'];
        $b_center_number = $_POST['b_center_number'];
        $password = $_POST['password'];



        // Check whetehr the values are null or not
        if ($first_name=="" || $last_name=="" || $email=="" || $tel_number=="" || $national_ID=="" || $b_center_number=="" || $password=="") {
           echo '<script>alert("Insert values in all fields")</script>';
        } else{
            $query = "insert into farmer_details (`first_name`, `last_name`, `email`, `tel_number`, `national_ID`, `b_center_number`, `password`) values('$first_name','$last_name','$email','$tel_number','$national_ID','$b_center_number','$password')";
            // $query_run = mysqli_query($conn,$query);

            if (mysqli_query($conn,$query)) {

                $_SESSION['success'] = "Successfully signed up, Continue to login";
                // header("Location: register.php");

                // echo '<script>alert("Values Inserted Successfully")</script>';
            } else {
                $_SESSION['error'] = "You have not been signed up, the email address already exists";
                // header("Location: register.php");

                // echo '<script>alert("Values NOT Inserted")</script>';
            }
        }

    }

     ?> -->

        <div class="text-center">
          <a class="d-block small mt-3" href="../login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script type="text/javascript">
 
$(document).ready(function() {
    $('#signup-form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            'username': {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        // min: 5,
                        max: 30,
                        message: 'The username must be less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    // different: {
                    //     field: 'password',
                    //     message: 'The username and password cannot be the same as each other'
                    // }
                }
            },
            'email': {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            'password': {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    stringLength: {
                        // min: 8,
                        // message: 'The password must have at least 8 characters'
                    },
                    identical: {
                        field : 'password',
                        message: 'The two passwords are not the same'
                    }
                }

            },
            'confirm_password': {
            message: 'The repeat password is not valid',
            validators: {
                notEmpty: {
                    message: 'The confirm password is required and cannot be empty'
                },
                identical: {
                    field: 'password',
                    message: 'The two passwords are not the same'
                }
        }
    }
},
        onSuccess:function(){
            // alert('Allow to signup');
        }
    });
});

</script>

</body>

</html>
