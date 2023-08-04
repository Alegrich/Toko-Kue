<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$profile = $_POST['profile'];
			
			$query = "UPDATE admin SET profile='$profile' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location:edit_admin.php');
					echo "<script>alert('Change Profile Succesfully.')</script>";
			}
?>
