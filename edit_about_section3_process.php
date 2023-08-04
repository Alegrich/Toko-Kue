<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			
			
			$query = "UPDATE mission SET title='$title', description='$description' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: about_setting.php');
					echo "<script>alert('Edit successfully.')</script>";
			}
?>
