<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$foto = $_POST['foto'];
			
			$query = "UPDATE owner SET foto='$foto' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: about_setting.php');
					echo "<script>alert('Change Succesfully.')</script>";
			}
?>
