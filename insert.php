<?php

if (isset($_POST['signup-btn'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];


if (!empty($username) || !empty($password) || !empty($email)) {
    
     $query = "INSERT INTO members values ('$username', '$email', '$password')";
     $results = mysqli_query($conn,$sql);
     if ($results) {
       echo '<script>alert("Data inserted successfully")</script>';
     } else {
       echo '<script>alert("Data NOT inserted")</script>';
     }

} else {
 echo "All field are required";
 die();
}

}


?>