<?php
	include "connect1.php";
			
	$username = $_POST['username'];
	$usernameold = $_POST['usernameold'];
	$password = $_POST['password'];
	$passwordold = $_POST['passwordold'];
	$profile = $_POST['profile'];
	$profileold = $_POST['profileold']; 
	
	$query = "UPDATE admin SET username = '$username', password = '$password', profile = '$profile' WHERE username = '$usernameold' AND password = '$passwordold'";
	
	$hasil = mysqli_query($koneksi, $query);
	
	if($hasil){
		header('location: profile.php');
	}		
?>
