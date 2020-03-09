<?php

session_start();

include 'connection.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!-- Bootstrap css 4 links -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrapValidator.css">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css"> 

    <title>Register</title>

</head>

<body style="padding-top: 3%; overflow-x: hidden;">
    
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
    <div class="signup-container bg-dark">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div bg-light">
                <form action="signup.php" method="post" id="signup-form">
                    <h3 class="text-center">Mkulima Registration Page</h3>
                       

                 <!-- Display the Errors here -->
                    <?php  if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo $_SESSION['error']; ?>
                        </div>
                    <?php unset($_SESSION['error']); 
                        }else if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION['success']; ?>
                        </div>

                       <?php unset($_SESSION['success']); }
                      ?>


                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="passwordConf">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control form-control-lg" placeholder="Re-enter Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign up</button>
                    </div>
                    <p class="text-center">Already a Member? <a href="login.php">Login</a> </p>
                    
                </form>
    <!-- PHP code here -->
    <?php 
    if (isset($_POST['signup-btn'])) {
        // echo '<script>alert("Button has been  Clicked")</script>';

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check whetehr the values are null or not
        if ($username=="" || $email=="" || $password=="" ) {
           echo '<script>alert("Insert values in all fields")</script>';
        } else{
            $query = "insert into members (`username`, `email`, `password`) values('$username','$email','$password')";
            // $query_run = mysqli_query($conn,$query);

            if (mysqli_query($conn,$query)) {

                $_SESSION['success'] = "Successfully signed up, Continue to login";
                // header("Location: signup.php");

                // echo '<script>alert("Values Inserted Successfully")</script>';
            } else {
                $_SESSION['error'] = "You have not been signed up, the email address already exists";
                // header("Location: signup.php");

                // echo '<script>alert("Values NOT Inserted")</script>';
            }
        }

    }

     ?>



            </div>
        </div>
    </div>

</body>

</html>
<script type="text/javascript" src="plugins/popper/popper.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrapValidator.js"></script>

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