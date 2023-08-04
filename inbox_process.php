<?php
			include "connect1.php";
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			
			$query = "INSERT INTO inbox(id, firstname, email, message) VALUES (NULL, '$name', '$email', '$message')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				echo "<script>alert('Report sent successfully.')</script>";
			}
?>
