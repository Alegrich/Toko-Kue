<?php
		include "connect1.php";
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$profile = $_POST['profile'];
		
		$query = "insert into user(name, email, password, profile) values ('$name', '$email', '$password', '$profile')";
		
		$hasil = mysqli_query($koneksi, $query);
		
		if($hasil){
			header('location: all_user.php');      
		}
?>
