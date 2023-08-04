<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$theme = $_POST['theme'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			
			
			$query = "UPDATE owner SET name='$name',description='$description', theme='$theme' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: about_setting.php');
			}
?>
