<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$photo= $_POST['photo'];
			
			$query = "UPDATE home2 SET photo='$photo' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: edit_section1,2.php');
					echo "<script>alert('Change Succesfully.')</script>";
			}
?>
