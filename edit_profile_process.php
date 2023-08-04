<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$profile = $_POST['profile'];
			
			$query = "UPDATE user SET profile='$profile' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location:edit_user.php');
					echo "<script>alert('Change Profile Succesfully.')</script>";
			}
?>
