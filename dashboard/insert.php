<?php

if (isset($_POST['signup-btn'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $tel_number = $_POST['tel_number'];
        $national_ID = $_POST['national_ID'];
        $b_center_number = $_POST['b_center_number'];
        $password = $_POST['password'];


if (!empty($first_name) || !empty($last_name) || !empty($email) || !empty($tel_number) || !empty($national_ID) || !empty($b_center_number) || !empty($password)) {
    
     $query = "INSERT INTO farmer_details values ('$first_name', '$last_name', '$email', '$tel_number', '$national_ID', '$b_center_number', '$password')";
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