<?php
    include "connect1.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile = $_POST['profile'];

    // Check Username
    $check_query = "SELECT * FROM user WHERE name='$name'";
    $check_result = mysqli_query($koneksi, $check_query);
    if(mysqli_num_rows($check_result) > 0){
        // show alert
        echo "<script>alert('Username already taken.')</script>";
    }
    else{
        // Insert new user data
        $query = "INSERT INTO user (name, email, password, profile) VALUES ('$name', '$email', '$password', '$profile')";
        $hasil =  mysqli_query($koneksi, $query);
        if($hasil){
            echo "<script>alert('Users successfully created.')</script>";
        }
    }
?>

