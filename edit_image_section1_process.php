<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$foto = $_POST['foto'];
			
			$query = "UPDATE home SET foto='$foto' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: home_setting.php');
					echo "<script>alert('Change Succesfully.')</script>";
			}
?>
