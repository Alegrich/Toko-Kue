<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			
			$query = "update user set name = '$name', email = '$email' where id = '$id'";
			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location:all_user.php');
			}
?>
