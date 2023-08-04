<?php
		session_start();
		include "connect1.php";
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		
		$hasil = mysqli_query($koneksi, $query);
		
		if(mysqli_num_rows 	($hasil) > 0){
				//set session
				$_SESSION['admin_login'] = true;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				
				header('location: dashboard.php');
		}else{
				echo "<script>alert('Your password or Username incorrect.')</script>";
		}
?>
