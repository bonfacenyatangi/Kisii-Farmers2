<?php 
 session_start();
//echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>';

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- Bootstrap css 4 links -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrapValidator.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->



    <title>Login</title>

</head>

<body style="height: 10%; overflow-x: hidden;"  class="bg-dark">

<div id="home">
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
        </div>

    <div class="login-container h-100">
        <div class="row">
            <div class="bg-light col-md-4 offset-md-4 form-div login">

                
                <form action="test.php" method="post" id="login-form">
                    <h2 class="text-center">Mkulima Login Page</h2>
                    <?php  if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo $_SESSION['error']; ?>
                        </div>
                    <?php unset($_SESSION['error']); }  ?>
                                           
                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" class="form-control form-control-lg">
                    </div>
                   
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>
                    <p class="text-center">Not a Member? <a href="signup.php">Sign Up</a> </p>
                    
                </form>
            </div>
        </div>
    </div>

<?php 
session_destroy();
?>
</body>

</html>
<script type="text/javascript" src="plugins/popper/popper.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrapValidator.js"></script>

<script type="text/javascript">
 
$(document).ready(function() {
    $('#login-form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
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
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    },
                    stringLength: {
                        // min: 8,
                        // message: 'The password must have at least 8 characters'
                    }
                }
            },
            birthday: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    },
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The date of birth is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            }
        },
        onSuccess:function(){
            // alert('Will you like to submit');
        }
    });
});

</script>