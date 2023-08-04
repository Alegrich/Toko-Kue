<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$foto = $_POST['foto'];
			
			$query = "UPDATE product SET cakefoto='$foto' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: edit_section2.php');
					echo "<script>alert('Change Profile Succesfully.')</script>";
			}
?>
