<?php
    include "connect1.php";

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile = $_POST['profile'];

    // username already exists
    $check_query = "SELECT * FROM admin WHERE username='$username'";
    $check_result = mysqli_query($koneksi, $check_query);
    if(mysqli_num_rows($check_result) > 0){
        // show alert
        echo "<script>alert('Username already taken.')</script>";
        return false;
    }
    else{
        // Insert new admin data
        $query = "INSERT INTO admin (fullname, username, email, password, profile) VALUES ('$fullname', '$username', '$email', '$password', '$profile')";
        $hasil =  mysqli_query($koneksi, $query);
        if($hasil){
            echo "<script>alert('Admin successfully created.')</script>";
        }
    }
?>

