<?php
		session_start();
		include "connect1.php";
		
		$name= $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$query = "SELECT name, email, password FROM user WHERE email = '$email' AND password = '$password'";

		
		$hasil = mysqli_query($koneksi, $query);
		
		if(mysqli_num_rows 	($hasil) > 0){
				//set session
				$_SESSION['login'] = true;
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				
				header('location: home.php');
		}else{
				echo "<script>alert('Your password or Email incorrect.')</script>";
		}
?>
